@extends('layouts.admin')
@section('title', 'Categories')
@section('page_title', 'Categories')
@section('page_subtitle', 'Manage blog categories')

@section('content')
    <div class="space-y-5">

        {{-- Header actions --}}
        <div class="flex items-center justify-between">
            <div style="font-size:13px;color:#94a3b8;">{{ $categories->count() }}
                {{ Str::plural('category', $categories->count()) }} total</div>
            <a href="{{ route('admin.categories.create') }}"
                class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-white font-semibold text-xs hover:opacity-90 transition-all"
                style="background:linear-gradient(135deg,#00D9FF,#9B8FF5);color:#0A0E27;">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
                </svg>
                New Category
            </a>
        </div>

        {{-- Table --}}
        <div class="ac overflow-hidden">
            <div class="overflow-x-auto">
                <table style="width:100%;border-collapse:collapse;font-size:13px;">
                    <thead>
                        <tr style="background:#f8f9fc;">
                            <th
                                style="padding:10px 20px;text-align:left;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#b0bac9;">
                                Name</th>
                            <th class="hidden sm:table-cell"
                                style="padding:10px 20px;text-align:left;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#b0bac9;">
                                Slug</th>
                            <th class="hidden md:table-cell"
                                style="padding:10px 20px;text-align:left;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#b0bac9;">
                                Description</th>
                            <th
                                style="padding:10px 20px;text-align:left;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#b0bac9;">
                                Posts</th>
                            <th
                                style="padding:10px 20px;text-align:right;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#b0bac9;">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            <tr style="border-top:1px solid #eef0f5;" onmouseover="this.style.background='#f8f9fc'"
                                onmouseout="this.style.background=''">
                                <td style="padding:13px 20px;font-weight:600;color:#1e2a45;">{{ $category->name }}</td>
                                <td class="hidden sm:table-cell" style="padding:13px 20px;">
                                    <code
                                        style="font-size:11.5px;background:#eef0f5;color:#64748b;padding:2px 8px;border-radius:5px;font-family:monospace;">{{ $category->slug }}</code>
                                </td>
                                <td class="hidden md:table-cell" style="padding:13px 20px;color:#94a3b8;font-size:12px;">
                                    {{ Str::limit($category->description, 60) ?: '—' }}
                                </td>
                                <td style="padding:13px 20px;">
                                    <span
                                        style="display:inline-flex;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;background:#f3f0ff;color:#7c6fd4;border:1px solid #ddd6fe;">
                                        {{ $category->posts_count }} {{ Str::plural('post', $category->posts_count) }}
                                    </span>
                                </td>
                                <td style="padding:13px 20px;text-align:right;">
                                    <div class="inline-flex items-center gap-3">
                                        <a href="{{ route('admin.categories.edit', $category) }}"
                                            style="font-size:12px;font-weight:600;color:#00bcd4;text-decoration:none;">Edit</a>
                                        @if ($category->posts_count === 0)
                                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST"
                                                class="inline" onsubmit="return confirm('Delete this category?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    style="font-size:12px;font-weight:600;color:#f87171;background:none;border:none;cursor:pointer;padding:0;">
                                                    Delete
                                                </button>
                                            </form>
                                        @else
                                            <span style="font-size:12px;color:#d1d5db;cursor:not-allowed;"
                                                title="Cannot delete — has posts">Delete</span>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" style="padding:56px 20px;text-align:center;">
                                    <div
                                        style="width:44px;height:44px;background:#eef0f5;border-radius:12px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;">
                                        <svg style="width:22px;height:22px;color:#b0bac9;" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                        </svg>
                                    </div>
                                    <div style="font-size:13px;color:#94a3b8;margin-bottom:8px;">No categories yet</div>
                                    <a href="{{ route('admin.categories.create') }}"
                                        style="font-size:12px;font-weight:600;color:#00bcd4;text-decoration:none;">Create
                                        your first category →</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
