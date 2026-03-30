@extends('layouts.admin')
@section('title', 'Blog Posts')
@section('page_title', 'Blog Posts')
@section('page_subtitle', 'Manage all blog posts')

@section('content')
    <div class="space-y-5">

        <div class="flex items-center justify-between">
            <div style="font-size:13px;color:#94a3b8;">{{ $posts->total() }} {{ Str::plural('post', $posts->total()) }} total
            </div>
            <a href="{{ route('admin.blog.create') }}"
                class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg font-semibold text-xs hover:opacity-90 transition-all"
                style="background:linear-gradient(135deg,#00D9FF,#9B8FF5);color:#0A0E27;text-decoration:none;">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
                </svg>
                New Post
            </a>
        </div>

        <div class="ac overflow-hidden">
            <div class="overflow-x-auto">
                <table style="width:100%;border-collapse:collapse;font-size:13px;">
                    <thead>
                        <tr style="background:#f8f9fc;">
                            <th
                                style="padding:11px 20px;text-align:left;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#b0bac9;">
                                Title</th>
                            <th class="hidden sm:table-cell"
                                style="padding:11px 20px;text-align:left;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#b0bac9;">
                                Category</th>
                            <th class="hidden md:table-cell"
                                style="padding:11px 20px;text-align:left;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#b0bac9;">
                                Author</th>
                            <th
                                style="padding:11px 20px;text-align:left;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#b0bac9;">
                                Status</th>
                            <th class="hidden md:table-cell"
                                style="padding:11px 20px;text-align:left;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#b0bac9;">
                                Date</th>
                            <th
                                style="padding:11px 20px;text-align:right;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:#b0bac9;">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                            <tr style="border-top:1px solid #eef0f5;" onmouseover="this.style.background='#f8f9fc'"
                                onmouseout="this.style.background=''">
                                <td style="padding:13px 20px;">
                                    <div class="flex items-center gap-3">
                                        @if ($post->featured_image)
                                            <img src="{{ asset('storage/' . $post->featured_image) }}"
                                                class="w-9 h-9 rounded-lg object-cover flex-shrink-0"
                                                style="border:1px solid #dde1ea;">
                                        @endif
                                        <span
                                            style="font-weight:500;color:#1e2a45;">{{ Str::limit($post->title, 55) }}</span>
                                    </div>
                                </td>
                                <td class="hidden sm:table-cell" style="padding:13px 20px;">
                                    <span
                                        style="display:inline-flex;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;background:#e8fbff;color:#0097a7;border:1px solid #b2f0fa;">
                                        {{ $post->category->name }}
                                    </span>
                                </td>
                                <td class="hidden md:table-cell" style="padding:13px 20px;color:#94a3b8;font-size:12px;">
                                    {{ $post->author->name }}</td>
                                <td style="padding:13px 20px;">
                                    @if ($post->status === 'published')
                                        <span
                                            style="display:inline-flex;align-items:center;gap:5px;font-size:11.5px;font-weight:600;color:#059669;">
                                            <span
                                                style="width:6px;height:6px;border-radius:50%;background:#34d399;flex-shrink:0;"></span>Published
                                        </span>
                                    @else
                                        <span
                                            style="display:inline-flex;align-items:center;gap:5px;font-size:11.5px;font-weight:600;color:#b45309;">
                                            <span
                                                style="width:6px;height:6px;border-radius:50%;background:#fbbf24;flex-shrink:0;"></span>Draft
                                        </span>
                                    @endif
                                </td>
                                <td class="hidden md:table-cell" style="padding:13px 20px;color:#94a3b8;font-size:12px;">
                                    {{ $post->published_at ? $post->published_at->format('M d, Y') : $post->created_at->format('M d, Y') }}
                                </td>
                                <td style="padding:13px 20px;text-align:right;">
                                    <div class="flex items-center justify-end gap-3">
                                        <a href="{{ route('blog.show', $post->slug) }}" target="_blank"
                                            style="font-size:12px;font-weight:600;color:#94a3b8;text-decoration:none;"
                                            onmouseover="this.style.color='#1e2a45'"
                                            onmouseout="this.style.color='#94a3b8'">View</a>
                                        <a href="{{ route('admin.blog.edit', $post) }}"
                                            style="font-size:12px;font-weight:600;color:#00bcd4;text-decoration:none;">Edit</a>
                                        <form action="{{ route('admin.blog.destroy', $post) }}" method="POST"
                                            class="inline" onsubmit="return confirm('Delete this post?');">
                                            @csrf @method('DELETE')
                                            <button type="submit"
                                                style="font-size:12px;font-weight:600;color:#94a3b8;background:none;border:none;cursor:pointer;padding:0;"
                                                onmouseover="this.style.color='#f87171'"
                                                onmouseout="this.style.color='#94a3b8'">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" style="padding:60px 20px;text-align:center;">
                                    <div
                                        style="width:44px;height:44px;background:#eef0f5;border-radius:12px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;">
                                        <svg style="width:22px;height:22px;color:#b0bac9;" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div style="font-size:13px;color:#94a3b8;margin-bottom:8px;">No blog posts yet</div>
                                    <a href="{{ route('admin.blog.create') }}"
                                        style="font-size:12px;font-weight:600;color:#00bcd4;text-decoration:none;">Create
                                        your first post →</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if ($posts->hasPages())
                <div style="padding:14px 20px;border-top:1px solid #eef0f5;">{{ $posts->links() }}</div>
            @endif
        </div>

    </div>
@endsection
