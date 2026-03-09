@extends('layouts.admin')

@section('title', 'Create Blog Post')

@section('content')
    <div class="space-y-6">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-display font-bold text-gray-900 dark:text-white">Create New Post</h1>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Write and publish a new blog post</p>
            </div>
            <a href="{{ route('admin.blog.index') }}"
                class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                ← Back to Posts
            </a>
        </div>

        <!-- Form -->
        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid lg:grid-cols-3 gap-6">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Title -->
                    <div class="bg-white dark:bg-avec-navy rounded-lg shadow p-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Title <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="title" value="{{ old('title') }}" required
                            class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white"
                            placeholder="Enter post title">
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Excerpt -->
                    <div class="bg-white dark:bg-avec-navy rounded-lg shadow p-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Excerpt <span class="text-red-500">*</span>
                        </label>
                        <textarea name="excerpt" rows="3" required
                            class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white"
                            placeholder="Brief summary of the post (shown in listings)">{{ old('excerpt') }}</textarea>
                        @error('excerpt')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Content Editor -->
                    <div class="bg-white dark:bg-avec-navy rounded-lg shadow p-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Content <span class="text-red-500">*</span>
                        </label>
                        <textarea name="content" id="content" rows="20">{{ old('content') }}</textarea>
                        @error('content')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- SEO -->
                    <div class="bg-white dark:bg-avec-navy rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">SEO Settings</h3>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Meta
                                    Title</label>
                                <input type="text" name="meta_title" value="{{ old('meta_title') }}"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white"
                                    placeholder="Leave empty to use post title">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Meta
                                    Description</label>
                                <textarea name="meta_description" rows="2"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white"
                                    placeholder="Leave empty to use excerpt">{{ old('meta_description') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Publish -->
                    <div class="bg-white dark:bg-avec-navy rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Publish</h3>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    Status <span class="text-red-500">*</span>
                                </label>
                                <select name="status" required
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">
                                    <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>
                                        Published</option>
                                </select>
                            </div>

                            <div class="pt-4 border-t border-gray-200 dark:border-white/10">
                                <button type="submit"
                                    class="w-full px-6 py-3 bg-avec-cyan text-white rounded-lg hover:bg-avec-cyan/90 transition-colors font-semibold">
                                    Create Post
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="bg-white dark:bg-avec-navy rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Category</h3>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Select Category <span class="text-red-500">*</span>
                            </label>
                            <select name="category_id" required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">
                                <option value="">Choose a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Featured Image -->
                    <div class="bg-white dark:bg-avec-navy rounded-lg shadow p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Featured Image</h3>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Upload
                                Image</label>
                            <input type="file" name="featured_image" accept="image/*"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-white/10 rounded-lg focus:ring-2 focus:ring-avec-cyan focus:border-transparent dark:bg-avec-dark dark:text-white">
                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Recommended: 1200x630px, Max 2MB</p>
                            @error('featured_image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        tinymce.init({
            selector: '#content',
            height: 500,
            menubar: false,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | blocks | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            content_style: 'body { font-family: Inter, sans-serif; font-size: 16px; color: #e5e7eb; background-color: #0A0E27; }',
            skin: 'oxide-dark',
            content_css: 'dark'
        });
    </script>
@endpush
