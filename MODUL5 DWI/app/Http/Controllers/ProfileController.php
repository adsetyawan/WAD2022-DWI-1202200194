<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $title = 'Profile Saya';
        return view('profile',compact('title'));
    }

    public function update()
    {
        request()->validate([
            'name' => ['required'],
            'no_hp' => ['required']
        ]);

        if(request('password'))
        {
            request()->validate([
                'password' => ['required','confirmed','min:5'],
                'password_confirmation' => ['required']
            ]);
            $password = bcrypt(request('password'));
        }else{
            $password = auth()->user()->password;
        }

        auth()->user()->update([
            'name' => request('name'),
            'no_hp' => request('no_hp'),
            'password' => $password
        ]);

        return redirect()->route('profile.update')->with('success','Profile berhasil diupdate!');
    }
}
