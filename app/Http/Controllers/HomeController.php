<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    public function principal()
    {
        return view('index');
    }
 
    public function sobre()
    {
        return view('sobre');
    }
    public function soma($num1,$num2)
    {
        $soma=$num1+$num2;

        return view('soma',compact('soma'));
    }
}