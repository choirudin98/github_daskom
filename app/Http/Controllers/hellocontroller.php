<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class hellocontroller extends Controller
{
    public function index(){
        return view("hello");
    }
}

{    public function page2(){
        return view("page2");
	}
}