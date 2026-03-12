@extends('layouts.app')

@section('title', 'About Us - AVEC Technologies')
@section('meta_description', 'Learn about AVEC Technologies, a Zambian technology company building digital
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
                    Building Africa's
                    <span class="bg-gradient-to-r from-avec-cyan to-avec-purple bg-clip-text text-transparent">
                        Digital Future
                    </span>
                </h1>
                <p class="text-xl text-gray-300 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    We are infrastructure builders and long-term architects, creating the systems that will power African
                    economies for generations.
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
                            AVEC Technologies is a Zambian technology company specializing in bespoke systems development,
                            financial infrastructure, and data-driven digital solutions.
                        </p>
                        <p>
                            We support governments, financial institutions, development partners, and enterprises to
                            digitize operations, build custom systems, and use data intelligently to improve outcomes.
                        </p>
                        <p class="text-avec-cyan font-semibold italic text-xl pt-4">
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

    <!-- Core Values -->
    <section class="relative py-20 bg-avec-dark/50 dark:bg-avec-dark/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <span class="text-avec-purple font-semibold text-sm uppercase tracking-wider">Our Values</span>
                <h2 class="text-4xl md:text-6xl font-display font-bold mt-4 mb-6 dark:text-white text-avec-dark">
                    How We Operate
                </h2>
                <p class="text-xl text-gray-300 dark:text-gray-300 max-w-3xl mx-auto">
                    The principles that guide every decision we make
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="glass rounded-2xl p-8 fade-in-section hover:scale-105 transition-all">
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

                <div class="glass rounded-2xl p-8 fade-in-section hover:scale-105 transition-all"
                    style="animation-delay: 0.1s;">
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

                <div class="glass rounded-2xl p-8 fade-in-section hover:scale-105 transition-all"
                    style="animation-delay: 0.2s;">
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

                <div class="glass rounded-2xl p-8 fade-in-section hover:scale-105 transition-all"
                    style="animation-delay: 0.3s;">
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

                <div class="glass rounded-2xl p-8 fade-in-section hover:scale-105 transition-all"
                    style="animation-delay: 0.4s;">
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

                <div class="glass rounded-2xl p-8 fade-in-section hover:scale-105 transition-all"
                    style="animation-delay: 0.5s;">
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

    <!-- The Bigger Strategy -->
    <section class="relative py-20">
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

    <!-- 2026 Strategic Focus -->
    <section class="relative py-20 bg-avec-dark/50 dark:bg-avec-dark/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <span class="text-avec-cyan font-semibold text-sm uppercase tracking-wider">This Year</span>
                <h2 class="text-4xl md:text-6xl font-display font-bold mt-4 mb-6 dark:text-white text-avec-dark">
                    2026 Strategic Focus
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="text-center fade-in-section">
                    <div
                        class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-2xl flex items-center justify-center text-3xl font-bold">
                        01
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Win 3 anchor institutional clients</h3>
                </div>

                <div class="text-center fade-in-section" style="animation-delay: 0.1s;">
                    <div
                        class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-avec-purple to-avec-cyan rounded-2xl flex items-center justify-center text-3xl font-bold">
                        02
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Deliver flawless execution for flagship projects</h3>
                </div>

                <div class="text-center fade-in-section" style="animation-delay: 0.2s;">
                    <div
                        class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-2xl flex items-center justify-center text-3xl font-bold">
                        03
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Build strong, elite developer team</h3>
                </div>

                <div class="text-center fade-in-section" style="animation-delay: 0.3s;">
                    <div
                        class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-avec-purple to-avec-cyan rounded-2xl flex items-center justify-center text-3xl font-bold">
                        04
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Strengthen security and hosting</h3>
                </div>

                <div class="text-center fade-in-section" style="animation-delay: 0.4s;">
                    <div
                        class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-2xl flex items-center justify-center text-3xl font-bold">
                        05
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Establish strategic partnerships</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="relative py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 dark:text-white text-avec-dark">
                Ready to Build the Future?
            </h2>
            <p class="text-xl text-gray-300 dark:text-gray-300 mb-8">
                Partner with us to transform your digital infrastructure and unlock new possibilities.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact') }}"
                    class="px-10 py-5 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full font-semibold text-lg hover:shadow-2xl hover:shadow-avec-cyan/50 transition-all transform hover:scale-105">
                    Get In Touch
                </a>
                <a href="{{ route('services') }}" class="px-10 py-5 glass glass-hover rounded-full font-semibold text-lg">
                    Our Services
                </a>
            </div>
        </div>
    </section>
@endsection
