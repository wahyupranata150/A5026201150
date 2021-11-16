<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showEts()
    {
        return view('ets');
    }

    function showForm()
    {
        //code untuk meload data yg akan dimuat di form
        return view('isian-faktorial');
    }

    function resultFactorial()
    {
        //code untuk meload data yg akan dimuat di form
        return view('faktorial');
    }
}
