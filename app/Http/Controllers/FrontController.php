<?php

namespace servbroker\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function contacto(){
    	return view('contact');
    }

    public function nosotros(){
    	return view('nosotros');
    }
}
