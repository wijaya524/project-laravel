<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ProfileController extends Controller
{
    // Menampilkan halaman profil
    public function index()
    {
        // Mengambil data user yang sedang login
        $user = Auth::user();

        // Mengembalikan tampilan dengan data user, hanya mengirimkan atribut yang diperlukan
        return view('profile.index', ['user' => $user]);
    }

    // Menangani update profil
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',

        ]);

        $user = Auth::user();

        $user->name = $request->input('name');

        if ($user instanceof \App\Models\User) {
            $user->save();
        } else {
            dd('Auth::user() is not an instance of User model');
        }

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }


    public function edit()
    {
        // Mengambil data user yang sedang login
        $user = Auth::user();

        // Mengembalikan tampilan form edit profil dengan data user
        return view('profile.edit', compact('user'));
    }
}
