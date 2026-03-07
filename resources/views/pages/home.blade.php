@extends('layouts.app')

@section('title', 'AVEC Technologies - Building Digital Systems for Africa')
@section('meta_description', 'Digital Infrastructure & AI Intelligence Partner for Africa. We build the systems that
    power African economies.')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center pt-20">
        <div class="max-w-7xl mx-auto px-6 py-20 w-full">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-8 fade-in-up">
                    <div class="inline-block">
                        <span class="px-4 py-2 glass rounded-full text-sm font-medium text-avec-cyan">
                            Building Africa's Digital Future
                        </span>
                    </div>

                    <h1 class="text-5xl md:text-7xl font-display font-bold leading-tight dark:text-white text-avec-dark">
                        Digital Infrastructure &
                        <span class="bg-gradient-to-r from-avec-cyan to-avec-purple bg-clip-text text-transparent">
                            AI Intelligence
                        </span>
                        Partner for Africa
                    </h1>

                    <p class="text-xl text-gray-300 dark:text-gray-300 leading-relaxed">
                        We build the systems that power African economies. AVEC Technologies designs and deploys secure
                        digital infrastructure and AI-powered systems.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}"
                            class="px-8 py-4 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full font-semibold hover:shadow-2xl hover:shadow-avec-cyan/50 transition-all transform hover:scale-105">
                            Engage AVEC
                        </a>
                        <a href="{{ route('services') }}" class="px-8 py-4 glass glass-hover rounded-full font-semibold">
                            Our Services
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-avec-cyan">100%</div>
                            <div class="text-sm text-gray-400">Bespoke</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-avec-purple">AI</div>
                            <div class="text-sm text-gray-400">Enabled</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-avec-cyan">Africa</div>
                            <div class="text-sm text-gray-400">First</div>
                        </div>
                    </div>
                </div>

                <!-- Visual Element -->
                <div class="relative fade-in-up" style="animation-delay: 0.3s;">
                    <div class="glass glass-hover rounded-3xl p-8 transform hover:scale-105 transition-all duration-500">
                        <div class="aspect-square relative">
                            <svg viewBox="0 0 200 200" class="w-full h-full animate-spin-slow">
                                <defs>
                                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%"
                                        y2="100%">
                                        <stop offset="0%" style="stop-color:#00D9FF;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#9B8FF5;stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                                <polygon points="100,10 40,198 190,78 10,78 160,198" fill="none" stroke="url(#grad1)"
                                    stroke-width="2" opacity="0.5" />
                                <polygon points="100,30 60,170 170,90 30,90 140,170" fill="none" stroke="url(#grad1)"
                                    stroke-width="2" opacity="0.7" />
                                <circle cx="100" cy="100" r="50" fill="none" stroke="url(#grad1)"
                                    stroke-width="2" opacity="0.9" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why We Exist Section -->
    <section class="relative py-20 bg-avec-dark/50 dark:bg-avec-dark/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <span class="text-avec-cyan font-semibold text-sm uppercase tracking-wider">Why We Exist</span>
                <h2 class="text-4xl md:text-6xl font-display font-bold mt-4 mb-6 dark:text-white text-avec-dark">
                    The Digital Challenge in Africa
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="glass rounded-2xl p-8 border-l-4 border-avec-cyan fade-in-section">
                    <h3 class="text-2xl font-display font-bold mb-4 text-avec-cyan">Fragmented Systems</h3>
                    <p class="text-gray-300 dark:text-gray-300 leading-relaxed">
                        African institutions rely on fragmented or outdated digital systems.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 border-l-4 border-avec-purple fade-in-section"
                    style="animation-delay: 0.1s;">
                    <h3 class="text-2xl font-display font-bold mb-4 text-avec-purple">Underutilized Data</h3>
                    <p class="text-gray-300 dark:text-gray-300 leading-relaxed">
                        Data is underutilized or siloed, preventing intelligent decision-making.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 border-l-4 border-avec-cyan fade-in-section"
                    style="animation-delay: 0.2s;">
                    <h3 class="text-2xl font-display font-bold mb-4 text-avec-cyan">Limited Innovation</h3>
                    <p class="text-gray-300 dark:text-gray-300 leading-relaxed">
                        Few players control infrastructure—limiting innovation and growth.
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 border-l-4 border-avec-purple fade-in-section"
                    style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-display font-bold mb-4 text-avec-purple">Need for Scale</h3>
                    <p class="text-gray-300 dark:text-gray-300 leading-relaxed">
                        Institutions need reliable, intelligent systems to operate at scale.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Three Pillars Section -->
    <section class="relative py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <span class="text-avec-cyan font-semibold text-sm uppercase tracking-wider">What We Do</span>
                <h2 class="text-4xl md:text-6xl font-display font-bold mt-4 mb-6 dark:text-white text-avec-dark">
                    Three Core Pillars
                </h2>
                <p class="text-xl text-gray-300 dark:text-gray-300 max-w-3xl mx-auto">
                    Comprehensive solutions across digital infrastructure, bespoke systems, and AI intelligence
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Pillar 1 -->
                <div class="glass glass-hover rounded-2xl p-8 group cursor-pointer fade-in-section">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Digital Infrastructure</h3>
                    <ul class="space-y-2 text-gray-300 dark:text-gray-300">
                        <li>• Core institutional platforms</li>
                        <li>• Payment systems</li>
                        <li>• Government digitization</li>
                        <li>• Enterprise architecture</li>
                        <li>• Secure hosting environments</li>
                    </ul>
                </div>

                <!-- Pillar 2 -->
                <div class="glass glass-hover rounded-2xl p-8 group cursor-pointer fade-in-section"
                    style="animation-delay: 0.1s;">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-avec-purple to-avec-cyan rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Bespoke Institutional Systems</h3>
                    <ul class="space-y-2 text-gray-300 dark:text-gray-300">
                        <li>• ERP systems</li>
                        <li>• Document management</li>
                        <li>• Records digitization</li>
                        <li>• Workflow automation</li>
                        <li>• RFID tracking systems</li>
                    </ul>
                </div>

                <!-- Pillar 3 -->
                <div class="glass glass-hover rounded-2xl p-8 group cursor-pointer fade-in-section"
                    style="animation-delay: 0.2s;">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">AI & Data Intelligence</h3>
                    <ul class="space-y-2 text-gray-300 dark:text-gray-300">
                        <li>• Analytics dashboards</li>
                        <li>• Intelligence systems</li>
                        <li>• Predictive modeling</li>
                        <li>• AI-driven decision engines</li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services') }}"
                    class="inline-flex items-center px-8 py-4 glass glass-hover rounded-full font-semibold">
                    Explore All Services
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-20 bg-gradient-to-r from-avec-cyan to-avec-purple">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-avec-dark">
                Ready to Transform Your Digital Infrastructure?
            </h2>
            <p class="text-xl text-avec-dark/80 mb-8">
                Let's build the systems that will power your institution's future.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-block px-10 py-5 bg-avec-dark text-white rounded-full font-semibold text-lg hover:bg-avec-dark/90 transition-all transform hover:scale-105">
                Get Started Today
            </a>
        </div>
    </section>
@endsection
