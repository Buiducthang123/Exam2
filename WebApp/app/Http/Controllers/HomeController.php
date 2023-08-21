<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $questions= Question::all();
        foreach ($questions as $value) {
            $value->UserAnswer =null;
            $value->save();
         }
        $test =  Test::all();
        return view("home",['tests'=>$test]);
    }
    
}
