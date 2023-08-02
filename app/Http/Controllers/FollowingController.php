<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    //
    public function index(User $user, $following)
    {
        if ($following !== 'followers' && $following !== 'following') {
            return redirect()->route('profiles.index', $user->username);
        }

        $followingData = ($following === 'followers') ? $user->followers : $user->follows;

        return view('following.index', [
            'user' => $user,
            'followingData' => $followingData,
            'following' => $following,
        ]);
    }

    public function store(User $user)
    {
        auth()->user()->toggleFollow($user);

        return redirect()->route('profiles', $user->userName());
    }
}
