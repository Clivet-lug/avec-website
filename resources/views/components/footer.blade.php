<footer class="relative py-12 border-t border-white/10 dark:border-white/10">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <div class="col-span-2">
                <img src="{{ asset('images/Avec-logo-dark.png') }}" alt="AVEC Technologies" class="h-10 mb-4">
                <p class="text-gray-400 dark:text-gray-400 leading-relaxed">
                    Digital Infrastructure & AI Intelligence Partner for Africa. We build the systems that power African
                    economies.
                </p>
            </div>
            <div>
                <h4 class="font-semibold mb-4 text-avec-cyan">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}"
                            class="text-gray-400 dark:text-gray-400 hover:text-avec-cyan transition-colors">Home</a>
                    </li>
                    <li><a href="{{ route('about') }}"
                            class="text-gray-400 dark:text-gray-400 hover:text-avec-cyan transition-colors">About</a>
                    </li>
                    <li><a href="{{ route('services') }}"
                            class="text-gray-400 dark:text-gray-400 hover:text-avec-cyan transition-colors">Services</a>
                    </li>
                    {{-- <li><a href="{{ route('team') }}"
                            class="text-gray-400 dark:text-gray-400 hover:text-avec-cyan transition-colors">Team</a>
                    </li> --}}
                    <li><a href="{{ route('blog.index') }}"
                            class="text-gray-400 dark:text-gray-400 hover:text-avec-cyan transition-colors">Blog</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4 text-avec-purple">Connect</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('contact') }}"
                            class="text-gray-400 dark:text-gray-400 hover:text-avec-purple transition-colors">Contact
                            Us</a></li>
                    <li><a href="{{ route('contact') }}"
                            class="text-gray-400 dark:text-gray-400 hover:text-avec-purple transition-colors">Partnerships</a>
                    </li>
                    <li><a href="mailto:clivetlungu1@gmail.com"
                            class="text-gray-400 dark:text-gray-400 hover:text-avec-purple transition-colors">Email
                            Us</a></li>
                </ul>
            </div>
        </div>
        <div class="pt-8 border-t border-white/10 dark:border-white/10 text-center text-gray-400 dark:text-gray-400">
            <p>&copy; {{ date('Y') }} AVEC Technologies. Building Africa's Digital Future.</p>
        </div>
    </div>
</footer>
