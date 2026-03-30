@extends('layouts.admin')
@section('title', 'Team Members')
@section('page_title', 'Team Members')
@section('page_subtitle', 'Manage team member profiles')

@section('content')
    <div class="space-y-5">

        <div class="flex items-center justify-between">
            <div style="font-size:13px;color:#94a3b8;">
                {{ $members->count() }} {{ Str::plural('member', $members->count()) }} · ordered by display position
            </div>
            <a href="{{ route('admin.team.create') }}"
                class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg font-semibold text-xs hover:opacity-90 transition-all"
                style="background:linear-gradient(135deg,#00D9FF,#9B8FF5);color:#0A0E27;text-decoration:none;">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
                </svg>
                Add Member
            </a>
        </div>

        @if ($members->isEmpty())
            <div class="ac flex flex-col items-center justify-center py-20">
                <div
                    style="width:56px;height:56px;background:#eef0f5;border-radius:16px;display:flex;align-items:center;justify-content:center;margin-bottom:14px;">
                    <svg style="width:28px;height:28px;color:#b0bac9;" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <p style="color:#94a3b8;font-size:13px;margin-bottom:10px;">No team members yet</p>
                <a href="{{ route('admin.team.create') }}"
                    style="font-size:13px;font-weight:600;color:#00bcd4;text-decoration:none;">Add your first team member
                    →</a>
            </div>
        @else
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach ($members as $member)
                    <div class="ac overflow-hidden transition-all" style="border-color:#dde1ea;"
                        onmouseover="this.style.borderColor='#00D9FF';this.style.boxShadow='0 4px 16px rgba(0,217,255,0.08)'"
                        onmouseout="this.style.borderColor='#dde1ea';this.style.boxShadow='0 1px 3px rgba(0,0,0,0.05)'">

                        {{-- Top --}}
                        <div class="relative px-5 pt-5 pb-4 text-center">
                            <span
                                style="position:absolute;top:10px;left:10px;font-size:10px;font-weight:700;color:#b0bac9;background:#eef0f5;padding:2px 8px;border-radius:20px;">
                                #{{ $member->order }}
                            </span>
                            <span
                                style="position:absolute;top:10px;right:10px;display:inline-flex;align-items:center;gap:4px;font-size:10px;font-weight:600;padding:2px 8px;border-radius:20px;
                                {{ $member->is_active ? 'background:#ecfdf5;color:#059669;border:1px solid #a7f3d0;' : 'background:#eef0f5;color:#94a3b8;border:1px solid #dde1ea;' }}">
                                <span
                                    style="width:5px;height:5px;border-radius:50%;background:{{ $member->is_active ? '#34d399' : '#b0bac9' }};"></span>
                                {{ $member->is_active ? 'Active' : 'Hidden' }}
                            </span>

                            @if ($member->photo && file_exists(public_path('images/' . $member->photo)))
                                <img src="{{ asset('images/' . $member->photo) }}" alt="{{ $member->name }}"
                                    class="w-20 h-20 mx-auto rounded-full object-cover mb-3"
                                    style="border:3px solid #eef0f5;">
                            @else
                                <div class="w-20 h-20 mx-auto mb-3 rounded-full flex items-center justify-center text-xl font-bold text-white"
                                    style="background:linear-gradient(135deg,#00D9FF,#9B8FF5);">
                                    {{ substr($member->name, 0, 1) }}{{ substr(explode(' ', $member->name)[1] ?? '', 0, 1) }}
                                </div>
                            @endif

                            <h3 style="font-weight:700;color:#1e2a45;font-size:14px;line-height:1.3;">{{ $member->name }}
                            </h3>
                            <p style="color:#00bcd4;font-size:11.5px;font-weight:600;margin-top:3px;">{{ $member->role }}
                            </p>
                        </div>

                        {{-- Bio --}}
                        @if ($member->bio)
                            <div class="px-5 pb-3">
                                <p class="line-clamp-2 text-center" style="font-size:11.5px;color:#94a3b8;line-height:1.5;">
                                    {{ $member->bio }}
                                </p>
                            </div>
                        @endif

                        {{-- Socials --}}
                        @if ($member->linkedin || $member->twitter || $member->email)
                            <div class="flex items-center justify-center gap-3 px-5 pb-4">
                                @if ($member->linkedin)
                                    <a href="{{ $member->linkedin }}" target="_blank"
                                        style="color:#b0bac9;transition:color 0.15s;"
                                        onmouseover="this.style.color='#0097a7'" onmouseout="this.style.color='#b0bac9'">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                        </svg>
                                    </a>
                                @endif
                                @if ($member->twitter)
                                    <a href="{{ $member->twitter }}" target="_blank"
                                        style="color:#b0bac9;transition:color 0.15s;"
                                        onmouseover="this.style.color='#0097a7'" onmouseout="this.style.color='#b0bac9'">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                        </svg>
                                    </a>
                                @endif
                                @if ($member->email)
                                    <a href="mailto:{{ $member->email }}" style="color:#b0bac9;transition:color 0.15s;"
                                        onmouseover="this.style.color='#0097a7'" onmouseout="this.style.color='#b0bac9'">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        @endif

                        {{-- Actions --}}
                        <div class="flex" style="border-top:1px solid #eef0f5;">
                            <a href="{{ route('admin.team.edit', $member) }}" class="action-btn">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                Edit
                            </a>
                            <div style="width:1px;background:#eef0f5;"></div>
                            <form action="{{ route('admin.team.destroy', $member) }}" method="POST" class="flex-1"
                                onsubmit="return confirm('Delete {{ addslashes($member->name) }}?');">
                                @csrf @method('DELETE')
                                <button type="submit" class="action-btn del w-full">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </div>
@endsection
