@extends('layouts.app')

@section('title', 'Our Team - AVEC Technologies')
@section('meta_description', 'Meet the team behind AVEC Technologies - excellence over mediocrity, security-first
    thinking, and long-term architecture mindset.')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6 w-full">
            <div class="text-center fade-in-up">
                <span class="px-4 py-2 glass rounded-full text-sm font-medium text-avec-cyan inline-block mb-6">
                    Our Team
                </span>
                <h1 class="text-5xl md:text-7xl font-display font-bold leading-tight dark:text-white text-avec-dark mb-6">
                    Visionary
                    <span class="bg-gradient-to-r from-avec-cyan to-avec-purple bg-clip-text text-transparent">
                        Leadership
                    </span>
                </h1>
                <p class="text-xl text-gray-300 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Excellence over mediocrity. Security-first thinking. Long-term architecture mindset.
                </p>
            </div>
        </div>
    </section>

    <!-- Team Grid -->
    <section class="relative py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($team as $member)
                    <div class="glass rounded-3xl p-8 text-center fade-in-section hover:scale-105 transition-all duration-300 group"
                        style="animation-delay: {{ $loop->index * 0.1 }}s;">
                        @if ($member->photo && file_exists(public_path('images/' . $member->photo)))
                            <img src="{{ asset('images/' . $member->photo) }}" alt="{{ $member->name }}"
                                class="w-32 h-32 mx-auto mb-6 rounded-full object-cover ring-4 ring-avec-cyan/50 group-hover:ring-avec-purple/50 transition-all">
                        @else
                            <div
                                class="w-32 h-32 mx-auto mb-6 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-full flex items-center justify-center text-3xl font-bold group-hover:scale-110 transition-transform">
                                {{ substr($member->name, 0, 1) }}{{ substr(explode(' ', $member->name)[1] ?? '', 0, 1) }}
                            </div>
                        @endif

                        <h3 class="text-2xl font-display font-bold mb-2">{{ $member->name }}</h3>
                        <p class="text-avec-cyan text-base font-semibold mb-4">{{ $member->role }}</p>

                        @if ($member->bio)
                            <p class="text-gray-300 dark:text-gray-300 leading-relaxed text-sm mb-6">
                                {{ $member->bio }}
                            </p>
                        @endif

                        @if ($member->linkedin || $member->twitter || $member->email)
                            <div class="flex justify-center gap-4 pt-4 border-t border-white/10">
                                @if ($member->linkedin)
                                    <a href="{{ $member->linkedin }}" target="_blank"
                                        class="text-gray-400 hover:text-avec-cyan transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                        </svg>
                                    </a>
                                @endif

                                @if ($member->twitter)
                                    <a href="{{ $member->twitter }}" target="_blank"
                                        class="text-gray-400 hover:text-avec-cyan transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                        </svg>
                                    </a>
                                @endif

                                @if ($member->email)
                                    <a href="mailto:{{ $member->email }}"
                                        class="text-gray-400 hover:text-avec-cyan transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Team Values -->
    <section class="relative py-20 bg-avec-dark/50 dark:bg-avec-dark/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <span class="text-avec-purple font-semibold text-sm uppercase tracking-wider">Our Values</span>
                <h2 class="text-4xl md:text-6xl font-display font-bold mt-4 mb-6 dark:text-white text-avec-dark">
                    The Type of Team We Are
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="glass rounded-2xl p-8 fade-in-section">
                    <div class="w-14 h-14 bg-avec-cyan/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-avec-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-display font-bold mb-2">Excellence over mediocrity</h3>
                    <p class="text-gray-400 text-sm">We hold ourselves to the highest standards in everything we build</p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section" style="animation-delay: 0.1s;">
                    <div class="w-14 h-14 bg-avec-purple/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-avec-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-display font-bold mb-2">Security-first thinking</h3>
                    <p class="text-gray-400 text-sm">Security is embedded in every decision and every line of code</p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section" style="animation-delay: 0.2s;">
                    <div class="w-14 h-14 bg-avec-cyan/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-avec-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-display font-bold mb-2">Long-term architecture mindset</h3>
                    <p class="text-gray-400 text-sm">We build for the future, not just for today</p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section" style="animation-delay: 0.3s;">
                    <div class="w-14 h-14 bg-avec-purple/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-avec-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-display font-bold mb-2">Documentation culture</h3>
                    <p class="text-gray-400 text-sm">Every system is thoroughly documented for sustainability</p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section" style="animation-delay: 0.4s;">
                    <div class="w-14 h-14 bg-avec-cyan/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-avec-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-display font-bold mb-2">Ownership, not excuses</h3>
                    <p class="text-gray-400 text-sm">We take full responsibility for outcomes and solutions</p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section" style="animation-delay: 0.5s;">
                    <div class="w-14 h-14 bg-avec-purple/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-avec-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-display font-bold mb-2">Speed + Precision</h3>
                    <p class="text-gray-400 text-sm">Fast execution without compromising on quality</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="relative py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 dark:text-white text-avec-dark">
                Want to Join Our Team?
            </h2>
            <p class="text-xl text-gray-300 dark:text-gray-300 mb-8">
                We're always looking for exceptional talent who share our values.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-block px-10 py-5 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full font-semibold text-lg hover:shadow-2xl hover:shadow-avec-cyan/50 transition-all transform hover:scale-105">
                Get In Touch
            </a>
        </div>
    </section>
@endsection
