<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function helloWorld()
    {
        return view('helloworld');
    }

    public function hello($name = 'Fulano')
    {
        return '<h1> Hello, ' . strtoupper($name) . '</h1>';

    }
}
