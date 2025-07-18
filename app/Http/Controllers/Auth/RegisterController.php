<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register_step1');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'id'       => Str::uuid(),
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('complete-profile');
    }

    public function showCompleteProfileForm()
    {
        return view('auth.register_step2');
    }

    public function completeProfile(Request $request)
    {
        $request->validate([
            'name'   => 'nullable|string|max:255',
            'lastname'=> 'nullable|string|max:255',
            'image'  => 'nullable|image|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->lastname = $request->lastname;

        if ($request->hasFile('image')) {
            $filename = $user->id . '.' . $request->file('image')->extension();
            $path = $request->file('image')->storeAs('public/users', $filename);
            $user->image = 'users/' . $filename;
        }

        $user->save();

        return redirect()->route('home');
    }
}
