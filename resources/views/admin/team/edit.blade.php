@extends('layouts.admin')

@section('title', 'Edit Team Member')

@section('content')
    <div class="space-y-6">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-display font-bold text-gray-900 dark:text-white">Edit Team Member</h1>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Update team member profile</p>
            </div>
            <a href="{{ route('admin.team.index') }}"
                class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                ← Back to Team
            </a>
        </div>

        <!-- Form -->
        <div class="max-w-3xl">
            <form action="{{ route('admin.team.update', $member) }}" method="POST" enctype="multipart/form-data"
                class="bg-white dark:bg-avec-navy rounded-lg shadow p-8 space-y-6">
                @csrf
                @method('PUT')

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name', $member->name) }}" required
                            class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Role -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Role/Title <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="role" value="{{ old('role', $member->role) }}" required
                            class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">
                        @error('role')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Bio -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Bio</label>
                    <textarea name="bio" rows="4"
                        class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">{{ old('bio', $member->bio) }}</textarea>
                    @error('bio')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Photo -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Photo</label>

                    @if ($member->photo && file_exists(public_path('images/' . $member->photo)))
                        <div class="mb-4">
                            <img src="{{ asset('images/' . $member->photo) }}" class="w-32 h-32 rounded-full object-cover">
                        </div>
                    @endif

                    <input type="file" name="photo" accept="image/*"
                        class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                        {{ $member->photo ? 'Upload a new photo to replace current one' : 'Recommended: Square image, 400x400px, Max 2MB' }}
                    </p>
                    @error('photo')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email', $member->email) }}"
                            class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- LinkedIn -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">LinkedIn URL</label>
                        <input type="url" name="linkedin" value="{{ old('linkedin', $member->linkedin) }}"
                            class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">
                        @error('linkedin')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Twitter -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Twitter URL</label>
                        <input type="url" name="twitter" value="{{ old('twitter', $member->twitter) }}"
                            class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">
                        @error('twitter')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Order -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Display Order <span class="text-red-500">*</span>
                        </label>
                        <input type="number" name="order" value="{{ old('order', $member->order) }}" min="1"
                            required
                            class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">
                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Lower numbers appear first</p>
                        @error('order')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Active Status -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Status</label>
                        <div class="flex items-center h-12">
                            <input type="checkbox" name="is_active" value="1"
                                {{ old('is_active', $member->is_active) ? 'checked' : '' }}
                                class="w-4 h-4 text-avec-cyan focus:ring-avec-cyan border-gray-300 rounded">
                            <label class="ml-2 text-sm text-gray-700 dark:text-gray-300">
                                Active (visible on website)
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <div class="flex justify-end space-x-3 pt-6 border-t border-gray-200 dark:border-white/10">
                    <a href="{{ route('admin.team.index') }}"
                        class="px-6 py-3 border border-gray-300 dark:border-white/10 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-avec-dark transition-colors">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-6 py-3 bg-avec-cyan text-white rounded-lg hover:bg-avec-cyan/90 transition-colors font-semibold">
                        Update Team Member
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
