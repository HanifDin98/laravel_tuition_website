<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Choose;
use App\Models\Hero;
use App\Models\Package;
use App\Models\Subject;
use App\Models\Question;
use App\Models\Teacher;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function show(){
        return view('Home',[
            "postsx" => Package::all(),
            "postsx2" => Subject::all(),
            "abouts" => About::all(),
            "questions" => Question::all(),
            "teachers" => Teacher::all(),
            "hero" => Hero::all(),
            "choose" => Choose::all(),
            "portfolio" => Portfolio::all()
    
        ]);
        
    }
}
