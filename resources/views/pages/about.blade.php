@extends('layouts.app')

@section('title', 'About Us - AVEC Technologies')
@section('meta_description',
    'Learn about AVEC Technologies, a digital infrastructure and AI company building the
    systems that power modern African institutions.')

@section('content')

    <style>
        /* Light mode section backgrounds — About page */
        html:not(.dark) #about-hero-section {
            background: linear-gradient(160deg, #e8f4ff 0%, #eef0ff 55%, #f3f0ff 100%);
        }

        html:not(.dark) #about-who-section {
            background: rgba(255, 255, 255, 0.38);
        }

        html:not(.dark) #about-what-section {
            background: linear-gradient(180deg, #eef2f7 0%, #f3f0ff 100%);
        }

        html:not(.dark) #about-mv-section {
            background: rgba(255, 255, 255, 0.35);
        }

        html:not(.dark) #about-approach-section {
            background: linear-gradient(160deg, #f0f7ff 0%, #f3f0ff 100%);
        }

        html:not(.dark) #about-leadership-section {
            background: rgba(255, 255, 255, 0.38);
        }

        html:not(.dark) #about-cta-section {
            background: linear-gradient(180deg, #eef2f7 0%, #f0eeff 100%);
        }

        /* Card body text in light mode */
        html:not(.dark) .text-gray-400 {
            color: #4a5270 !important;
        }

        /* Icon container backgrounds — readable tint on light */
        html:not(.dark) .bg-avec-cyan\/20 {
            background-color: rgba(0, 153, 170, 0.12) !important;
        }

        html:not(.dark) .bg-avec-purple\/20 {
            background-color: rgba(108, 95, 212, 0.12) !important;
        }
    </style>

    <!-- Hero Section -->
    <section id="about-hero-section"
        class="relative min-h-[60vh] flex items-center pt-32 pb-20 bg-avec-dark/30 dark:bg-avec-dark/30">
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
                    AVEC Technologies is a digital infrastructure and artificial intelligence company building the systems
                    that power modern African institutions.
                </p>
            </div>
        </div>
    </section>

    <!-- About AVEC Technologies (WITH IMAGE) -->
    <section id="about-who-section" class="relative py-20 bg-avec-dark/50 dark:bg-avec-dark/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Image (NO CARD) -->
                <div class="fade-in-section lg:order-first" style="animation-delay: 0.2s;">
                    <img src="{{ asset('images/hero-background.jpg') }}" alt="AVEC Technologies digital infrastructure"
                        class="w-full h-[400px] lg:h-[450px] object-cover rounded-3xl">
                </div>

                <!-- Text Content -->
                <div class="prose prose-lg max-w-none fade-in-section">
                    <p class="text-xl text-gray-300 dark:text-gray-300 leading-relaxed mb-6">
                        We design and develop intelligent digital platforms that help governments, universities, financial
                        institutions, and enterprises modernize operations, manage data securely, and scale efficiently in a
                        rapidly digitizing world.
                    </p>

                    <p class="text-lg text-gray-300 dark:text-gray-300 leading-relaxed">
                        Across Africa, many organizations still operate on fragmented systems, manual processes, and
                        underutilized data. AVEC Technologies exists to bridge that gap by delivering reliable, scalable,
                        and future-ready technology infrastructure that enables institutions to operate with greater speed,
                        transparency, and intelligence.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do -->
    <section id="about-what-section" class="relative py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <h2 class="text-4xl md:text-6xl font-display font-bold mb-6 dark:text-white text-avec-dark">
                    What We Do
                </h2>
                <p class="text-xl text-gray-300 dark:text-gray-300 max-w-3xl mx-auto">
                    We build digital systems that support critical institutional operations
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="glass rounded-2xl p-8 fade-in-section hover:scale-105 transition-all">
                    <div class="w-14 h-14 bg-avec-cyan/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-avec-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 dark:text-white text-avec-dark">Enterprise &
                        Institutional Software Systems</h3>
                    <p class="text-gray-400">Custom platforms designed for complex institutional operations</p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section hover:scale-105 transition-all"
                    style="animation-delay: 0.1s;">
                    <div class="w-14 h-14 bg-avec-purple/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-avec-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 dark:text-white text-avec-dark">Digital Records &
                        Document Management</h3>
                    <p class="text-gray-400">Secure digitization and intelligent management of institutional records</p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section hover:scale-105 transition-all"
                    style="animation-delay: 0.2s;">
                    <div class="w-14 h-14 bg-avec-cyan/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-avec-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 dark:text-white text-avec-dark">RFID Asset Tracking
                        Systems</h3>
                    <p class="text-gray-400">Real-time tracking and management of institutional assets</p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section hover:scale-105 transition-all"
                    style="animation-delay: 0.3s;">
                    <div class="w-14 h-14 bg-avec-purple/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-avec-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 dark:text-white text-avec-dark">Financial & Payment
                        Infrastructure</h3>
                    <p class="text-gray-400">Payment rails, savings platforms, and fintech integrations</p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section hover:scale-105 transition-all"
                    style="animation-delay: 0.4s;">
                    <div class="w-14 h-14 bg-avec-cyan/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-avec-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 dark:text-white text-avec-dark">Data & AI-Powered
                        Intelligence</h3>
                    <p class="text-gray-400">Decision intelligence systems that unlock the full value of institutional data
                    </p>
                </div>

                <div class="glass rounded-2xl p-8 fade-in-section hover:scale-105 transition-all"
                    style="animation-delay: 0.5s;">
                    <div class="w-14 h-14 bg-avec-purple/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-avec-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 dark:text-white text-avec-dark">Workflow Automation &
                        ERP Systems</h3>
                    <p class="text-gray-400">Streamline operations and improve organizational efficiency</p>
                </div>
            </div>

            <div class="text-center mt-12 fade-in-section">
                <p class="text-lg text-gray-300 dark:text-gray-300 max-w-3xl mx-auto">
                    Our solutions are designed to help organizations streamline operations, improve accountability, and
                    unlock the full value of their data.
                </p>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section id="about-mv-section" class="relative py-20 bg-avec-dark/50 dark:bg-avec-dark/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Mission -->
                <div class="glass rounded-3xl p-12 border-l-4 border-avec-cyan fade-in-section">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-avec-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        <svg class="w-8 h-8 text-avec-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

    <!-- Our Approach (WITH IMAGE) -->
    <section id="about-approach-section" class="relative py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="fade-in-section">
                    <h2 class="text-4xl md:text-6xl font-display font-bold mb-6 dark:text-white text-avec-dark">
                        Our Approach
                    </h2>

                    <div class="prose prose-lg max-w-none">
                        <p class="text-lg text-gray-300 dark:text-gray-300 leading-relaxed mb-6">
                            At AVEC Technologies, we combine technical expertise with a deep understanding of institutional
                            operations. Our approach focuses on building systems that are secure, scalable, and tailored to
                            the realities of African markets.
                        </p>

                        <p class="text-lg text-gray-300 dark:text-gray-300 leading-relaxed">
                            We believe that strong digital infrastructure is essential for economic growth, innovation, and
                            efficient public service delivery across the continent.
                        </p>
                    </div>
                </div>

                <!-- Image (NO CARD) -->
                <div class="fade-in-section" style="animation-delay: 0.2s;">
                    <img src="{{ asset('images/team-office.jpg') }}" alt="AVEC Technologies team collaboration"
                        class="w-full h-[400px] lg:h-[450px] object-cover rounded-3xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership -->
    <section id="about-leadership-section" class="relative py-20 bg-avec-dark/50 dark:bg-avec-dark/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <h2 class="text-4xl md:text-6xl font-display font-bold mb-6 dark:text-white text-avec-dark">
                    Leadership
                </h2>
                <p class="text-xl text-gray-300 dark:text-gray-300 max-w-3xl mx-auto">
                    AVEC Technologies is led by a team committed to building reliable digital infrastructure for African
                    institutions.
                </p>
            </div>

            <div class="max-w-5xl mx-auto">
                <div class="glass rounded-3xl overflow-hidden fade-in-section">
                    <div class="grid md:grid-cols-5 gap-0">
                        <!-- Violet's Photo -->
                        <div class="md:col-span-2 bg-gradient-to-br from-avec-cyan/10 to-avec-purple/10">
                            <img src="{{ asset('images/violet-kaponda1.jpg') }}"
                                alt="Violet Nswana Kaponda - Founder & CEO, AVEC Technologies"
                                class="w-full h-full object-cover min-h-[400px] md:min-h-full">
                        </div>

                        <!-- Content -->
                        <div class="md:col-span-3 p-8 md:p-12">
                            <h3 class="text-3xl md:text-4xl font-display font-bold mb-2 dark:text-white text-avec-dark">
                                Violet Nswana Kaponda</h3>
                            <p class="text-xl md:text-2xl text-avec-cyan mb-6">Founder & CEO</p>

                            <p class="text-base md:text-lg text-gray-300 dark:text-gray-300 leading-relaxed mb-6">
                                Violet Nswana Kaponda is a technology strategist with experience in fintech systems, digital
                                transformation, and enterprise platforms across the African technology ecosystem.
                            </p>

                            <p class="text-base md:text-lg text-gray-300 dark:text-gray-300 leading-relaxed mb-6">
                                Under her leadership, AVEC Technologies focuses on designing scalable digital systems that
                                help governments, universities, financial institutions, and enterprises modernize
                                operations, strengthen data management, and unlock new opportunities through technology.
                            </p>

                            <p
                                class="text-base md:text-lg text-gray-300 dark:text-gray-300 leading-relaxed font-medium italic border-l-4 border-avec-cyan pl-4">
                                AVEC is driven by the belief that Africa's next era of growth will be powered by strong
                                digital infrastructure built on the continent, for the continent.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="about-cta-section" class="relative py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 dark:text-white text-avec-dark">
                Ready to Transform Your Institution?
            </h2>
            <p class="text-xl text-gray-300 dark:text-gray-300 mb-8">
                Partner with us to build the digital infrastructure your organization needs to thrive.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact') }}"
                    class="px-10 py-5 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full font-semibold text-lg hover:shadow-2xl hover:shadow-avec-cyan/50 transition-all transform hover:scale-105">
                    Get In Touch
                </a>
                <a href="{{ route('services') }}"
                    class="px-10 py-5 glass glass-hover rounded-full font-semibold text-lg dark:text-white text-avec-dark">
                    View Solutions
                </a>
            </div>
        </div>
    </section>
@endsection
