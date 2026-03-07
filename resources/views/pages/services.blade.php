@extends('layouts.app')

@section('title', 'Our Services - AVEC Technologies')
@section('meta_description', 'Comprehensive digital infrastructure, bespoke systems, and AI intelligence services for
    African institutions.')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6 w-full">
            <div class="text-center fade-in-up">
                <span class="px-4 py-2 glass rounded-full text-sm font-medium text-avec-cyan inline-block mb-6">
                    Our Services
                </span>
                <h1 class="text-5xl md:text-7xl font-display font-bold leading-tight dark:text-white text-avec-dark mb-6">
                    Comprehensive
                    <span class="bg-gradient-to-r from-avec-cyan to-avec-purple bg-clip-text text-transparent">
                        Technology Solutions
                    </span>
                </h1>
                <p class="text-xl text-gray-300 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    End-to-end digital transformation across three core pillars
                </p>
            </div>
        </div>
    </section>

    <!-- Three Pillars - Detailed -->
    <section class="relative py-20">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Pillar 1: Digital Infrastructure -->
            <div class="mb-20 fade-in-section">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="inline-block px-4 py-2 glass rounded-full text-sm font-medium text-avec-cyan mb-6">
                            Pillar 01
                        </div>
                        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 dark:text-white text-avec-dark">
                            Digital Infrastructure
                        </h2>
                        <p class="text-xl text-gray-300 dark:text-gray-300 leading-relaxed mb-8">
                            We build the foundational systems that institutions rely on to operate securely and at scale.
                        </p>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full font-semibold hover:shadow-lg transition-all">
                            Get Started
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="glass rounded-3xl p-8">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-cyan/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-cyan" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">Core Institutional Platforms</h4>
                                    <p class="text-gray-400 text-sm">Enterprise-grade systems designed for mission-critical
                                        operations</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-cyan/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-cyan" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">Payment Systems</h4>
                                    <p class="text-gray-400 text-sm">Secure, scalable financial transaction infrastructure
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-cyan/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-cyan" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">Government Digitization</h4>
                                    <p class="text-gray-400 text-sm">End-to-end digital transformation for public sector
                                        institutions</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-cyan/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-cyan" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">Enterprise Architecture</h4>
                                    <p class="text-gray-400 text-sm">Strategic technology frameworks for large organizations
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-cyan/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-cyan" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">Secure Hosting Environments</h4>
                                    <p class="text-gray-400 text-sm">Robust, compliant infrastructure hosting solutions</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Pillar 2: Bespoke Institutional Systems -->
            <div class="mb-20 fade-in-section">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1 glass rounded-3xl p-8">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-purple/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-purple" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">ERP Systems</h4>
                                    <p class="text-gray-400 text-sm">Custom enterprise resource planning tailored to your
                                        workflows</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-purple/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-purple" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">Document Management Systems</h4>
                                    <p class="text-gray-400 text-sm">Intelligent document workflow and storage solutions
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-purple/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-purple" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">Records Digitization</h4>
                                    <p class="text-gray-400 text-sm">Transform paper-based processes into digital workflows
                                    </p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-purple/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-purple" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">Workflow Automation</h4>
                                    <p class="text-gray-400 text-sm">Streamline operations with intelligent process
                                        automation</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-purple/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-purple" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">RFID Tracking Systems</h4>
                                    <p class="text-gray-400 text-sm">Real-time asset and inventory management solutions</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="inline-block px-4 py-2 glass rounded-full text-sm font-medium text-avec-purple mb-6">
                            Pillar 02
                        </div>
                        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 dark:text-white text-avec-dark">
                            Bespoke Institutional Systems
                        </h2>
                        <p class="text-xl text-gray-300 dark:text-gray-300 leading-relaxed mb-8">
                            Custom-built platforms designed specifically for your institutional workflows, regulatory
                            requirements, and scalability needs.
                        </p>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-avec-purple to-avec-cyan rounded-full font-semibold hover:shadow-lg transition-all">
                            Request Consultation
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pillar 3: AI & Data Intelligence -->
            <div class="mb-20 fade-in-section">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="inline-block px-4 py-2 glass rounded-full text-sm font-medium text-avec-cyan mb-6">
                            Pillar 03
                        </div>
                        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 dark:text-white text-avec-dark">
                            AI & Data Intelligence
                        </h2>
                        <p class="text-xl text-gray-300 dark:text-gray-300 leading-relaxed mb-8">
                            Transform data into actionable intelligence with advanced analytics and AI-powered decision
                            systems.
                        </p>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full font-semibold hover:shadow-lg transition-all">
                            Explore AI Solutions
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="glass rounded-3xl p-8">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-cyan/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-cyan" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">Analytics Dashboards</h4>
                                    <p class="text-gray-400 text-sm">Real-time visualization and insights for data-driven
                                        decisions</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-cyan/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-cyan" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">Institutional Intelligence Systems</h4>
                                    <p class="text-gray-400 text-sm">AI-powered systems that learn and adapt to your
                                        operations</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-cyan/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-cyan" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">Predictive Modeling</h4>
                                    <p class="text-gray-400 text-sm">Forecast trends and outcomes with advanced machine
                                        learning</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div
                                    class="w-8 h-8 bg-avec-cyan/20 rounded-lg flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                    <svg class="w-5 h-5 text-avec-cyan" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-lg mb-1">AI-Driven Decision Engines</h4>
                                    <p class="text-gray-400 text-sm">Automated decision-making systems for complex
                                        scenarios</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="relative py-20 bg-avec-dark/50 dark:bg-avec-dark/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <span class="text-avec-purple font-semibold text-sm uppercase tracking-wider">Our Approach</span>
                <h2 class="text-4xl md:text-6xl font-display font-bold mt-4 mb-6 dark:text-white text-avec-dark">
                    How We Work
                </h2>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center fade-in-section">
                    <div
                        class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-2xl flex items-center justify-center text-2xl font-bold">
                        01
                    </div>
                    <h3 class="text-xl font-display font-bold mb-3">Discovery</h3>
                    <p class="text-gray-400 text-sm">
                        Deep dive into your institutional needs and challenges
                    </p>
                </div>

                <div class="text-center fade-in-section" style="animation-delay: 0.1s;">
                    <div
                        class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-avec-purple to-avec-cyan rounded-2xl flex items-center justify-center text-2xl font-bold">
                        02
                    </div>
                    <h3 class="text-xl font-display font-bold mb-3">Architecture</h3>
                    <p class="text-gray-400 text-sm">
                        Design scalable, secure, and future-proof solutions
                    </p>
                </div>

                <div class="text-center fade-in-section" style="animation-delay: 0.2s;">
                    <div
                        class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-2xl flex items-center justify-center text-2xl font-bold">
                        03
                    </div>
                    <h3 class="text-xl font-display font-bold mb-3">Execution</h3>
                    <p class="text-gray-400 text-sm">
                        Build and deploy with precision and speed
                    </p>
                </div>

                <div class="text-center fade-in-section" style="animation-delay: 0.3s;">
                    <div
                        class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-avec-purple to-avec-cyan rounded-2xl flex items-center justify-center text-2xl font-bold">
                        04
                    </div>
                    <h3 class="text-xl font-display font-bold mb-3">Support</h3>
                    <p class="text-gray-400 text-sm">
                        Long-term partnership and system governance
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 dark:text-white text-avec-dark">
                Ready to Transform Your Institution?
            </h2>
            <p class="text-xl text-gray-300 dark:text-gray-300 mb-8">
                Let's discuss how our services can drive your digital transformation.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact') }}"
                    class="px-10 py-5 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full font-semibold text-lg hover:shadow-2xl hover:shadow-avec-cyan/50 transition-all transform hover:scale-105">
                    Schedule Consultation
                </a>
                <a href="{{ route('about') }}" class="px-10 py-5 glass glass-hover rounded-full font-semibold text-lg">
                    Learn About Us
                </a>
            </div>
        </div>
    </section>
@endsection
