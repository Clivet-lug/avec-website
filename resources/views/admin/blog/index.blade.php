@extends('layouts.admin')

@section('title', 'Blog Posts')

@section('content')
    <div class="space-y-6">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-display font-bold text-gray-900 dark:text-white">Blog Posts</h1>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Manage all blog posts</p>
            </div>
            <a href="{{ route('admin.blog.create') }}"
                class="px-6 py-3 bg-avec-cyan text-white rounded-lg hover:bg-avec-cyan/90 transition-colors flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                New Post
            </a>
        </div>

        <!-- Posts Table -->
        <div class="bg-white dark:bg-avec-navy shadow rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-white/10">
                <thead class="bg-gray-50 dark:bg-avec-dark">
                    <tr>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Title</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Category</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Author</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Status</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Date</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-avec-navy divide-y divide-gray-200 dark:divide-white/10">
                    @forelse($posts as $post)
                        <tr class="hover:bg-gray-50 dark:hover:bg-avec-dark">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    @if ($post->featured_image)
                                        <img src="{{ asset('storage/' . $post->featured_image) }}"
                                            class="w-10 h-10 rounded object-cover mr-3">
                                    @endif
                                    <div class="text-sm font-medium text-gray-900 dark:text-white">
                                        {{ Str::limit($post->title, 60) }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-avec-cyan/20 text-avec-cyan">
                                    {{ $post->category->name }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                {{ $post->author->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($post->status === 'published')
                                    <span
                                        class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 dark:bg-green-900/20 text-green-800 dark:text-green-400">
                                        Published
                                    </span>
                                @else
                                    <span
                                        class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 dark:bg-yellow-900/20 text-yellow-800 dark:text-yellow-400">
                                        Draft
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                {{ $post->published_at ? $post->published_at->format('M d, Y') : $post->created_at->format('M d, Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-3">
                                <a href="{{ route('blog.show', $post->slug) }}" target="_blank"
                                    class="text-gray-600 dark:text-gray-400 hover:text-avec-cyan">
                                    View
                                </a>
                                <a href="{{ route('admin.blog.edit', $post) }}"
                                    class="text-avec-cyan hover:text-avec-purple">
                                    Edit
                                </a>
                                <form action="{{ route('admin.blog.destroy', $post) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Are you sure you want to delete this post?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                <p class="mt-4 text-sm text-gray-500 dark:text-gray-400">No blog posts yet.</p>
                                <a href="{{ route('admin.blog.create') }}"
                                    class="mt-2 inline-block text-avec-cyan hover:text-avec-purple">
                                    Create your first post
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            @if ($posts->hasPages())
                <div class="px-6 py-4 border-t border-gray-200 dark:border-white/10">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
