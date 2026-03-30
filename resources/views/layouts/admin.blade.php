<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') — AVEC Technologies</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* ── AVEC Admin — Clean White Theme ── */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #f7f8fc;
            color: #1f2937;
            margin: 0;
        }

        /* Sidebar links */
        .sb-link {
            display: flex;
            align-items: center;
            gap: 9px;
            padding: 8px 10px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 500;
            color: #6b7280;
            text-decoration: none;
            transition: all 0.15s;
            margin-bottom: 1px;
            cursor: pointer;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
        }

        .sb-link svg {
            width: 15px;
            height: 15px;
            flex-shrink: 0;
        }

        .sb-link:hover {
            background: #f7f8fc;
            color: #0A0E27;
        }

        .sb-link:hover svg {
            color: #00bcd4;
        }

        .sb-link.active {
            background: linear-gradient(135deg, rgba(0, 217, 255, 0.08), rgba(155, 143, 245, 0.06));
            color: #0097a7;
            font-weight: 600;
        }

        .sb-link.active svg {
            color: #00D9FF;
        }

        .sb-link.danger:hover {
            color: #ef4444;
            background: #fef2f2;
        }

        .sb-section {
            font-size: 9.5px;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #d1d5db;
            padding: 0 10px;
            margin: 14px 0 4px;
        }

        /* Form elements */
        .ai {
            width: 100%;
            padding: 9px 12px;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 9px;
            font-size: 13px;
            color: #1f2937;
            font-family: inherit;
            transition: border-color 0.15s, box-shadow 0.15s;
            outline: none;
        }

        .ai::placeholder {
            color: #d1d5db;
        }

        .ai:focus {
            border-color: #00D9FF;
            box-shadow: 0 0 0 3px rgba(0, 217, 255, 0.10);
        }

        .ai-icon {
            padding-left: 38px;
        }

        select.ai option {
            background: #fff;
            color: #1f2937;
        }

        .al {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 6px;
        }

        .as {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #d1d5db;
            margin-bottom: 14px;
        }

        /* Cards */
        .ac {
            background: #fff;
            border: 1px solid #e8eaf0;
            border-radius: 14px;
        }

        .ac-sm {
            background: #fff;
            border: 1px solid #e8eaf0;
            border-radius: 10px;
        }

        /* Action buttons */
        .action-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            padding: 10px 0;
            font-size: 12px;
            font-weight: 600;
            color: #9ca3af;
            transition: all 0.15s;
            background: none;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .action-btn svg {
            width: 13px;
            height: 13px;
        }

        .action-btn:hover {
            color: #00bcd4;
            background: #e0faff;
        }

        .action-btn.del:hover {
            color: #ef4444;
            background: #fef2f2;
        }

        /* Quill */
        .ql-toolbar {
            background: #f9fafb !important;
            border: 1px solid #e5e7eb !important;
            border-bottom: none !important;
            border-radius: 9px 9px 0 0;
        }

        .ql-container {
            background: #fff !important;
            border: 1px solid #e5e7eb !important;
            border-radius: 0 0 9px 9px;
            min-height: 380px;
            font-family: inherit !important;
        }

        .ql-editor {
            color: #1f2937 !important;
            font-size: 14px;
            line-height: 1.7;
            min-height: 360px;
        }

        .ql-editor.ql-blank::before {
            color: #d1d5db !important;
            font-style: normal;
        }

        .ql-editor:focus {
            outline: none;
        }

        .ql-container.ql-snow:focus-within {
            border-color: #00D9FF !important;
            box-shadow: 0 0 0 3px rgba(0, 217, 255, 0.08);
        }

        @media (max-width: 1023px) {
            #sb {
                transform: translateX(-100%);
            }

            #sb.open {
                transform: translateX(0);
            }

            #sb-overlay {
                display: none;
            }

            #sb-overlay.open {
                display: block;
            }
        }
    </style>
</head>

