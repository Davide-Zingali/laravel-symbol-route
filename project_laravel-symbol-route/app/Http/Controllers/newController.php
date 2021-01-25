<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    public function first() {
        return view('pages.first');
    }
    public function second() {
        return view('pages.second');
    }
    public function third() {
        return view('pages.third');
    }
}
