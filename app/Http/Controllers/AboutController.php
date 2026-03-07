<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;

class AboutController extends Controller
{
    public function index()
    {
        $team = TeamMember::active()->get();

        return view('pages.about', compact('team'));
    }
}
