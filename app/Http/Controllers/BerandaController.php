<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function home(){
        return view("home.home");
    }

    public function contact(){
        return view("home.contact");
    }

    public function pricing(){
        return view("home.pricing");
    }

    public function about(){
        return view("home.about");
    }
}
