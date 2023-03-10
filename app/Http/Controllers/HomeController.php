<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('aisya.dashboard');
    }
    public function index2(){
        return view('aisya.dashboard');
    }
}
