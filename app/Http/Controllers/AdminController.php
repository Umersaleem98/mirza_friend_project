<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{



    public function index()
    {

        $maleCount = Student::where('gender', 'Male')->count();
    $femaleCount = Student::where('gender', 'Female')->count();

    return view('dashboard', compact('maleCount', 'femaleCount'));

    }

    public function showLoginForm()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->is_approved == 1) {
                return redirect('dashboard');
            } else {
                return back()->withErrors([
                    'email' => 'This user is not approved yet.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Successfully logged out');

    }


}
