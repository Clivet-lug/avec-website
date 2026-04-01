@extends('layouts.app')

@section('title', 'AVEC Technologies - Building Africa\'s Digital Future')
@section('meta_description',
    'Digital Infrastructure & AI Intelligence Partner for Africa. We build the systems that
    power African economies.')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative flex items-center pt-24 pb-8 min-h-[85vh]">
        <div class="max-w-7xl mx-auto px-6 w-full">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <!-- Text Content -->
                <div class="space-y-5 fade-in-up">
                    <div class="inline-block">
                        <span class="px-4 py-2 glass rounded-full text-sm font-medium text-avec-cyan">
                            Building Africa's Digital Future
                        </span>
                    </div>

                    <h1
                        class="text-4xl md:text-5xl lg:text-5xl xl:text-6xl font-display font-bold leading-[1.1] dark:text-white text-avec-dark">
                        Digital Infrastructure &
                        <span class="bg-gradient-to-r from-avec-cyan to-avec-purple bg-clip-text text-transparent">
                            AI Intelligence
                        </span>
                        Partner for Africa
                    </h1>

                    <p class="text-base lg:text-lg text-gray-300 dark:text-gray-300 leading-relaxed max-w-xl">
                        We build the systems that power African economies. AVEC Technologies designs and deploys secure
                        digital infrastructure and AI-powered systems.
                    </p>

                    <div class="flex flex-wrap gap-4 pt-1">
                        <a href="{{ route('contact') }}"
                            class="px-8 py-3.5 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full font-semibold hover:shadow-2xl hover:shadow-avec-cyan/50 transition-all transform hover:scale-105">
                            Contact AVEC
                        </a>
                        <a href="{{ route('services') }}"
                            class="px-8 py-3.5 glass glass-hover rounded-full font-semibold dark:text-white text-avec-dark">
                            Our Services
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4 pt-3">
                        <div class="text-center">
                            <div class="text-2xl lg:text-3xl font-bold text-avec-cyan">100%</div>
                            <div class="text-xs lg:text-sm text-gray-400">Bespoke</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl lg:text-3xl font-bold text-avec-purple">AI</div>
                            <div class="text-xs lg:text-sm text-gray-400">Enabled</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl lg:text-3xl font-bold text-avec-cyan">Africa</div>
                            <div class="text-xs lg:text-sm text-gray-400">First</div>
                        </div>
                    </div>
                </div>

                <!-- Africa Image with Improved Animated Network -->
                <div class="relative fade-in-up flex items-center justify-center lg:justify-end"
                    style="animation-delay: 0.3s;">
                    <div
                        class="glass glass-hover rounded-3xl p-6 md:p-8 w-full max-w-[450px] lg:max-w-[500px] transform hover:scale-105 transition-all duration-500 overflow-hidden relative">
                        <div class="relative w-full h-[320px] md:h-[380px] lg:h-[420px] flex items-center justify-center">
                            <!-- Africa Image -->
                            <img src="{{ asset('images/africa.png') }}"
                                alt="Africa continent - Expanding AVEC Technologies across the continent"
                                class="w-[85%] h-auto max-h-[95%] object-contain opacity-90 drop-shadow-[0_0_30px_rgba(0,217,255,0.25)] relative z-10"
                                loading="lazy" id="africa-map-image">

                            <!-- SVG Overlay -->
                            <svg class="absolute inset-0 w-full h-full z-20 pointer-events-none" viewBox="0 0 500 600"
                                preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                                <defs>
                                    <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%"
                                        y2="100%">
                                        <stop offset="0%" stop-color="#00D9FF" stop-opacity="0.9" />
                                        <stop offset="100%" stop-color="#9B8FF5" stop-opacity="0.9" />
                                    </linearGradient>
                                    <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
                                        <feGaussianBlur stdDeviation="2" result="blur" />
                                        <feMerge>
                                            <feMergeNode in="blur" />
                                            <feMergeNode in="SourceGraphic" />
                                        </feMerge>
                                    </filter>
                                </defs>

                                <!-- Lines group -->
                                <g id="connection-lines" opacity="0">
                                    <line class="network-line" x1="275" y1="135" x2="305" y2="295"
                                        stroke="url(#lineGradient)" stroke-width="1.8" filter="url(#glow)" opacity="0" />
                                    <line class="network-line" x1="305" y1="295" x2="250" y2="350"
                                        stroke="url(#lineGradient)" stroke-width="1.8" filter="url(#glow)" opacity="0" />
                                    <line class="network-line" x1="250" y1="350" x2="240" y2="470"
                                        stroke="url(#lineGradient)" stroke-width="1.8" filter="url(#glow)" opacity="0" />
                                    <line class="network-line" x1="175" y1="255" x2="158" y2="275"
                                        stroke="url(#lineGradient)" stroke-width="1.8" filter="url(#glow)" opacity="0" />
                                    <line class="network-line" x1="158" y1="275" x2="240" y2="470"
                                        stroke="url(#lineGradient)" stroke-width="1.8" filter="url(#glow)"
                                        opacity="0" />
                                    <line class="network-line" x1="175" y1="255" x2="275"
                                        y2="135" stroke="url(#lineGradient)" stroke-width="1.8"
                                        filter="url(#glow)" opacity="0" />
                                    <line class="network-line" x1="305" y1="295" x2="240"
                                        y2="470" stroke="url(#lineGradient)" stroke-width="1.8"
                                        filter="url(#glow)" opacity="0" />
                                    <line class="network-line" x1="190" y1="110" x2="175"
                                        y2="255" stroke="url(#lineGradient)" stroke-width="1.8"
                                        filter="url(#glow)" opacity="0" />
                                </g>

                                <!-- Nodes group -->
                                <g id="country-nodes" opacity="0">
                                    <circle class="network-node" cx="250" cy="350" r="5" fill="#00D9FF"
                                        filter="url(#glow)" opacity="0" /> <!-- Zambia -->
                                    <circle class="network-node" cx="240" cy="470" r="5" fill="#9B8FF5"
                                        filter="url(#glow)" opacity="0" /> <!-- SA -->
                                    <circle class="network-node" cx="305" cy="295" r="5" fill="#00D9FF"
                                        filter="url(#glow)" opacity="0" /> <!-- Kenya -->
                                    <circle class="network-node" cx="175" cy="255" r="5" fill="#9B8FF5"
                                        filter="url(#glow)" opacity="0" /> <!-- Nigeria -->
                                    <circle class="network-node" cx="275" cy="135" r="5" fill="#00D9FF"
                                        filter="url(#glow)" opacity="0" /> <!-- Egypt -->
                                    <circle class="network-node" cx="158" cy="275" r="5" fill="#9B8FF5"
                                        filter="url(#glow)" opacity="0" /> <!-- Ghana -->
                                    <circle class="network-node" cx="190" cy="110" r="5" fill="#00D9FF"
                                        filter="url(#glow)" opacity="0" /> <!-- Morocco -->
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Improved Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const linesGroup = document.getElementById('connection-lines');
            const nodesGroup = document.getElementById('country-nodes');
            const lines = document.querySelectorAll('.network-line');
            const nodes = document.querySelectorAll('.network-node');

            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                linesGroup.style.opacity = '0.7';
                nodesGroup.style.opacity = '0.7';
                return;
            }

            setTimeout(() => {
                linesGroup.style.opacity = '1';

                lines.forEach((line, i) => {
                    const length = line.getTotalLength ? line.getTotalLength() : 300;
                    line.style.strokeDasharray = length;
                    line.style.strokeDashoffset = length;
                    line.style.opacity = '1';
                    line.style.transition =
                        `stroke-dashoffset 1.8s cubic-bezier(0.4, 0, 0.2, 1) ${i * 180 + 600}ms`;

                    setTimeout(() => {
                        line.style.strokeDashoffset = '0';
                    }, 100);

                    setTimeout(() => {
                        line.style.strokeDasharray = '8 4';
                        line.style.animation = 'flowDash 4s linear infinite';
                    }, 2000 + i * 180);
                });

                setTimeout(() => {
                    nodesGroup.style.opacity = '1';
                    nodes.forEach((node, i) => {
                        node.style.transition = `opacity 0.8s ease ${i * 150 + 1800}ms`;
                        node.style.opacity = '1';
                        setTimeout(() => {
                            node.style.animation =
                                'pulseNode 3s ease-in-out infinite';
                        }, 2200 + i * 150);
                    });
                }, 1200);
            }, 800);
        });
    </script>

    <style>
        @keyframes flowDash {
            to {
                stroke-dashoffset: -24;
            }
        }

        @keyframes pulseNode {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.9;
            }

            50% {
                transform: scale(1.3);
                opacity: 1;
            }
        }

        .network-line,
        .network-node {
            transition: all 0.6s ease;
        }

        @media (max-width: 768px) {
            .network-line {
                stroke-width: 1.4 !important;
            }

            .network-node {
                r: 4 !important;
            }
        }

        /* Light mode: section background alternation */
        html:not(.dark) #home {
            background: linear-gradient(160deg, #e8f4ff 0%, #eef0ff 55%, #f0eeff 100%);
        }

        html:not(.dark) #why-section {
            background: rgba(255, 255, 255, 0.38);
        }

        html:not(.dark) #pillars-section {
            background: linear-gradient(180deg, #eef2f7 0%, #f3f0ff 100%);
        }
    </style>

    <!-- Why We Exist Section -->
    <section id="why-section" class="relative py-20 bg-avec-dark/50 dark:bg-avec-dark/50">
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
    <section id="pillars-section" class="relative py-20">
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
                        <svg class="w-8 h-8 text-avec-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 dark:text-white text-avec-dark">Digital Infrastructure
                    </h3>
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
                        <svg class="w-8 h-8 text-avec-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 dark:text-white text-avec-dark">Bespoke Institutional
                        Systems</h3>
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
                        <svg class="w-8 h-8 text-avec-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4 dark:text-white text-avec-dark">AI & Data Intelligence
                    </h3>
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
                    class="inline-flex items-center px-8 py-4 glass glass-hover rounded-full font-semibold dark:text-white text-avec-dark">
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
