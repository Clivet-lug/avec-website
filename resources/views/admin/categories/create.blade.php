@extends('layouts.admin')

@section('title', 'Create Category')

@section('content')
    <div class="space-y-6">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-display font-bold text-gray-900 dark:text-white">Create Category</h1>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Add a new blog category</p>
            </div>
            <a href="{{ route('admin.categories.index') }}"
                class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                ← Back to Categories
            </a>
        </div>

        <!-- Form -->
        <div class="max-w-2xl">
            <form action="{{ route('admin.categories.store') }}" method="POST"
                class="bg-white dark:bg-avec-navy rounded-lg shadow p-8 space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white"
                        placeholder="e.g., Technology, Industry Insights">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">The slug will be auto-generated from the name
                    </p>
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Description
                    </label>
                    <textarea name="description" rows="3"
                        class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white"
                        placeholder="Brief description of this category">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit -->
                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.categories.index') }}"
                        class="px-6 py-3 border border-gray-300 dark:border-white/10 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-avec-dark transition-colors">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-6 py-3 bg-avec-cyan text-white rounded-lg hover:bg-avec-cyan/90 transition-colors font-semibold">
                        Create Category
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
