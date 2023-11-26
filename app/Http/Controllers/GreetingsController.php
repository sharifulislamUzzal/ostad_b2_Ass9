<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    function Hello(){

        return "Hello friends";
    }


    function Hi(){

        return "Hi.";
    }

    function greet( Request $request){

        $ip=$request->ip();
        return "Greeting...........{$ip}";
    }

}
