@extends('layouts.app')

@section('title', isset($category) ? $category->name . ' - Blog - AVEC Technologies' : 'Blog - AVEC Technologies')
@section('meta_description', isset($category) ? $category->description : 'Insights, thought leadership, and updates from
    AVEC Technologies on digital transformation in Africa.')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[50vh] flex items-center pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6 w-full">
            <div class="text-center fade-in-up">
                <span class="px-4 py-2 glass rounded-full text-sm font-medium text-avec-cyan inline-block mb-6">
                    @if (isset($category))
                        {{ $category->name }}
                    @else
                        Our Blog
                    @endif
                </span>
                <h1 class="text-5xl md:text-7xl font-display font-bold leading-tight dark:text-white text-avec-dark mb-6">
                    @if (isset($category))
                        {{ $category->name }}
                    @else
                        Insights &
                        <span class="bg-gradient-to-r from-avec-cyan to-avec-purple bg-clip-text text-transparent">
                            Thought Leadership
                        </span>
                    @endif
                </h1>
                <p class="text-xl text-gray-300 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    @if (isset($category))
                        {{ $category->description }}
                    @else
                        Digital transformation insights, industry analysis, and updates from the frontlines of African
                        technology.
                    @endif
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="relative py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-4 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-3">
                    @if ($posts->count() > 0)
                        <div class="grid md:grid-cols-2 gap-8">
                            @foreach ($posts as $post)
                                <article
                                    class="glass rounded-3xl overflow-hidden group hover:scale-105 transition-all duration-300 fade-in-section"
                                    style="animation-delay: {{ $loop->index * 0.1 }}s;">
                                    <!-- Featured Image -->
                                    @if ($post->featured_image)
                                        <div
                                            class="aspect-video overflow-hidden bg-gradient-to-br from-avec-cyan/20 to-avec-purple/20">
                                            <img src="{{ asset('storage/' . $post->featured_image) }}"
                                                alt="{{ $post->title }}"
                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        </div>
                                    @else
                                        <div
                                            class="aspect-video bg-gradient-to-br from-avec-cyan/20 to-avec-purple/20 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-avec-cyan/50" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                                                </path>
                                            </svg>
                                        </div>
                                    @endif

                                    <div class="p-6">
                                        <!-- Meta -->
                                        <div class="flex items-center gap-4 text-sm text-gray-400 mb-4">
                                            <span
                                                class="px-3 py-1 bg-avec-cyan/20 text-avec-cyan rounded-full text-xs font-semibold">
                                                {{ $post->category->name }}
                                            </span>
                                            <time datetime="{{ $post->published_at->format('Y-m-d') }}">
                                                {{ $post->published_at->format('M d, Y') }}
                                            </time>
                                        </div>

                                        <!-- Title -->
                                        <h2
                                            class="text-2xl font-display font-bold mb-3 group-hover:text-avec-cyan transition-colors">
                                            <a href="{{ route('blog.show', $post->slug) }}">
                                                {{ $post->title }}
                                            </a>
                                        </h2>

                                        <!-- Excerpt -->
                                        <p class="text-gray-300 dark:text-gray-300 mb-4 line-clamp-3">
                                            {{ $post->excerpt }}
                                        </p>

                                        <!-- Read More -->
                                        <a href="{{ route('blog.show', $post->slug) }}"
                                            class="inline-flex items-center text-avec-cyan hover:text-avec-purple transition-colors font-semibold">
                                            Read More
                                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>

                                        <!-- Author -->
                                        @if ($post->author)
                                            <div class="mt-6 pt-4 border-t border-white/10 flex items-center">
                                                <div
                                                    class="w-10 h-10 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-full flex items-center justify-center text-sm font-bold mr-3">
                                                    {{ substr($post->author->name, 0, 1) }}
                                                </div>
                                                <div>
                                                    <p class="text-sm font-semibold">{{ $post->author->name }}</p>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </article>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        @if ($posts->hasPages())
                            <div class="mt-12">
                                {{ $posts->links() }}
                            </div>
                        @endif
                    @else
                        <div class="text-center py-20 glass rounded-3xl">
                            <svg class="w-20 h-20 mx-auto text-gray-400 mb-6" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                            <h3 class="text-2xl font-display font-bold mb-2">No posts yet</h3>
                            <p class="text-gray-400">Check back soon for insights and updates.</p>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <aside class="lg:col-span-1">
                    <!-- Categories -->
                    <div class="glass rounded-3xl p-6 mb-8 sticky top-24 fade-in-section">
                        <h3 class="text-xl font-display font-bold mb-6">Categories</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="{{ route('blog.index') }}"
                                    class="flex items-center justify-between text-gray-300 hover:text-avec-cyan transition-colors {{ !isset($category) ? 'text-avec-cyan font-semibold' : '' }}">
                                    <span>All Posts</span>
                                    <span
                                        class="text-sm text-gray-500">{{ \App\Models\BlogPost::published()->count() }}</span>
                                </a>
                            </li>
                            @foreach ($categories as $cat)
                                <li>
                                    <a href="{{ route('blog.category', $cat->slug) }}"
                                        class="flex items-center justify-between text-gray-300 hover:text-avec-cyan transition-colors {{ isset($category) && $category->id === $cat->id ? 'text-avec-cyan font-semibold' : '' }}">
                                        <span>{{ $cat->name }}</span>
                                        <span class="text-sm text-gray-500">{{ $cat->posts_count }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-20 bg-gradient-to-r from-avec-cyan to-avec-purple">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-avec-dark">
                Stay Updated
            </h2>
            <p class="text-xl text-avec-dark/80 mb-8">
                Want to receive our latest insights? Get in touch.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-block px-10 py-5 bg-avec-dark text-white rounded-full font-semibold text-lg hover:bg-avec-dark/90 transition-all transform hover:scale-105">
                Contact Us
            </a>
        </div>
    </section>
@endsection
