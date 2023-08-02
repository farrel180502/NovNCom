<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\karya;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // $user = User::all();
        // $user = User::where('id', $user->id)->get();


        $karya = karya::where('user_id', $user->id)->get();
        return view('profiles.index', [
            'karya' => $karya,
            'user' => $user,
        ], compact('user'));
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profiles.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'no_tlpn' => 'nullable|string|max:20' . $user->id,
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // maksimal 2MB
            'about' => 'nullable|string',
        ]);

        // Mengelola unggahan gambar
        if ($request->hasFile('profile_pic')) {
            $path = $request->file('profile_pic')->store('profile_pic', 'public');
            // Simpan path file gambar yang diunggah ke basis data (kolom profile_pic pada tabel users)
            $user->profile_pic = $path;
        }

        // Simpan perubahan profil ke basis data
        $user->no_tlpn = $request->no_tlpn;
        $user->about = $request->about;
        $user->update($request->except('profile_pic'));

        // Flash message
        // Session::flash('success', 'Profile updated successfully.');

        return redirect()->route('profile/user/{user:username}');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
