<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view ("home");
    }
    public function artikel(){
        return view ("artikel");
    }
    public function ContactUs(){
        return view ("ContactUs");
    }
}
