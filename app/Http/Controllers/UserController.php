<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function showProfile($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }




    public function userProfile()
    {
        // Retrieve the authenticated user
        $user = auth()->user();

        // Return the user profile view with the user data
        return view('userprofile', compact('user'));
    }
    public function editProfile()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }
    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $user->photo = '/uploads/' . $filename;
        }

        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $user->cv = '/uploads/' . $filename;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }


}
