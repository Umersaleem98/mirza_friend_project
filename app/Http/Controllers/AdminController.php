<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{



    public function index()
    {

        $maleCount = Student::where('gender', 'Male')->count();
    $femaleCount = Student::where('gender', 'Female')->count();

    return view('dashboard', compact('maleCount', 'femaleCount'));

    }

    public function login()
    {
        return view('login');
    }

}
