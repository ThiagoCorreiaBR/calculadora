<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pokemon extends Controller
{
    public function pokemon($nome)
    {
        return view('pokemon',compact('nome'));
    }
}
