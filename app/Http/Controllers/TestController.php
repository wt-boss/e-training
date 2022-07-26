<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $fake=fake()->paragraphs(10 , true);
        dd($fake);
        return view('index' );
    }
}
