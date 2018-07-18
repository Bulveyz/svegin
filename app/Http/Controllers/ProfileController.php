<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function avatar(User $user, Request $request)
    {
        $this->validate($request, [
           'avatar' => 'required'
        ]);

        Storage::delete($user->avatar);

        $user->avatar = $request->file('avatar')->store('public');
        $user->save();

        return back();
    }
}
