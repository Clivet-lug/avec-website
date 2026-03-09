@extends('layouts.app')

@section('title', $post->meta_title ?: $post->title . ' - AVEC Technologies')
@section('meta_description', $post->meta_description ?: $post->excerpt)

@section('content')
    <!-- Article Header -->
    <article class="relative pt-32 pb-20">
        <div class="max-w-4xl mx-auto px-6">
            <!-- Back Link -->
            <div class="mb-8 fade-in-up">
                <a href="{{ route('blog.index') }}"
                    class="inline-flex items-center text-avec-cyan hover:text-avec-purple transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Back to Blog
                </a>
            </div>

            <!-- Category & Date -->
            <div class="flex items-center gap-4 text-sm text-gray-400 mb-6 fade-in-up" style="animation-delay: 0.1s;">
                <a href="{{ route('blog.category', $post->category->slug) }}"
                    class="px-4 py-2 bg-avec-cyan/20 text-avec-cyan rounded-full font-semibold hover:bg-avec-cyan/30 transition-colors">
                    {{ $post->category->name }}
                </a>
                <time datetime="{{ $post->published_at->format('Y-m-d') }}">
                    {{ $post->published_at->format('F d, Y') }}
                </time>
                <span>•</span>
                <span>{{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read</span>
            </div>

            <!-- Title -->
            <h1 class="text-4xl md:text-6xl font-display font-bold mb-6 dark:text-white text-avec-dark fade-in-up"
                style="animation-delay: 0.2s;">
                {{ $post->title }}
            </h1>

            <!-- Excerpt -->
            @if ($post->excerpt)
                <p class="text-xl text-gray-300 dark:text-gray-300 leading-relaxed mb-8 fade-in-up"
                    style="animation-delay: 0.3s;">
                    {{ $post->excerpt }}
                </p>
            @endif

            <!-- Author -->
            @if ($post->author)
                <div class="flex items-center mb-12 pb-8 border-b border-white/10 fade-in-up"
                    style="animation-delay: 0.4s;">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-full flex items-center justify-center text-xl font-bold mr-4">
                        {{ substr($post->author->name, 0, 1) }}
                    </div>
                    <div>
                        <p class="font-semibold text-lg">{{ $post->author->name }}</p>
                        <p class="text-sm text-gray-400">Author</p>
                    </div>
                </div>
            @endif

            <!-- Featured Image -->
            @if ($post->featured_image)
                <div class="mb-12 rounded-3xl overflow-hidden fade-in-up" style="animation-delay: 0.5s;">
                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                        class="w-full aspect-video object-cover">
                </div>
            @endif

            <!-- Content -->
            <div class="prose prose-lg prose-invert max-w-none fade-in-up" style="animation-delay: 0.6s;">
                {!! $post->content !!}
            </div>

            <!-- Share Buttons -->
            <div class="mt-12 pt-8 border-t border-white/10">
                <h3 class="text-xl font-display font-bold mb-4">Share this article</h3>
                <div class="flex gap-4">
                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(route('blog.show', $post->slug)) }}"
                        target="_blank" class="px-6 py-3 glass glass-hover rounded-full font-semibold flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                        Twitter
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('blog.show', $post->slug)) }}&title={{ urlencode($post->title) }}"
                        target="_blank" class="px-6 py-3 glass glass-hover rounded-full font-semibold flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                        LinkedIn
                    </a>
                    <button onclick="copyToClipboard()"
                        class="px-6 py-3 glass glass-hover rounded-full font-semibold flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                        Copy Link
                    </button>
                </div>
            </div>
        </div>
    </article>

    <!-- Related Posts -->
    @if ($relatedPosts->count() > 0)
        <section class="relative py-20 bg-avec-dark/50 dark:bg-avec-dark/50">
            <div class="max-w-7xl mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-display font-bold mb-12 text-center">Related Articles</h2>

                <div class="grid md:grid-cols-3 gap-8">
                    @foreach ($relatedPosts as $related)
                        <article
                            class="glass rounded-3xl overflow-hidden group hover:scale-105 transition-all duration-300">
                            @if ($related->featured_image)
                                <div
                                    class="aspect-video overflow-hidden bg-gradient-to-br from-avec-cyan/20 to-avec-purple/20">
                                    <img src="{{ asset('storage/' . $related->featured_image) }}"
                                        alt="{{ $related->title }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                            @else
                                <div
                                    class="aspect-video bg-gradient-to-br from-avec-cyan/20 to-avec-purple/20 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-avec-cyan/50" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                                        </path>
                                    </svg>
                                </div>
                            @endif

                            <div class="p-6">
                                <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                                    <span class="px-2 py-1 bg-avec-cyan/20 text-avec-cyan rounded-full font-semibold">
                                        {{ $related->category->name }}
                                    </span>
                                    <time>{{ $related->published_at->format('M d, Y') }}</time>
                                </div>

                                <h3
                                    class="text-xl font-display font-bold mb-3 group-hover:text-avec-cyan transition-colors line-clamp-2">
                                    <a href="{{ route('blog.show', $related->slug) }}">
                                        {{ $related->title }}
                                    </a>
                                </h3>

                                <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                                    {{ $related->excerpt }}
                                </p>

                                <a href="{{ route('blog.show', $related->slug) }}"
                                    class="inline-flex items-center text-avec-cyan hover:text-avec-purple transition-colors text-sm font-semibold">
                                    Read More
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- CTA -->
    <section class="relative py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 dark:text-white text-avec-dark">
                Ready to Transform Your Institution?
            </h2>
            <p class="text-xl text-gray-300 dark:text-gray-300 mb-8">
                Let's discuss how we can help build your digital future.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-block px-10 py-5 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full font-semibold text-lg hover:shadow-2xl hover:shadow-avec-cyan/50 transition-all transform hover:scale-105">
                Get Started
            </a>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function copyToClipboard() {
            const url = window.location.href;
            navigator.clipboard.writeText(url).then(() => {
                alert('Link copied to clipboard!');
            });
        }
    </script>
@endpush
