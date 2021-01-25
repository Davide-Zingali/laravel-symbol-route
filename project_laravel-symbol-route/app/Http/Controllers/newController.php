<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    public function first() {
        return view('pages.first-page');
    }
    public function second() {
        return view('pages.second-page');
    }
    public function third() {
        return view('pages.third-page');
    }
}
