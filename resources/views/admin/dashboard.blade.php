@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page_title', 'Dashboard')
@section('page_subtitle', 'Welcome back, ' . auth()->user()->name . '!')

@section('content')
    <div class="space-y-5">

        {{-- Stat cards --}}
        <div class="grid grid-cols-2 xl:grid-cols-4 gap-4">

            <div class="ac p-5 hover:shadow-sm transition-all" style="border-top:3px solid #00D9FF;">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background:#e0faff;">
                        <svg style="width:18px;height:18px;color:#00bcd4;" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <a href="{{ route('admin.blog.index') }}"
                        style="font-size:11px;font-weight:600;color:#00bcd4;text-decoration:none;">View →</a>
                </div>
                <div style="font-size:32px;font-weight:700;color:#0A0E27;line-height:1;margin-bottom:4px;">
                    {{ $stats['total_posts'] }}</div>
                <div style="font-size:12px;color:#9ca3af;font-weight:500;">Total Posts</div>
            </div>

            <div class="ac p-5 hover:shadow-sm transition-all" style="border-top:3px solid #22c55e;">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background:#f0fdf4;">
                        <svg style="width:18px;height:18px;color:#16a34a;" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span
                        style="font-size:10.5px;font-weight:600;padding:3px 9px;border-radius:20px;background:#f0fdf4;color:#15803d;">Live</span>
                </div>
                <div style="font-size:32px;font-weight:700;color:#0A0E27;line-height:1;margin-bottom:4px;">
                    {{ $stats['published_posts'] }}</div>
                <div style="font-size:12px;color:#9ca3af;font-weight:500;">Published</div>
            </div>

            <div class="ac p-5 hover:shadow-sm transition-all" style="border-top:3px solid #f59e0b;">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background:#fffbeb;">
                        <svg style="width:18px;height:18px;color:#d97706;" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span
                        style="font-size:10.5px;font-weight:600;padding:3px 9px;border-radius:20px;background:#fffbeb;color:#b45309;">Draft</span>
                </div>
                <div style="font-size:32px;font-weight:700;color:#0A0E27;line-height:1;margin-bottom:4px;">
                    {{ $stats['draft_posts'] }}</div>
                <div style="font-size:12px;color:#9ca3af;font-weight:500;">Drafts</div>
            </div>

            <div class="ac p-5 hover:shadow-sm transition-all" style="border-top:3px solid #9B8FF5;">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background:#f3f0ff;">
                        <svg style="width:18px;height:18px;color:#7c6fd4;" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <a href="{{ route('admin.team.index') }}"
                        style="font-size:11px;font-weight:600;color:#7c6fd4;text-decoration:none;">Manage →</a>
                </div>
                <div style="font-size:32px;font-weight:700;color:#0A0E27;line-height:1;margin-bottom:4px;">
                    {{ $stats['team_members'] }}</div>
                <div style="font-size:12px;color:#9ca3af;font-weight:500;">Team Members</div>
            </div>
        </div>

        {{-- Quick actions --}}
        <div class="grid sm:grid-cols-3 gap-4">
            <a href="{{ route('admin.blog.create') }}"
                class="flex items-center gap-4 p-4 rounded-2xl hover:opacity-95 hover:-translate-y-0.5 transition-all"
                style="background:#0A0E27;text-decoration:none;">
                <div class="w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0"
                    style="background:linear-gradient(135deg,#00D9FF,#9B8FF5);">
                    <svg style="width:17px;height:17px;" fill="none" stroke="#fff" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                </div>
                <div>
                    <div style="font-size:13px;font-weight:600;color:#fff;">New Blog Post</div>
                    <div style="font-size:11.5px;color:rgba(255,255,255,0.45);margin-top:2px;">Write and publish content
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.team.create') }}"
                class="ac flex items-center gap-4 p-4 rounded-2xl hover:shadow-sm hover:-translate-y-0.5 transition-all"
                style="text-decoration:none;">
                <div class="w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0" style="background:#f3f0ff;">
                    <svg style="width:17px;height:17px;color:#7c6fd4;" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </div>
                <div>
                    <div style="font-size:13px;font-weight:600;color:#0A0E27;">Add Team Member</div>
                    <div style="font-size:11.5px;color:#9ca3af;margin-top:2px;">Manage your team</div>
                </div>
            </a>

            <a href="{{ route('home') }}" target="_blank"
                class="ac flex items-center gap-4 p-4 rounded-2xl hover:shadow-sm hover:-translate-y-0.5 transition-all"
                style="text-decoration:none;">
                <div class="w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0" style="background:#e0faff;">
                    <svg style="width:17px;height:17px;color:#00bcd4;" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </div>
                <div>
                    <div style="font-size:13px;font-weight:600;color:#0A0E27;">View Live Site</div>
                    <div style="font-size:11.5px;color:#9ca3af;margin-top:2px;">avectechnologies.com</div>
                </div>
            </a>
        </div>

        {{-- Recent posts --}}
        <div class="ac overflow-hidden">
            <div class="flex items-center justify-between px-6 py-4" style="border-bottom:1px solid #f0f2f8;">
                <div>
                    <div style="font-size:14px;font-weight:700;color:#0A0E27;">Recent Posts</div>
                    <div style="font-size:11px;color:#9ca3af;margin-top:2px;">Latest content activity</div>
                </div>
                <a href="{{ route('admin.blog.index') }}"
                    style="font-size:12px;font-weight:600;color:#00bcd4;text-decoration:none;">View all →</a>
            </div>
            <div class="overflow-x-auto">
                <table style="width:100%;border-collapse:collapse;font-size:13px;">
                    <thead>
                        <tr style="background:#fafbfd;">
                            <th
                                style="padding:10px 20px;text-align:left;font-size:10.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#d1d5db;">
                                Title</th>
                            <th class="hidden sm:table-cell"
                                style="padding:10px 20px;text-align:left;font-size:10.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#d1d5db;">
                                Category</th>
                            <th
                                style="padding:10px 20px;text-align:left;font-size:10.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#d1d5db;">
                                Status</th>
                            <th class="hidden md:table-cell"
                                style="padding:10px 20px;text-align:left;font-size:10.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#d1d5db;">
                                Date</th>
                            <th
                                style="padding:10px 20px;text-align:right;font-size:10.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#d1d5db;">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recent_posts as $post)
                            <tr style="border-top:1px solid #f0f2f8;" onmouseover="this.style.background='#fafbfd'"
                                onmouseout="this.style.background=''">
                                <td style="padding:12px 20px;font-weight:500;color:#0A0E27;">
                                    {{ Str::limit($post->title, 48) }}</td>
                                <td class="hidden sm:table-cell" style="padding:12px 20px;">
                                    <span
                                        style="display:inline-flex;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;background:#e0faff;color:#0097a7;">
                                        {{ $post->category->name }}
                                    </span>
                                </td>
                                <td style="padding:12px 20px;">
                                    @if ($post->status === 'published')
                                        <span
                                            style="display:inline-flex;align-items:center;gap:5px;font-size:11.5px;font-weight:600;color:#15803d;">
                                            <span
                                                style="width:6px;height:6px;border-radius:50%;background:#22c55e;flex-shrink:0;"></span>Published
                                        </span>
                                    @else
                                        <span
                                            style="display:inline-flex;align-items:center;gap:5px;font-size:11.5px;font-weight:600;color:#b45309;">
                                            <span
                                                style="width:6px;height:6px;border-radius:50%;background:#f59e0b;flex-shrink:0;"></span>Draft
                                        </span>
                                    @endif
                                </td>
                                <td class="hidden md:table-cell" style="padding:12px 20px;color:#9ca3af;font-size:12px;">
                                    {{ $post->created_at->format('M d, Y') }}</td>
                                <td style="padding:12px 20px;text-align:right;">
                                    <a href="{{ route('admin.blog.edit', $post) }}"
                                        style="font-size:12px;font-weight:600;color:#00bcd4;text-decoration:none;">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" style="padding:56px 20px;text-align:center;">
                                    <div
                                        style="width:44px;height:44px;background:#f7f8fc;border-radius:12px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;">
                                        <svg style="width:22px;height:22px;color:#d1d5db;" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div style="font-size:13px;color:#9ca3af;margin-bottom:8px;">No posts yet</div>
                                    <a href="{{ route('admin.blog.create') }}"
                                        style="font-size:12px;font-weight:600;color:#00bcd4;text-decoration:none;">Create
                                        your first post →</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
