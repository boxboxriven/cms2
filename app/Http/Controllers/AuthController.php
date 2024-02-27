<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        // Your logic to handle the user data returned by Google

        // For example:
        // $existingUser = User::where('email', $user->email)->first();
        // if (!$existingUser) {
        //     $newUser = new User();
        //     $newUser->name = $user->name;
        //     $newUser->email = $user->email;
        //     $newUser->save();
        //     Auth::login($newUser);
        // } else {
        //     Auth::login($existingUser);
        // }

        return redirect()->route('home'); // Redirect to home or any other route
    }
}
