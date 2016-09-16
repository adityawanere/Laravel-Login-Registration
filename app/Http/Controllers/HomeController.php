<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * HomeController
 */
class HomeController extends Controller{

    public function index(){
        #return the view resource/home.blade.php
        return view('home');
    }
}



?>
