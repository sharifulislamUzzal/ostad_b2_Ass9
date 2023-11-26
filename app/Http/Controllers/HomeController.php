<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        $users=[
            ['name'=>'Uzzal','age'=>'41'],
            ['name'=>'Farhan','age'=>'6'],
            ['name'=>'Nupur','age'=>'32'],
        ];
        
        
        return view("pages.show",['ulist'=>$users]);  
}
}
