<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('login.register', [
            'title' => 'Register',
            'active' => 'login'
        ]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:3|max:25|confirmed',
            'password_confirmation' => 'required|min:3'
        ]);

        $validated['password'] = Hash::make($validated['password']);

//         dd($validated);
        User::create($validated);

//        $request->session()->flash('succes', 'Registration successful, please login!');

        return redirect('/login')->with('success', 'Registration successful, please login!');
    }
}
