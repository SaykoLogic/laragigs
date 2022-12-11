<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userController extends Controller
{
    //
    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users' , 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);
        return redirect('/')->with('message', 'user created succssesfully');

    }

    public function logout(request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message' , 'logged out');
    }

    public function login() {
        return view('users.login');
    }

    public function authenticate(request $request) {
        $formFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with(['message', 'logged in succsessfully']);
        }
        return back()->withErrors(['email' => 'invalid credentials'])->onlyInput('email');
    }
}
