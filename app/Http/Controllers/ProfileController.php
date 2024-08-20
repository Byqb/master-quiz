<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $rank = $this->calculateRank($user->xp);

        return view('profile.show', [
            'user' => $user,
            'rank' => $rank
        ]);
    }

    private function calculateRank($xp)
    {
        if ($xp < 1500) return 'Quiz Aprentice';
        if ($xp < 5000) return 'Average Quizer';
        if ($xp < 10000) return 'Epic Quizer';
        return 'Quiz Master';
    }
}
