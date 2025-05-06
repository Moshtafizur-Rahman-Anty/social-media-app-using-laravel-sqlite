<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //


    public function showCorrectHomepage() {
        if(auth()->check()) {
            return view('homepage-feed');
        } else {
            return view('homepage');
        }
    }


    public function login(Request $request) {

        $incomingRequest = $request->validate(


            [
                'loginusername' => 'required',
                'loginpassword' => 'required'
            ]

            );

            if(auth()->attempt(['username' => $incomingRequest['loginusername'], 'password' => $incomingRequest['loginpassword']])) {

                $request->session()->regenerate();
                return "Hello";
            }

            else {
                return "Failed";
            }


    }

    public function register(Request $request) {

        $incomingRequest = $request->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        User::create($incomingRequest);

        return "form submitted";

    }
}
