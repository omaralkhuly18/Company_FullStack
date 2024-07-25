<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function index()
    {
        return view('admins.profiles.index');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'password' => 'required|min:8',
            'phone' => 'required',
        ]);

        // Verify the provided password against the one stored in the database
        if (!Hash::check($validatedData['password'], $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect');
        }

         // Check if a new password is provided
         if ($request->new_password) {
            $user->password = bcrypt($request->new_password);
        }
        
        // If the provided password is correct, update the user's data
        $user->name = $validatedData['name'];
        $user->phone = $validatedData['phone'];
        $user->email = $validatedData['email'];


        $user->save();

        return redirect()->route('dash.profile.index')->with('success', 'Profile updated successfully');
    }

}
