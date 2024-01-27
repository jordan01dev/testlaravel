<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegitController extends Controller
{
    public function index ()
    {
        return view('register');
    }
}
