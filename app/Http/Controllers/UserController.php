<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email' , Rule::unique('users' , 'email')],
            'password' => "required|confirmed|min:8",            
        ]);

        //Hash the password
        $validatedData["password"] = bcrypt($validatedData["password"]);

        $user =User::create($validatedData);

        auth()->login($user);

        return redirect("/")->with('message', 'User created and logged in');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/")->with('message', 'Logged out');
    }

    public function login() {
        return view('users.login');
    }

    public function authenticate(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // $validatedData["password"] = bcrypt($validatedData["password"]);

        if (auth()->attempt($validatedData)) { 
            $request->session()->regenerate();

            return redirect()->intended('/')->with('message', 'Logged in');
        }

        return redirect("/login")->withInput()->with('message', 'Invalid email or password');
    }

    
}