<body class="h-full">

    <div id="sb-overlay" class="fixed inset-0 bg-black/30 z-30 lg:hidden" onclick="toggleSb()"></div>

    <!-- SIDEBAR -->
    <aside id="sb"
        class="fixed top-0 left-0 h-full w-56 bg-white z-40 flex flex-col transition-transform duration-250 lg:translate-x-0"
        style="border-right:1px solid #f0f2f8;">

        <!-- Logo -->
        <div class="flex items-center gap-3 px-5 flex-shrink-0" style="height:56px;border-bottom:1px solid #f0f2f8;">
            <div class="w-8 h-8 rounded-xl flex items-center justify-center text-sm font-black text-white flex-shrink-0"
                style="background:linear-gradient(135deg,#00D9FF,#9B8FF5);">A</div>
            <div class="min-w-0">
                <div style="font-size:13px;font-weight:700;color:#0A0E27;letter-spacing:0.02em;line-height:1;">AVEC
                </div>
                <div style="font-size:9px;color:#9ca3af;font-weight:500;margin-top:2px;">Admin Panel</div>
            </div>
        </div>

        <!-- Nav -->
        <nav class="flex-1 overflow-y-auto px-3 py-3">
            <div class="sb-section">Main</div>
            <a href="{{ route('admin.dashboard') }}"
                class="sb-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Dashboard
            </a>

            <div class="sb-section">Content</div>
            <a href="{{ route('admin.blog.index') }}"
                class="sb-link {{ request()->routeIs('admin.blog.*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Blog Posts
            </a>
            <a href="{{ route('admin.categories.index') }}"
                class="sb-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                </svg>
                Categories
            </a>

            <div class="sb-section">People</div>
            <a href="{{ route('admin.team.index') }}"
                class="sb-link {{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Team Members
            </a>
        </nav>

        <!-- Bottom -->
        <div class="flex-shrink-0 p-3 space-y-0.5" style="border-top:1px solid #f0f2f8;">
            <a href="{{ route('home') }}" target="_blank" class="sb-link">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
                View Site
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="sb-link danger">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Logout
                </button>
            </form>
            <!-- User chip -->
            <div class="flex items-center gap-2.5 px-3 py-2 mt-1 rounded-xl" style="background:#f7f8fc;">
                <div class="w-7 h-7 rounded-full flex items-center justify-center text-xs font-bold text-white flex-shrink-0"
                    style="background:linear-gradient(135deg,#00D9FF,#9B8FF5);">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div class="min-w-0">
                    <div style="font-size:12px;font-weight:600;color:#0A0E27;" class="truncate">
                        {{ auth()->user()->name }}</div>
                    <div style="font-size:10px;color:#9ca3af;">Administrator</div>
                </div>
            </div>
        </div>
    </aside>

    <!-- MAIN -->
    <div class="lg:pl-56 min-h-full flex flex-col">

        <!-- Top bar -->
        <header class="sticky top-0 z-20 flex items-center px-6 gap-4 bg-white"
            style="height:56px;border-bottom:1px solid #f0f2f8;">
            <button onclick="toggleSb()" class="lg:hidden -ml-1 text-gray-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="flex-1 min-w-0">
                <h1 style="font-size:14px;font-weight:700;color:#0A0E27;line-height:1;">@yield('page_title', 'Dashboard')</h1>
                <p style="font-size:11px;color:#9ca3af;margin-top:2px;">@yield('page_subtitle', 'AVEC Technologies Admin')</p>
            </div>
            <a href="{{ route('admin.blog.create') }}"
                class="hidden sm:inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-white font-semibold text-xs hover:opacity-90 hover:scale-[1.02] transition-all"
                style="background:#0A0E27;">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
                </svg>
                New Post
            </a>
        </header>

        <!-- Body -->
        <main class="flex-1 p-6 lg:p-7">

            @if (session('success'))
                <div class="mb-5 flex items-center gap-3 px-4 py-3 rounded-xl text-sm"
                    style="background:#f0fdf4;border:1px solid #bbf7d0;color:#15803d;">
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="mb-5 flex items-center gap-3 px-4 py-3 rounded-xl text-sm"
                    style="background:#fef2f2;border:1px solid #fecaca;color:#dc2626;">
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    {{ session('error') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="mb-5 px-4 py-3 rounded-xl text-sm"
                    style="background:#fef2f2;border:1px solid #fecaca;color:#dc2626;">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <script>
        function toggleSb() {
            document.getElementById('sb').classList.toggle('open');
            document.getElementById('sb-overlay').classList.toggle('open');
        }
    </script>
    @stack('scripts')
</body>

</html>
