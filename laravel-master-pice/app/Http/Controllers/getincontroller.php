<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getincontroller extends Controller
{
    public function login(){
        return view('login');
    }
    public function signin(){
        return view('signin');
    }
    public  function index(){
        return view('welcome');
    }
}
