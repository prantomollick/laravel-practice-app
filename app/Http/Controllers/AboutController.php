<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about() {
        return response("Hello, I'm about page", 200);
    }

    function aboutme() {
        return response("Hello, I am about me page", 200);
    }
}
