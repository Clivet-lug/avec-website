@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
    <div class="space-y-6">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-display font-bold text-gray-900 dark:text-white">Edit Category</h1>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Update category details</p>
            </div>
            <a href="{{ route('admin.categories.index') }}"
                class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                ← Back to Categories
            </a>
        </div>

        <!-- Form -->
        <div class="max-w-2xl">
            <form action="{{ route('admin.categories.update', $category) }}" method="POST"
                class="bg-white dark:bg-avec-navy rounded-lg shadow p-8 space-y-6">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="name" value="{{ old('name', $category->name) }}" required
                        class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Description
                    </label>
                    <textarea name="description" rows="3"
                        class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">{{ old('description', $category->description) }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Current Slug -->
                <div class="bg-gray-50 dark:bg-avec-dark rounded-lg p-4">
                    <p class="text-sm text-gray-600 dark:text-gray-400">Current slug: <code
                            class="text-avec-cyan">{{ $category->slug }}</code></p>
                    <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">Slug will update automatically if you change
                        the name</p>
                </div>

                <!-- Submit -->
                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.categories.index') }}"
                        class="px-6 py-3 border border-gray-300 dark:border-white/10 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-avec-dark transition-colors">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-6 py-3 bg-avec-cyan text-white rounded-lg hover:bg-avec-cyan/90 transition-colors font-semibold">
                        Update Category
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
