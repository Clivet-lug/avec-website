@extends('layouts.admin')

@section('title', 'Team Members')

@section('content')
    <div class="space-y-6">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-display font-bold text-gray-900 dark:text-white">Team Members</h1>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Manage team member profiles</p>
            </div>
            <a href="{{ route('admin.team.create') }}"
                class="px-6 py-3 bg-avec-cyan text-white rounded-lg hover:bg-avec-cyan/90 transition-colors flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add Team Member
            </a>
        </div>

        <!-- Team Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse($members as $member)
                <div class="bg-white dark:bg-avec-navy rounded-lg shadow p-6 text-center">
                    @if ($member->photo && file_exists(public_path('images/' . $member->photo)))
                        <img src="{{ asset('images/' . $member->photo) }}" alt="{{ $member->name }}"
                            class="w-24 h-24 mx-auto rounded-full object-cover mb-4 ring-4 ring-avec-cyan/50">
                    @else
                        <div
                            class="w-24 h-24 mx-auto mb-4 bg-gradient-to-br from-avec-cyan to-avec-purple rounded-full flex items-center justify-center text-2xl font-bold">
                            {{ substr($member->name, 0, 1) }}{{ substr(explode(' ', $member->name)[1] ?? '', 0, 1) }}
                        </div>
                    @endif

                    <h3 class="text-lg font-display font-bold text-gray-900 dark:text-white mb-1">{{ $member->name }}</h3>
                    <p class="text-sm text-avec-cyan mb-2">{{ $member->role }}</p>

                    <div class="flex items-center justify-center gap-2 mb-4">
                        <span
                            class="px-2 py-1 text-xs rounded-full {{ $member->is_active ? 'bg-green-100 dark:bg-green-900/20 text-green-800 dark:text-green-400' : 'bg-gray-100 dark:bg-gray-900/20 text-gray-800 dark:text-gray-400' }}">
                            {{ $member->is_active ? 'Active' : 'Inactive' }}
                        </span>
                        <span class="px-2 py-1 text-xs rounded-full bg-avec-purple/20 text-avec-purple">
                            Order: {{ $member->order }}
                        </span>
                    </div>

                    <div class="flex justify-center gap-3 pt-4 border-t border-gray-200 dark:border-white/10">
                        <a href="{{ route('admin.team.edit', $member) }}"
                            class="text-avec-cyan hover:text-avec-purple text-sm font-medium">
                            Edit
                        </a>
                        <form action="{{ route('admin.team.destroy', $member) }}" method="POST" class="inline"
                            onsubmit="return confirm('Are you sure you want to delete this team member?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300 text-sm font-medium">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    <p class="mt-4 text-sm text-gray-500 dark:text-gray-400">No team members yet.</p>
                    <a href="{{ route('admin.team.create') }}"
                        class="mt-2 inline-block text-avec-cyan hover:text-avec-purple">
                        Add your first team member
                    </a>
                </div>
            @endforelse
        </div>
    </div>
@endsection
