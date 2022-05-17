<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function getMe()
    {
        return "manisha";
    }
    function printMe()
    {
        return "hello world";
    }
    function homeMe()
    {
        return "hello home";
    }
    function about()
    {
        return view('about');
    }
    function contact()
    {
        return  view('contact');
    }
    function gallery()
    {
        return view('gallery');
    }
    function service()
    {
        return view('service');

    }

}

