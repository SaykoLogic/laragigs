<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class clientController extends Controller
{
    //
    public function create() {
        return view('clients.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('clients' , 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $client = Client::create($formFields);

        auth()->login($client);
        return redirect('/')->with('message', 'user created succssesfully');

    }

    public function logout(request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message' , 'logged out');
    }

    public function login() {
        return view('clients.login');
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
