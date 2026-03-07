<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVEC Technologies - Building Digital Systems for Africa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-avec-dark text-white antialiased">

    <!-- Animated Background -->
    <div class="fixed inset-0 gradient-mesh pointer-events-none"></div>

    <!-- Floating orbs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-avec-cyan/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-avec-purple/20 rounded-full blur-3xl animate-pulse"
            style="animation-delay: 1s;"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full top-0 z-50 glass border-b border-white/10" id="navbar">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/Avec-logo-dark.png') }}" alt="AVEC Technologies" class="h-10">
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-sm font-medium hover:text-avec-cyan transition-colors">Home</a>
                    <a href="#services" class="text-sm font-medium hover:text-avec-cyan transition-colors">Services</a>
                    <a href="#about" class="text-sm font-medium hover:text-avec-cyan transition-colors">About</a>
                    <a href="#leadership"
                        class="text-sm font-medium hover:text-avec-cyan transition-colors">Leadership</a>
                    <a href="#contact"
                        class="px-6 py-2 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-avec-cyan/50 transition-all">
                        Engage AVEC
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-white focus:outline-none" id="mobile-menu-btn">
                    <svg class="w-6 h-6" id="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 hidden" id="close-icon" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="pt-4 pb-3 space-y-3">
                    <a href="#home"
                        class="block text-sm font-medium hover:text-avec-cyan transition-colors mobile-link">Home</a>
                    <a href="#services"
                        class="block text-sm font-medium hover:text-avec-cyan transition-colors mobile-link">Services</a>
                    <a href="#about"
                        class="block text-sm font-medium hover:text-avec-cyan transition-colors mobile-link">About</a>
                    <a href="#leadership"
                        class="block text-sm font-medium hover:text-avec-cyan transition-colors mobile-link">Leadership</a>
                    <a href="#contact"
                        class="block px-6 py-2 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full text-sm font-semibold text-center mobile-link">
                        Engage AVEC
                    </a>
                </div>
            </div>
        </div>
    </nav>
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

                    <h1 class="text-5xl md:text-7xl font-display font-bold leading-tight">
                        Building Bespoke
                        <span class="bg-gradient-to-r from-avec-cyan to-avec-purple bg-clip-text text-transparent">
                            Digital Systems
                        </span>
                        for Africa
                    </h1>

                    <p class="text-xl text-gray-300 leading-relaxed">
                        AVEC Technologies is a woman-led technology company that designs, develops, and deploys bespoke
                        digital and financial systems that enable institutions to make data-driven decisions and deliver
                        impact at scale.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="#contact"
                            class="px-8 py-4 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full font-semibold hover:shadow-2xl hover:shadow-avec-cyan/50 transition-all transform hover:scale-105">
                            Engage AVEC
                        </a>
                        <a href="#services" class="px-8 py-4 glass glass-hover rounded-full font-semibold">
                            Strategic Partnerships
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
                    <div
                        class="glass glass-hover rounded-3xl p-8 transform hover:scale-105 transition-all duration-500">
                        <div class="aspect-square relative">
                            <svg viewBox="0 0 200 200" class="w-full h-full animate-spin-slow">
                                <defs>
                                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%"
                                        y2="100%">
                                        <stop offset="0%" style="stop-color:#00D9FF;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#9B8FF5;stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                                <polygon points="100,10 40,198 190,78 10,78 160,198" fill="none"
                                    stroke="url(#grad1)" stroke-width="2" opacity="0.5" />
                                <polygon points="100,30 60,170 170,90 30,90 140,170" fill="none"
                                    stroke="url(#grad1)" stroke-width="2" opacity="0.7" />
                                <circle cx="100" cy="100" r="50" fill="none" stroke="url(#grad1)"
                                    stroke-width="2" opacity="0.9" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section id="services" class="relative py-20">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16 fade-in-section">
                <span class="text-avec-cyan font-semibold text-sm uppercase tracking-wider">What We Do</span>
                <h2 class="text-4xl md:text-6xl font-display font-bold mt-4 mb-6">
                    Comprehensive Technology Solutions
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    We deliver end-to-end digital transformation across five core capabilities
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service Card 1 -->
                <div class="glass glass-hover rounded-2xl p-8 group cursor-pointer fade-in-section">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Bespoke Systems Development</h3>
                    <p class="text-gray-300 leading-relaxed">
                        We design and develop custom digital platforms tailored to institutional workflows, regulatory
                        environments, and scalability needs.
                    </p>
                </div>

                <!-- Service Card 2 -->
                <div class="glass glass-hover rounded-2xl p-8 group cursor-pointer fade-in-section"
                    style="animation-delay: 0.1s;">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-avec-purple to-avec-cyan rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Financial Infrastructure Systems</h3>
                    <p class="text-gray-300 leading-relaxed">
                        We build digital financial infrastructure supporting payments, savings, lending,
                        interoperability, and financial inclusion.
                    </p>
                </div>

                <!-- Service Card 3 -->
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
                    <h3 class="text-2xl font-display font-bold mb-4">Data & AI-Enabled Decision Systems</h3>
                    <p class="text-gray-300 leading-relaxed">
                        We design data architectures and applied AI systems that help institutions analyse information,
                        manage risk, and make informed decisions.
                    </p>
                </div>

                <!-- Service Card 4 -->
                <div class="glass glass-hover rounded-2xl p-8 group cursor-pointer fade-in-section"
                    style="animation-delay: 0.3s;">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-avec-purple to-avec-cyan rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Digital Transformation & Execution</h3>
                    <p class="text-gray-300 leading-relaxed">
                        We translate strategy, policy, and reform agendas into deployable digital systems.
                    </p>
                </div>

                <!-- Service Card 5 -->
                <div class="glass glass-hover rounded-2xl p-8 group cursor-pointer fade-in-section"
                    style="animation-delay: 0.4s;">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Capacity Building & System Governance</h3>
                    <p class="text-gray-300 leading-relaxed">
                        We ensure institutions can govern, adopt, and sustain the systems we build.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="relative py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Content -->
                <div class="space-y-6 fade-in-section">
                    <span class="text-avec-purple font-semibold text-sm uppercase tracking-wider">About AVEC</span>
                    <h2 class="text-4xl md:text-6xl font-display font-bold">
                        Zambian. Woman-led. <span class="text-avec-cyan">Technology-driven.</span>
                    </h2>
                    <div class="space-y-4 text-lg text-gray-300 leading-relaxed">
                        <p>
                            AVEC Technologies is a Zambian, woman-led technology company specialising in bespoke systems
                            development, financial infrastructure, and data-driven digital solutions.
                        </p>
                        <p>
                            We support governments, financial institutions, development partners, and enterprises to
                            digitise operations, build custom systems, and use data intelligently to improve outcomes.
                        </p>
                    </div>
                </div>

                <!-- Vision & Mission -->
                <div class="space-y-6 fade-in-section" style="animation-delay: 0.2s;">
                    <div class="glass rounded-2xl p-8 border-l-4 border-avec-cyan">
                        <h3 class="text-2xl font-display font-bold mb-4 text-avec-cyan">Vision</h3>
                        <p class="text-gray-300 leading-relaxed">
                            To be a trusted African technology partner enabling institutions to build and govern digital
                            systems that support data-driven economies.
                        </p>
                    </div>
                    <div class="glass rounded-2xl p-8 border-l-4 border-avec-purple">
                        <h3 class="text-2xl font-display font-bold mb-4 text-avec-purple">Mission</h3>
                        <p class="text-gray-300 leading-relaxed">
                            To design, develop, and deploy bespoke digital, financial, and AI-enabled systems that
                            strengthen institutional decision-making and economic inclusion across Africa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section id="leadership" class="relative py-20">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16 fade-in-section">
                <span class="text-avec-cyan font-semibold text-sm uppercase tracking-wider">Leadership</span>
                <h2 class="text-4xl md:text-6xl font-display font-bold mt-4">Visionary Leadership</h2>
            </div>

            <div class="glass rounded-3xl p-12 text-center fade-in-section" style="animation-delay: 0.2s;">
                <!-- Photo or Initials Circle -->
                @if (file_exists(public_path('images/violet-kaponda.jpg')))
                    <img src="{{ asset('images/violet-kaponda.jpg') }}" alt="Violet Nswana Kaponda"
                        class="w-32 h-32 mx-auto mb-6 rounded-full object-cover ring-4 ring-avec-cyan/50">
                @else
                    <div
                        class="w-32 h-32 mx-auto mb-6 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-full flex items-center justify-center text-4xl font-bold">
                        VNK
                    </div>
                @endif

                <h3 class="text-3xl font-display font-bold mb-2">Violet Nswana Kaponda</h3>
                <p class="text-avec-cyan text-lg font-semibold mb-6">Founder & Director</p>
                <p class="text-xl text-gray-300 leading-relaxed max-w-3xl mx-auto">
                    A technology, digital transformation, and systems delivery leader focused on building African-owned
                    digital capability and enabling institutions to use data and AI responsibly.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="relative py-12 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-2">
                    <img src="{{ asset('images/Avec-logo-dark.png') }}" alt="AVEC Technologies" class="h-10 mb-4">
                    <p class="text-gray-400 leading-relaxed">
                        Building bespoke digital systems, financial infrastructure, and AI-enabled solutions for
                        Africa's future.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4 text-avec-cyan">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-avec-cyan transition-colors">Home</a>
                        </li>
                        <li><a href="#services"
                                class="text-gray-400 hover:text-avec-cyan transition-colors">Services</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-avec-cyan transition-colors">About</a>
                        </li>
                        <li><a href="#leadership"
                                class="text-gray-400 hover:text-avec-cyan transition-colors">Leadership</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4 text-avec-purple">Connect</h4>
                    <ul class="space-y-2">
                        <li><a href="#contact" class="text-gray-400 hover:text-avec-purple transition-colors">Contact
                                Us</a></li>
                        <li><a href="#contact"
                                class="text-gray-400 hover:text-avec-purple transition-colors">Partnerships</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-white/10 text-center text-gray-400">
                <p>&copy; 2024 AVEC Technologies. Building Africa's Digital Future.</p>
            </div>
        </div>
    </footer>


    <style>
        /* Animations */
        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 20s linear infinite;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 1s ease-out;
        }

        .fade-in-section {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Prevent horizontal scroll and fix glitches */
        body,
        html {
            overflow-x: hidden;
            max-width: 100vw;
        }

        /* Smooth navbar transition */
        #navbar {
            transition: all 0.3s ease;
        }

        #navbar.scrolled {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        /* Fix any layout issues */
        * {
            box-sizing: border-box;
        }
    </style>


    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Close mobile menu when clicking a link
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                });
            });
        }

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-section').forEach(el => {
            observer.observe(el);
        });

        // Nav background on scroll
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 100) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        // Form submission with validation
        const contactForm = document.getElementById('contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                const requiredFields = this.querySelectorAll('[required]');
                let isValid = true;

                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('ring-2', 'ring-red-500');
                    } else {
                        field.classList.remove('ring-2', 'ring-red-500');
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    alert('Please fill in all required fields');
                }
            });
        }
    </script>
</body>

</html>
