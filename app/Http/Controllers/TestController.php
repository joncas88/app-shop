<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {
        
        $a=5;
        $b=10;
        $c=$a+$b;
        //return "El resultado de la prueba es $c";
        

        return view('welcome');
    }
}
