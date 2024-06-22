<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function store_user()
    {

        return view('theme.register');
    }

    public function register_user(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        // Create a new user record using the validated data
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your Regieration is pending after approved you will get access for login in Dashboard');
    }

}
