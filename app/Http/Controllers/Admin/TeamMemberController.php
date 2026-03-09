<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function index()
    {
        $members = TeamMember::orderBy('order')->get();
        return view('admin.team.index', compact('members'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|max:2048',
            'email' => 'nullable|email|max:255',
            'linkedin' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'order' => 'required|integer|min:1',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('photo')) {
            $filename = time() . '-' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('images'), $filename);
            $validated['photo'] = $filename;
        }

        TeamMember::create($validated);

        return redirect()->route('admin.team.index')
            ->with('success', 'Team member added successfully!');
    }

    public function edit(TeamMember $member)
    {
        return view('admin.team.edit', compact('member'));
    }

    public function update(Request $request, TeamMember $member)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|max:2048',
            'email' => 'nullable|email|max:255',
            'linkedin' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'order' => 'required|integer|min:1',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('photo')) {
            // Delete old photo
            if ($member->photo && file_exists(public_path('images/' . $member->photo))) {
                unlink(public_path('images/' . $member->photo));
            }

            $filename = time() . '-' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('images'), $filename);
            $validated['photo'] = $filename;
        }

        $member->update($validated);

        return redirect()->route('admin.team.index')
            ->with('success', 'Team member updated successfully!');
    }

    public function destroy(TeamMember $member)
    {
        if ($member->photo && file_exists(public_path('images/' . $member->photo))) {
            unlink(public_path('images/' . $member->photo));
        }

        $member->delete();

        return redirect()->route('admin.team.index')
            ->with('success', 'Team member deleted successfully!');
    }
}
