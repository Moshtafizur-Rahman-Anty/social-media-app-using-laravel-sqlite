<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage() {
        return view('homepage');
    }

    public function aboutPage() {
        return "<h1>this is about page</h1> <a href='/'> Go to Home page</a>";
    }

    public function singlePost() {
        return view('single-post');
    }
}
