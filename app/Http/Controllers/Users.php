<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index(){
        return view('sample', ['name'=>'ravi']);
        //return ['name'=>'hi hello'];
    }
}
