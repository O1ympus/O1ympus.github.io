<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }
    public function antivirus() {
        return view('category/antivirus');
    }
    public function basket(){
        return view('basket');
    }
    public function basketPlace(){
        return view('order');
    }
}
