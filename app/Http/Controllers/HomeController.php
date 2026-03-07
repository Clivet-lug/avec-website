<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\TeamMember;

class HomeController extends Controller
{
    public function index()
    {
        // Get latest 3 blog posts for homepage
        $latestPosts = BlogPost::published()
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('pages.home', compact('latestPosts'));
    }
}
