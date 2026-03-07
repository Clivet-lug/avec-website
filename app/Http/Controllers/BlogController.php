<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::published()
            ->with(['category', 'author'])
            ->latest('published_at')
            ->paginate(9);

        $categories = BlogCategory::withCount('posts')->get();

        return view('pages.blog.index', compact('posts', 'categories'));
    }

    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)
            ->published()
            ->with(['category', 'author'])
            ->firstOrFail();

        $relatedPosts = $post->relatedPosts(3);

        return view('pages.blog.show', compact('post', 'relatedPosts'));
    }

    public function category($slug)
    {
        $category = BlogCategory::where('slug', $slug)->firstOrFail();

        $posts = BlogPost::published()
            ->where('category_id', $category->id)
            ->with(['category', 'author'])
            ->latest('published_at')
            ->paginate(9);

        $categories = BlogCategory::withCount('posts')->get();

        return view('pages.blog.index', compact('posts', 'categories', 'category'));
    }
}
