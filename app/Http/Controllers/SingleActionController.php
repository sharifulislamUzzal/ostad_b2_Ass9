<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    public function helo()
    {
        return "Hello, World!";
    }
}
