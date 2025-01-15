<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Comtroller
{
    public  function ShowGreetings()
    {
        return view('greet');
    }
}
