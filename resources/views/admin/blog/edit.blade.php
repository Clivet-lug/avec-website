@extends('layouts.admin')
@section('title', 'Edit Blog Post')
@section('page_title', 'Edit Post')
@section('page_subtitle', 'Update blog post content')

@section('content')
    <div class="space-y-5">

        <div class="flex items-center justify-between">
            <div>
                <h1 style="font-size:24px;font-weight:700;color:#0A0E27;">Edit Post</h1>
                <p style="margin-top:3px;font-size:13px;color:#9ca3af;">{{ Str::limit($post->title, 50) }}</p>
            </div>
            <a href="{{ route('admin.blog.index') }}"
                style="font-size:13px;font-weight:500;color:#9ca3af;text-decoration:none;display:inline-flex;align-items:center;gap:5px;">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to Posts
            </a>
        </div>

        <form action="{{ route('admin.blog.update', $post) }}" method="POST" enctype="multipart/form-data" id="blog-form">
            @csrf @method('PUT')
            <input type="hidden" name="content" id="content-input">

            <div class="grid lg:grid-cols-3 gap-5">

                {{-- Main --}}
                <div class="lg:col-span-2 space-y-4">

                    <div class="ac p-6">
                        <label class="al">Title <span style="color:#ef4444;">*</span></label>
                        <input type="text" name="title" value="{{ old('title', $post->title) }}" required
                            class="ai" style="font-size:15px;padding:11px 14px;">
                        @error('title')
                            <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="ac p-6">
                        <label class="al">Excerpt <span style="color:#ef4444;">*</span></label>
                        <textarea name="excerpt" rows="3" required class="ai" style="resize:vertical;">{{ old('excerpt', $post->excerpt) }}</textarea>
                        @error('excerpt')
                            <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="ac p-6">
                        <label class="al">Content <span style="color:#ef4444;">*</span></label>
                        <div id="quill-editor"></div>
                        @error('content')
                            <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="ac p-6 space-y-4">
                        <div class="as">SEO Settings</div>
                        <div>
                            <label class="al">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ old('meta_title', $post->meta_title) }}"
                                placeholder="Leave empty to use post title" class="ai">
                        </div>
                        <div>
                            <label class="al">Meta Description</label>
                            <textarea name="meta_description" rows="2" class="ai" style="resize:vertical;">{{ old('meta_description', $post->meta_description) }}</textarea>
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="space-y-4">

                    <div class="ac p-6 space-y-4">
                        <div class="as">Publish</div>
                        <div>
                            <label class="al">Status <span style="color:#ef4444;">*</span></label>
                            <select name="status" required class="ai">
                                <option value="draft" {{ old('status', $post->status) === 'draft' ? 'selected' : '' }}>
                                    Draft</option>
                                <option value="published"
                                    {{ old('status', $post->status) === 'published' ? 'selected' : '' }}>Published</option>
                            </select>
                        </div>
                        <div
                            style="padding-top:14px;border-top:1px solid #f0f2f8;display:flex;flex-direction:column;gap:8px;">
                            <button type="submit"
                                class="w-full py-2.5 rounded-xl text-white text-sm font-semibold hover:opacity-90 transition-all"
                                style="background:#0A0E27;">
                                Update Post
                            </button>
                            <a href="{{ route('blog.show', $post->slug) }}" target="_blank"
                                class="w-full py-2.5 rounded-xl text-sm font-semibold text-center transition-all"
                                style="background:#f7f8fc;color:#6b7280;border:1px solid #e8eaf0;text-decoration:none;"
                                onmouseover="this.style.background='#f0f2f8'" onmouseout="this.style.background='#f7f8fc'">
                                Preview ↗
                            </a>
                        </div>
                        {{-- Delete --}}
                        <div style="padding-top:12px;border-top:1px solid #fde8e8;">
                            <form action="{{ route('admin.blog.destroy', $post) }}" method="POST"
                                onsubmit="return confirm('Permanently delete this post?');">
                                @csrf @method('DELETE')
                                <button type="submit" class="w-full py-2 rounded-xl text-sm font-semibold transition-all"
                                    style="border:1px solid #fecaca;color:#ef4444;background:transparent;"
                                    onmouseover="this.style.background='#fef2f2'"
                                    onmouseout="this.style.background='transparent'">
                                    Delete Post
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="ac p-6">
                        <div class="as">Category</div>
                        <label class="al">Select Category <span style="color:#ef4444;">*</span></label>
                        <select name="category_id" required class="ai">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="ac p-6">
                        <div class="as">Featured Image</div>
                        @if ($post->featured_image)
                            <div class="mb-4">
                                <img src="{{ asset('storage/' . $post->featured_image) }}"
                                    class="w-full rounded-xl object-cover"
                                    style="max-height:150px;border:1px solid #e8eaf0;">
                            </div>
                        @endif
                        <div id="img-preview" class="hidden mb-4">
                            <img id="img-preview-el" class="w-full rounded-xl object-cover"
                                style="max-height:150px;border:1px solid #e8eaf0;">
                        </div>
                        <label for="featured_image" class="block cursor-pointer">
                            <div class="flex flex-col items-center justify-center py-5 rounded-xl transition-all"
                                style="border:2px dashed #e5e7eb;"
                                onmouseover="this.style.borderColor='#00D9FF';this.style.background='#f0feff';"
                                onmouseout="this.style.borderColor='#e5e7eb';this.style.background='transparent';">
                                <span
                                    style="font-size:12px;font-weight:600;color:#00bcd4;">{{ $post->featured_image ? 'Replace image' : 'Choose image' }}</span>
                            </div>
                        </label>
                        <input type="file" name="featured_image" id="featured_image" accept="image/*" class="hidden"
                            onchange="previewImage(this)">
                        <p style="font-size:11px;color:#d1d5db;margin-top:8px;">Recommended: 1200×630px · Max 2MB</p>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <script>
        const quill = new Quill('#quill-editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, 3, false]
                    }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                        color: []
                    }, {
                        background: []
                    }],
                    [{
                        list: 'ordered'
                    }, {
                        list: 'bullet'
                    }],
                    [{
                        align: []
                    }],
                    ['link', 'image', 'blockquote', 'code-block'],
                    ['clean']
                ]
            }
        });
        quill.root.innerHTML = `{!! addslashes($post->content ?? '') !!}`;
        document.getElementById('blog-form').addEventListener('submit', () => {
            document.getElementById('content-input').value = quill.root.innerHTML;
        });

        function previewImage(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = e => {
                    document.getElementById('img-preview-el').src = e.target.result;
                    document.getElementById('img-preview').classList.remove('hidden');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
