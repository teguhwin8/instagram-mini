<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => 'required|min:3|max:30|alpha_dash|unique:users,username,'.$user->id,
            'fullname' => 'max:255',
            'bio' => 'max:144'
        ]);

        $user->update([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'bio' => $request->bio,
        ]);

        return view('home', compact('user'));
    }
}
