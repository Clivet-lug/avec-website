<nav class="fixed w-full top-0 z-50 glass border-b border-white/10 dark:border-white/10" id="navbar">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3">
                <img src="{{ asset('images/Avec-logo-dark.png') }}" alt="AVEC Technologies" class="h-10">
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}"
                    class="text-sm font-medium hover:text-avec-cyan transition-colors {{ request()->routeIs('home') ? 'text-avec-cyan' : '' }}">Home</a>
                <a href="{{ route('about') }}"
                    class="text-sm font-medium hover:text-avec-cyan transition-colors {{ request()->routeIs('about') ? 'text-avec-cyan' : '' }}">About</a>
                <a href="{{ route('services') }}"
                    class="text-sm font-medium hover:text-avec-cyan transition-colors {{ request()->routeIs('services') ? 'text-avec-cyan' : '' }}">Services</a>
                {{-- <a href="{{ route('team') }}"
                    class="text-sm font-medium hover:text-avec-cyan transition-colors {{ request()->routeIs('team') ? 'text-avec-cyan' : '' }}">Team</a> --}}
                <a href="{{ route('blog.index') }}"
                    class="text-sm font-medium hover:text-avec-cyan transition-colors {{ request()->routeIs('blog.*') ? 'text-avec-cyan' : '' }}">Blog</a>

                <!-- Theme Toggle -->
                <button id="theme-toggle" class="p-2 rounded-lg glass-hover transition-all">
                    <svg class="w-5 h-5 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                        </path>
                    </svg>
                    <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                </button>

                <a href="{{ route('contact') }}"
                    class="px-6 py-2 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-avec-cyan/50 transition-all">
                    Contact AVEC
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-white focus:outline-none" id="mobile-menu-btn">
                <svg class="w-6 h-6" id="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
                <svg class="w-6 h-6 hidden" id="close-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="pt-4 pb-3 space-y-3">
                <a href="{{ route('home') }}"
                    class="block text-sm font-medium hover:text-avec-cyan transition-colors mobile-link">Home</a>
                <a href="{{ route('about') }}"
                    class="block text-sm font-medium hover:text-avec-cyan transition-colors mobile-link">About</a>
                <a href="{{ route('services') }}"
                    class="block text-sm font-medium hover:text-avec-cyan transition-colors mobile-link">Services</a>
                {{-- <a href="{{ route('team') }}"
                    class="block text-sm font-medium hover:text-avec-cyan transition-colors mobile-link">Team</a> --}}
                <a href="{{ route('blog.index') }}"
                    class="block text-sm font-medium hover:text-avec-cyan transition-colors mobile-link">Blog</a>
                <a href="{{ route('contact') }}"
                    class="block px-6 py-2 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full text-sm font-semibold text-center mobile-link">
                    Contact AVEC
                </a>
            </div>
        </div>
    </div>
</nav>
