<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    // In UserController.php

    public function store(Request $request)
    {
        // Validate the incoming request data
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
        return redirect()->back()->with('success', 'User registered successfully');
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request['password']);
        $users->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'User Update successfully');
            // dd('jjjj');
    }


    public function destroy($id)
    {
        // Find the student by ID
        $users = User::find($id);

        // Check if users exists
        if (!$users) {
            return redirect()->back()->with('error', 'users not found.');
        }

        // Delete the users
        $users->delete();

        return redirect()->back()->with('success', 'Users deleted successfully');
    }

    public function approve($id)
{
    // Find the user by ID
    $user = User::find($id);

    if ($user) {
        // Set is_approved to true (or 1)
        $user->is_approved = 1;
        // Save the updated user record
        $user->save();
        // Redirect back with a success message
        return redirect()->back()->with('success', 'User approved successfully.');
    }

    // Redirect back with an error message if the user was not found
    return redirect()->back()->with('error', 'User not found.');
}

public function reject($id)
{
    // Find the user by ID
    $user = User::find($id);

    if ($user) {
        // Set is_approved to true (or 1)
        $user->is_approved = 0;
        // Save the updated user record
        $user->save();
        // Redirect back with a success message
        return redirect()->back()->with('success', 'User rejected  successfully.');
    }

    // Redirect back with an error message if the user was not found
    return redirect()->back()->with('error', 'User not found.');
}
}
