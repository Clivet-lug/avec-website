@extends('layouts.app')

@section('title', 'Contact Us - AVEC Technologies')
@section('meta_description',
    'Get in touch with AVEC Technologies. Let\'s discuss how we can help transform your digital
    infrastructure.')

@section('content')

    <style>
        html:not(.dark) #contact-hero-section {
            background: linear-gradient(160deg, #e8f4ff 0%, #eef0ff 55%, #f3f0ff 100%);
        }

        html:not(.dark) #contact-form-section {
            background: linear-gradient(180deg, #eef2f7 0%, #f3f0ff 100%);
        }

        /* Form inputs in light mode */
        html:not(.dark) .bg-white\/5 {
            background-color: rgba(255, 255, 255, 0.85) !important;
            color: #0a0e27 !important;
            border: 1px solid rgba(0, 0, 0, 0.10);
        }

        html:not(.dark) .bg-white\/5::placeholder {
            color: #8090b0;
        }

        html:not(.dark) .bg-white\/5:focus {
            background-color: rgba(255, 255, 255, 0.98) !important;
            border-color: rgba(0, 217, 255, 0.4);
        }

        /* Form labels */
        html:not(.dark) form label {
            color: #1e2a4a;
        }

        /* Contact info card text */
        html:not(.dark) .text-gray-400 {
            color: #4a5270 !important;
        }

        html:not(.dark) #contact-form-section h3.font-display,
        html:not(.dark) #contact-form-section h3.font-semibold {
            color: #0a0e27;
        }

        /* Icon container backgrounds */
        html:not(.dark) .bg-avec-cyan\/20 {
            background-color: rgba(0, 153, 170, 0.12) !important;
        }

        html:not(.dark) .bg-avec-purple\/20 {
            background-color: rgba(108, 95, 212, 0.12) !important;
        }

        html:not(.dark) .bg-green-500\/20 {
            background-color: rgba(34, 197, 94, 0.12) !important;
        }

        /* Response time card */
        html:not(.dark) .bg-gradient-to-br.from-avec-cyan\/10 {
            background: linear-gradient(135deg, rgba(0, 217, 255, 0.08), rgba(155, 143, 245, 0.08)) !important;
        }

        /* Success alert */
        html:not(.dark) .bg-avec-cyan\/20.border-avec-cyan {
            background-color: rgba(0, 217, 255, 0.08) !important;
        }
    </style>

    <!-- Hero Section -->
    <section id="contact-hero-section"
        class="relative min-h-[50vh] flex items-center pt-32 pb-20 bg-avec-dark/30 dark:bg-avec-dark/30">
        <div class="max-w-7xl mx-auto px-6 w-full">
            <div class="text-center fade-in-up">
                <span class="px-4 py-2 glass rounded-full text-sm font-medium text-avec-cyan inline-block mb-6">
                    Get In Touch
                </span>
                <h1 class="text-5xl md:text-7xl font-display font-bold leading-tight dark:text-white text-avec-dark mb-6">
                    Let's Build
                    <span class="bg-gradient-to-r from-avec-cyan to-avec-purple bg-clip-text text-transparent">
                        Together
                    </span>
                </h1>
                <p class="text-xl text-gray-300 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Ready to transform your digital infrastructure? We're here to help.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info -->
    <section id="contact-form-section" class="relative py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="fade-in-section">
                    @if (session('success'))
                        <div class="mb-8 p-6 bg-avec-cyan/20 border border-avec-cyan rounded-xl">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-avec-cyan mr-3 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold text-avec-cyan mb-1">Success!</h3>
                                    <p class="text-gray-300 dark:text-gray-300">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST"
                        class="glass rounded-3xl p-8 md:p-12 space-y-6">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium mb-2 dark:text-white text-avec-dark">First Name
                                    <span class="text-avec-cyan">*</span></label>
                                <input type="text" name="first_name" required value="{{ old('first_name') }}"
                                    placeholder="John"
                                    class="w-full px-4 py-3 glass rounded-xl focus:outline-none focus:ring-2 focus:ring-avec-cyan bg-white/5 transition-all @error('first_name') ring-2 ring-red-500 @enderror">
                                @error('first_name')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2 dark:text-white text-avec-dark">Last Name <span
                                        class="text-avec-cyan">*</span></label>
                                <input type="text" name="last_name" required value="{{ old('last_name') }}"
                                    placeholder="Doe"
                                    class="w-full px-4 py-3 glass rounded-xl focus:outline-none focus:ring-2 focus:ring-avec-cyan bg-white/5 transition-all @error('last_name') ring-2 ring-red-500 @enderror">
                                @error('last_name')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium mb-2 dark:text-white text-avec-dark">Email <span
                                        class="text-avec-cyan">*</span></label>
                                <input type="email" name="email" required value="{{ old('email') }}"
                                    placeholder="john@example.com"
                                    class="w-full px-4 py-3 glass rounded-xl focus:outline-none focus:ring-2 focus:ring-avec-cyan bg-white/5 transition-all @error('email') ring-2 ring-red-500 @enderror">
                                @error('email')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2 dark:text-white text-avec-dark">Phone</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}"
                                    placeholder="+260 XXX XXX XXX"
                                    class="w-full px-4 py-3 glass rounded-xl focus:outline-none focus:ring-2 focus:ring-avec-cyan bg-white/5 transition-all">
                            </div>
                        </div>

                        <div>
                            <label
                                class="block text-sm font-medium mb-2 dark:text-white text-avec-dark">Organization</label>
                            <input type="text" name="organization" value="{{ old('organization') }}"
                                placeholder="Your organization name"
                                class="w-full px-4 py-3 glass rounded-xl focus:outline-none focus:ring-2 focus:ring-avec-cyan bg-white/5 transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-2 dark:text-white text-avec-dark">Message <span
                                    class="text-avec-cyan">*</span></label>
                            <textarea name="message" rows="6" required placeholder="Tell us about your project or inquiry..."
                                class="w-full px-4 py-3 glass rounded-xl focus:outline-none focus:ring-2 focus:ring-avec-cyan bg-white/5 transition-all resize-none @error('message') ring-2 ring-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full px-8 py-4 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-full font-semibold text-lg text-avec-dark hover:shadow-2xl hover:shadow-avec-cyan/50 transition-all transform hover:scale-105">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8 fade-in-section" style="animation-delay: 0.2s;">
                    <div>
                        <h2 class="text-3xl font-display font-bold mb-6 dark:text-white text-avec-dark">
                            Let's Start a Conversation
                        </h2>
                        <p class="text-lg text-gray-300 dark:text-gray-300 leading-relaxed mb-8">
                            Whether you're looking to digitize operations, build custom systems, or deploy AI-powered
                            solutions, we're here to help.
                        </p>
                    </div>

                    <!-- Contact Methods -->
                    <div class="space-y-6">
                        <!-- Email -->
                        <div class="glass rounded-2xl p-6 hover:scale-105 transition-all">
                            <div class="flex items-start">
                                <div
                                    class="w-12 h-12 bg-avec-cyan/20 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-avec-cyan" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1 dark:text-white text-avec-dark">Email</h3>
                                    <a href="mailto:info@avectechnologies.com"
                                        class="text-avec-cyan hover:text-avec-purple transition-colors">
                                        info@avectechnologies.com
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="glass rounded-2xl p-6 hover:scale-105 transition-all">
                            <div class="flex items-start">
                                <div
                                    class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1 dark:text-white text-avec-dark">WhatsApp</h3>
                                    <p class="text-gray-400 text-sm">Quick response, instant communication</p>
                                    <a href="https://wa.me/260763959660" target="_blank"
                                        class="text-green-500 hover:text-green-400 transition-colors text-sm">
                                        Chat with us →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="glass rounded-2xl p-6">
                            <div class="flex items-start">
                                <div
                                    class="w-12 h-12 bg-avec-purple/20 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-avec-purple" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg mb-1 dark:text-white text-avec-dark">Location</h3>
                                    <p class="text-gray-400">Lusaka, Zambia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info -->
                    <div class="glass rounded-2xl p-8 bg-gradient-to-br from-avec-cyan/10 to-avec-purple/10">
                        <h3 class="text-xl font-display font-bold mb-4 dark:text-white text-avec-dark">Response Time</h3>
                        <p class="text-gray-300 dark:text-gray-300 mb-4">
                            We typically respond to inquiries within 24 hours during business days.
                        </p>
                        <p class="text-sm text-gray-400">
                            For urgent matters, please use WhatsApp for faster response.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-20 bg-gradient-to-r from-avec-cyan to-avec-purple">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-avec-dark">
                Prefer a Different Channel?
            </h2>
            <p class="text-xl text-avec-dark/80 mb-8">
                Connect with us on your preferred platform
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="https://wa.me/260" target="_blank"
                    class="px-8 py-4 bg-avec-dark text-white rounded-full font-semibold hover:bg-avec-dark/90 transition-all transform hover:scale-105 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                    </svg>
                    WhatsApp
                </a>
                <a href="mailto:clivetlungu1@gmail.com"
                    class="px-8 py-4 bg-white/10 backdrop-blur text-avec-dark rounded-full font-semibold hover:bg-white/20 transition-all transform hover:scale-105 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    Email
                </a>
            </div>
        </div>
    </section>
@endsection
