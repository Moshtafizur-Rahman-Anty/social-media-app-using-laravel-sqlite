<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    //

    public function register(Request $request) {

        $incomingRequest = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create($incomingRequest);

        return "form submitted";

    }
}
