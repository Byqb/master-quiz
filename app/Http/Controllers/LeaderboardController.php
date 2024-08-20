<?php

namespace App\Http\Controllers;

use App\Models\User;

class LeaderboardController extends Controller
{
    public function index()
    {
        $leaders = User::orderBy('xp', 'desc')->take(10)->get();
        return view('leaderboard.index', compact('leaders'));
    }
}
