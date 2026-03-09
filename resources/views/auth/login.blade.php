<!DOCTYPE html>
<html lang="en" class="scroll-smooth dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - AVEC Technologies</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-avec-dark text-white antialiased">

    <!-- Animated Background -->
    <div class="fixed inset-0 gradient-mesh pointer-events-none"></div>

    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-md w-full space-y-8">
            <!-- Logo -->
            <div class="text-center">
                <img class="mx-auto h-12 w-auto" src="{{ asset('images/Avec-logo-dark.png') }}" alt="AVEC Technologies">
                <h2 class="mt-6 text-3xl font-display font-bold">Admin Login</h2>
                <p class="mt-2 text-sm text-gray-400">Sign in to access the admin panel</p>
            </div>

            <!-- Login Form -->
            <form class="mt-8 space-y-6 glass rounded-3xl p-8" method="POST" action="{{ route('login') }}">
                @csrf

                @if ($errors->any())
                    <div class="bg-red-500/20 border border-red-500 text-red-200 px-4 py-3 rounded-lg">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="space-y-4">
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium mb-2">Email Address</label>
                        <input id="email" name="email" type="email" required autofocus
                            value="{{ old('email') }}"
                            class="w-full px-4 py-3 glass rounded-xl focus:outline-none focus:ring-2 focus:ring-avec-cyan bg-white/5 transition-all">
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium mb-2">Password</label>
                        <input id="password" name="password" type="password" required
                            class="w-full px-4 py-3 glass rounded-xl focus:outline-none focus:ring-2 focus:ring-avec-cyan bg-white/5 transition-all">
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox"
                            class="h-4 w-4 text-avec-cyan focus:ring-avec-cyan border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-300">
                            Remember me
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 bg-gradient-to-r from-avec-cyan to-avec-purple rounded-xl font-semibold hover:shadow-lg hover:shadow-avec-cyan/50 transition-all">
                        Sign in
                    </button>
                </div>

                <!-- Back to Site -->
                <div class="text-center">
                    <a href="{{ route('home') }}"
                        class="text-sm text-avec-cyan hover:text-avec-purple transition-colors">
                        ← Back to website
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
