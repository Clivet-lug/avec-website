@extends('layouts.admin')
@section('title', 'Edit Category')
@section('page_title', 'Edit Category')
@section('page_subtitle', 'Update category details')

@section('content')
    <div class="max-w-xl">

        {{-- Back link --}}
        <a href="{{ route('admin.categories.index') }}"
            style="display:inline-flex;align-items:center;gap:5px;font-size:12px;font-weight:600;color:#94a3b8;text-decoration:none;margin-bottom:20px;">
            <svg style="width:14px;height:14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Categories
        </a>

        <form action="{{ route('admin.categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="ac p-6 space-y-5">

                {{-- Name --}}
                <div>
                    <label class="al">Name <span style="color:#f87171;">*</span></label>
                    <input type="text" name="name" value="{{ old('name', $category->name) }}" required class="ai">
                    @error('name')
                        <p style="margin-top:5px;font-size:11.5px;color:#f87171;">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Description --}}
                <div>
                    <label class="al">Description</label>
                    <textarea name="description" rows="3" class="ai" placeholder="Brief description of this category"
                        style="resize:vertical;">{{ old('description', $category->description) }}</textarea>
                    @error('description')
                        <p style="margin-top:5px;font-size:11.5px;color:#f87171;">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Current slug info --}}
                <div style="background:#f8f9fc;border:1px solid #eef0f5;border-radius:9px;padding:12px 14px;">
                    <p style="font-size:12px;color:#94a3b8;margin-bottom:3px;">
                        Current slug: <code style="color:#00bcd4;font-family:monospace;">{{ $category->slug }}</code>
                    </p>
                    <p style="font-size:11px;color:#b0bac9;">Slug updates automatically when you change the name</p>
                </div>

                {{-- Actions --}}
                <div class="flex items-center justify-end gap-3 pt-1">
                    <a href="{{ route('admin.categories.index') }}"
                        style="font-size:13px;font-weight:500;color:#94a3b8;text-decoration:none;padding:8px 16px;border-radius:8px;border:1px solid #dde1ea;background:#fff;">
                        Cancel
                    </a>
                    <button type="submit"
                        class="inline-flex items-center gap-1.5 px-5 py-2 rounded-lg font-semibold text-sm hover:opacity-90 transition-all"
                        style="background:linear-gradient(135deg,#00D9FF,#9B8FF5);color:#0A0E27;">
                        Update Category
                    </button>
                </div>

            </div>
        </form>

    </div>
@endsection
