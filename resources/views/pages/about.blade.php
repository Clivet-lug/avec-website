@extends('layouts.app')

@section('title', 'About Us - AVEC Technologies')
@section('meta_description',
    'Learn about AVEC Technologies, a Zambian woman-led technology company building digital
    infrastructure for Africa.')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6 w-full">
            <div class="text-center fade-in-up">
                <span class="px-4 py-2 glass rounded-full text-sm font-medium text-avec-cyan inline-block mb-6">
                    About AVEC
                </span>
                <h1 class="text-5xl md:text-7xl font-display font-bold leading-tight dark:text-white text-avec-dark mb-6">
                    Zambian. Woman-led. <br>
                    <span class="bg-gradient-to-r from-avec-cyan to-avec-purple bg-clip-text text-transparent">
                        Technology-driven.
                    </span>
                </h1>
                <p class="text-xl text-gray-300 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    We are infrastructure builders and long-term architects shaping Africa's digital future.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="relative py-20 bg-avec-dark/50 dark:bg-avec-dark/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Mission -->
                <div class="glass rounded-3xl p-12 border-l-4 border-avec-cyan fade-in-section">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-display font-bold mb-6 text-avec-cyan">Our Mission</h2>
                    <p class="text-xl text-gray-300 dark:text-gray-300 leading-relaxed">
                        To design and deploy secure digital infrastructure and AI-powered systems that enable African
                        institutions to operate intelligently and at scale.
                    </p>
                </div>

                <!-- Vision -->
                <div class="glass rounded-3xl p-12 border-l-4 border-avec-purple fade-in-section"
                    style="animation-delay: 0.2s;">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-avec-purple to-avec-cyan rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-display font-bold mb-6 text-avec-purple">Our Vision</h2>
                    <p class="text-xl text-gray-300 dark:text-gray-300 leading-relaxed">
                        To become Africa's leading digital infrastructure and AI intelligence company, shaping institutions,
                        influencing policy, and driving economic transformation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Are -->
    <section class="relative py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6 fade-in-section">
                    <span class="text-avec-cyan font-semibold text-sm uppercase tracking-wider">Who We Are</span>
                    <h2 class="text-4xl md:text-6xl font-display font-bold dark:text-white text-avec-dark">
                        Building the backbone of African systems
                    </h2>
                    <div class="space-y-4 text-lg text-gray-300 dark:text-gray-300 leading-relaxed">
                        <p>
                            AVEC Technologies is a Zambian, woman-led technology company specialising in bespoke systems
                            development, financial infrastructure, and data-driven digital solutions.
                        </p>
                        <p>
                            We support governments, financial institutions, development partners, and enterprises to
                            digitise operations, build custom systems, and use data intelligently to improve outcomes.
                        </p>
                        <p class="text-avec-cyan font-semibold italic">
                            "We are not building software. We are building the backbone of African systems."
                        </p>
                    </div>
                </div>

                <div class="space-y-6 fade-in-section" style="animation-delay: 0.2s;">
                    <div class="glass rounded-2xl p-8">
                        <h3 class="text-2xl font-display font-bold mb-4 text-avec-cyan">Who We Are NOT</h3>
                        <ul class="space-y-3 text-gray-300 dark:text-gray-300">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-red-400 mr-3 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span>Not a freelance development shop</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-red-400 mr-3 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span>Not "just software developers"</span>
                            </li>
                        </ul>
                    </div>

                    <div class="glass rounded-2xl p-8 bg-gradient-to-br from-avec-cyan/10 to-avec-purple/10">
                        <h3 class="text-2xl font-display font-bold mb-4 text-avec-purple">Who We ARE</h3>
                        <p class="text-xl font-semibold text-gray-200">
                            We are infrastructure builders and long-term architects
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Bigger Strategy -->
    <section class="relative py-20 bg-avec-dark/50 dark:bg-avec-dark/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <span class="text-avec-purple font-semibold text-sm uppercase tracking-wider">Strategic Focus</span>
                <h2 class="text-4xl md:text-6xl font-display font-bold mt-4 mb-6 dark:text-white text-avec-dark">
                    The Bigger Strategy
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="glass rounded-2xl p-8 fade-in-section">
                    <div class="text-4xl font-bold text-avec-cyan mb-4">01</div>
                    <h3 class="text-xl font-display font-bold mb-3">Build and control core digital infrastructure</h3>
                    <p class="text-gray-300 dark:text-gray-300">
                        Establish foundational systems that institutions depend on.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section" style="animation-delay: 0.1s;">
                    <div class="text-4xl font-bold text-avec-purple mb-4">02</div>
                    <h3 class="text-xl font-display font-bold mb-3">Influence policy decisions</h3>
                    <p class="text-gray-300 dark:text-gray-300">
                        Shape the digital transformation landscape across Africa.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section" style="animation-delay: 0.2s;">
                    <div class="text-4xl font-bold text-avec-cyan mb-4">03</div>
                    <h3 class="text-xl font-display font-bold mb-3">Deliver critical institutional systems</h3>
                    <p class="text-gray-300 dark:text-gray-300">
                        Build mission-critical infrastructure for governments and enterprises.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section" style="animation-delay: 0.3s;">
                    <div class="text-4xl font-bold text-avec-purple mb-4">04</div>
                    <h3 class="text-xl font-display font-bold mb-3">Expand cross-border</h3>
                    <p class="text-gray-300 dark:text-gray-300">
                        Scale solutions across African markets and beyond.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section" style="animation-delay: 0.4s;">
                    <div class="text-4xl font-bold text-avec-cyan mb-4">05</div>
                    <h3 class="text-xl font-display font-bold mb-3">Become indispensable to institutions</h3>
                    <p class="text-gray-300 dark:text-gray-300">
                        Build deep, long-term partnerships that drive transformation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="relative py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <span class="text-avec-cyan font-semibold text-sm uppercase tracking-wider">Our Team</span>
                <h2 class="text-4xl md:text-6xl font-display font-bold mt-4 dark:text-white text-avec-dark">Visionary
                    Leadership</h2>
                <p class="text-xl text-gray-300 dark:text-gray-300 mt-4 max-w-3xl mx-auto">
                    Excellence over mediocrity. Security-first thinking. Long-term architecture mindset.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($team as $member)
                    <div class="glass rounded-3xl p-8 text-center fade-in-section hover:scale-105 transition-all duration-300"
                        style="animation-delay: {{ $loop->index * 0.1 }}s;">
                        @if ($member->photo && file_exists(public_path('images/' . $member->photo)))
                            <img src="{{ asset('images/' . $member->photo) }}" alt="{{ $member->name }}"
                                class="w-32 h-32 mx-auto mb-6 rounded-full object-cover ring-4 ring-avec-cyan/50">
                        @else
                            <div
                                class="w-32 h-32 mx-auto mb-6 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-full flex items-center justify-center text-3xl font-bold">
                                {{ substr($member->name, 0, 1) }}{{ substr(explode(' ', $member->name)[1] ?? '', 0, 1) }}
                            </div>
                        @endif

                        <h3 class="text-2xl font-display font-bold mb-2">{{ $member->name }}</h3>
                        <p class="text-avec-cyan text-base font-semibold mb-4">{{ $member->role }}</p>

                        @if ($member->bio)
                            <p class="text-gray-300 dark:text-gray-300 leading-relaxed text-sm">
                                {{ $member->bio }}
                            </p>
                        @endif

                        @if ($member->linkedin || $member->twitter || $member->email)
                            <div class="flex justify-center gap-4 mt-6">
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

    <!-- CTA -->
    <section class="relative py-20 bg-gradient-to-r from-avec-cyan to-avec-purple">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-avec-dark">
                Join Us in Building Africa's Digital Future
            </h2>
            <p class="text-xl text-avec-dark/80 mb-8">
                We're always looking for exceptional talent to join our team.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-block px-10 py-5 bg-avec-dark text-white rounded-full font-semibold text-lg hover:bg-avec-dark/90 transition-all transform hover:scale-105">
                Get In Touch
            </a>
        </div>
    </section>
@endsection
