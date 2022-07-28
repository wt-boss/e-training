<?php

namespace App\Http\Controllers;

use App\Models\Chapitre;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $fake=fake()->paragraphs(10 , true);

        $yvan = Chapitre::find(1);
        return view('test' , ['user'=>$yvan] );
    }
}
