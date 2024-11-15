<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Example: Get the first user (you can replace with authentication later)
        $user = User::first();
        return view('welcome', compact('user'));
    }

    public function edit()
    {
        $user = User::first();
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $request->id,
        ]);

        $user = User::findOrFail($request->id);
        $user->update($request->only(['name', 'email']));

        return redirect()->route('welcome')->with('success', 'Profile updated successfully!');
    }
}
