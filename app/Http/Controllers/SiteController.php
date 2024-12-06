<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function home(Request $request) {
        return view('site.index' );
    }

    function menu(Request $request) {
        return view('site.menu' );
    }

    function about(Request $request) {
        return view('site.about' );
    }

    function contact(Request $request) {
        return view('site.contact' );
    }

    function reservations(Request $request) {
        return view('site.reservations' );
    }

    function styles(Request $request) {
        return view('site.styles' );
    }
}
