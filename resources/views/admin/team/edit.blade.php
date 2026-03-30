@extends('layouts.admin')
@section('title', 'Edit Team Member')
@section('page_title', 'Edit Team Member')
@section('page_subtitle', 'Updating profile for ' . $member->name)

@section('content')
    <div class="space-y-5 max-w-4xl">

        <div class="flex items-center justify-between">
            <div>
                <h1 style="font-size:24px;font-weight:700;color:#0A0E27;">Edit Team Member</h1>
                <p style="margin-top:3px;font-size:13px;color:#9ca3af;">Updating <span
                        style="color:#00bcd4;font-weight:600;">{{ $member->name }}</span></p>
            </div>
            <a href="{{ route('admin.team.index') }}"
                style="font-size:13px;font-weight:500;color:#9ca3af;text-decoration:none;display:inline-flex;align-items:center;gap:5px;">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to Team
            </a>
        </div>

        @if (session('success'))
            <div class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm"
                style="background:#f0fdf4;border:1px solid #bbf7d0;color:#15803d;">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.team.update', $member) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="grid lg:grid-cols-3 gap-5">

                {{-- Left --}}
                <div class="space-y-4">

                    {{-- Photo --}}
                    <div class="ac p-6">
                        <div class="as">Photo</div>
                        <div class="flex flex-col items-center mb-5">
                            <div id="photo-preview" class="w-28 h-28 rounded-full overflow-hidden mb-3"
                                style="border:2px dashed #e5e7eb;">
                                @if ($member->photo && file_exists(public_path('images/' . $member->photo)))
                                    <img src="{{ asset('images/' . $member->photo) }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center"
                                        style="background:linear-gradient(135deg,rgba(0,217,255,0.1),rgba(155,143,245,0.1));">
                                        <span
                                            style="font-size:24px;font-weight:700;color:#00bcd4;">{{ substr($member->name, 0, 1) }}{{ substr(explode(' ', $member->name)[1] ?? '', 0, 1) }}</span>
                                    </div>
                                @endif
                            </div>
                            <label for="photo-input"
                                style="font-size:12px;font-weight:600;color:#00bcd4;cursor:pointer;">{{ $member->photo ? 'Replace photo' : 'Choose photo' }}</label>
                        </div>
                        <input id="photo-input" type="file" name="photo" accept="image/*" class="hidden"
                            onchange="previewPhoto(this)">
                        <p style="text-align:center;font-size:11px;color:#d1d5db;">Square · 400×400px · Max 2MB</p>
                        @error('photo')
                            <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Display settings --}}
                    <div class="ac p-6 space-y-4">
                        <div class="as">Display Settings</div>
                        <div>
                            <label class="al">Display Order <span style="color:#ef4444;">*</span></label>
                            <input type="number" name="order" value="{{ old('order', $member->order) }}" min="1"
                                required class="ai">
                            <p style="margin-top:5px;font-size:11px;color:#d1d5db;">Lower = appears first</p>
                            @error('order')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center gap-3 p-3 rounded-xl" style="background:#f7f8fc;">
                            <input type="checkbox" name="is_active" value="1" id="is_active"
                                {{ old('is_active', $member->is_active) ? 'checked' : '' }} class="w-4 h-4 rounded"
                                style="accent-color:#00D9FF;">
                            <div>
                                <label for="is_active"
                                    style="font-size:13px;font-weight:600;color:#0A0E27;cursor:pointer;">Active</label>
                                <p style="font-size:11px;color:#9ca3af;margin-top:1px;">Visible on the public team page</p>
                            </div>
                        </div>
                    </div>

                    {{-- Danger zone --}}
                    <div class="ac p-6" style="border-color:#fecaca;">
                        <div
                            style="font-size:10px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:#ef4444;margin-bottom:10px;">
                            Danger Zone</div>
                        <p style="font-size:11.5px;color:#9ca3af;margin-bottom:14px;">Permanently delete this member. This
                            cannot be undone.</p>
                        <form action="{{ route('admin.team.destroy', $member) }}" method="POST"
                            onsubmit="return confirm('Permanently delete {{ addslashes($member->name) }}?');">
                            @csrf @method('DELETE')
                            <button type="submit" class="w-full py-2.5 rounded-xl text-sm font-semibold transition-all"
                                style="border:1px solid #fecaca;color:#ef4444;background:transparent;"
                                onmouseover="this.style.background='#fef2f2'"
                                onmouseout="this.style.background='transparent'">
                                Delete Member
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Right --}}
                <div class="lg:col-span-2 space-y-4">

                    {{-- Profile --}}
                    <div class="ac p-6 space-y-5">
                        <div class="as">Profile</div>
                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label class="al">Full Name <span style="color:#ef4444;">*</span></label>
                                <input type="text" name="name" value="{{ old('name', $member->name) }}" required
                                    class="ai">
                                @error('name')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="al">Role / Title <span style="color:#ef4444;">*</span></label>
                                <input type="text" name="role" value="{{ old('role', $member->role) }}" required
                                    class="ai">
                                @error('role')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label class="al">Bio</label>
                            <textarea name="bio" rows="4" class="ai" style="resize:none;">{{ old('bio', $member->bio) }}</textarea>
                            @error('bio')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Contact & Social --}}
                    <div class="ac p-6 space-y-5">
                        <div class="as">Contact & Social</div>
                        <div>
                            <label class="al">Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4" style="color:#d1d5db;" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <input type="email" name="email" value="{{ old('email', $member->email) }}"
                                    placeholder="name@avectechnologies.com" class="ai ai-icon">
                            </div>
                            @error('email')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="al">LinkedIn URL</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4" style="color:#d1d5db;" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </div>
                                <input type="url" name="linkedin" value="{{ old('linkedin', $member->linkedin) }}"
                                    placeholder="https://linkedin.com/in/username" class="ai ai-icon">
                            </div>
                            @error('linkedin')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="al">Twitter / X URL</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4" style="color:#d1d5db;" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                    </svg>
                                </div>
                                <input type="url" name="twitter" value="{{ old('twitter', $member->twitter) }}"
                                    placeholder="https://twitter.com/username" class="ai ai-icon">
                            </div>
                            @error('twitter')
                                <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div class="flex items-center justify-end gap-3">
                        <a href="{{ route('admin.team.index') }}"
                            class="px-5 py-2.5 rounded-xl text-sm font-medium transition-all"
                            style="border:1px solid #e5e7eb;color:#6b7280;text-decoration:none;"
                            onmouseover="this.style.background='#f7f8fc'"
                            onmouseout="this.style.background='transparent'">
                            Cancel
                        </a>
                        <button type="submit"
                            class="px-6 py-2.5 rounded-xl text-sm font-semibold text-white hover:opacity-90 transition-all"
                            style="background:#0A0E27;">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        function previewPhoto(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = e => {
                    document.getElementById('photo-preview').innerHTML =
                        `<img src="${e.target.result}" class="w-full h-full object-cover">`;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
