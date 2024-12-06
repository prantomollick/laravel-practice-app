<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function logic() {
        $even = false;
        $number = 19;
        $totalNumberOfMales = 10;
        $totalNumberOfFemales = 20;

        return view('demo.condition', ['even' => $even, 'number' => $number, 'm' => $totalNumberOfMales, 'f' => $totalNumberOfFemales]);
    }

    function data() {
        $name = "Pranto Mollick";
        $greetings = "<strong>Good mornings!</strong>";

        return view('demo.data', ['name' => $name, 'greetings' => $greetings]);
    }

    function home() {
        return view('demo.index');
    }

    function about() {
        return view('demo.about');
    }
}
