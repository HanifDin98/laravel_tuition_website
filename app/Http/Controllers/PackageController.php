<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Subject;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function index()
    {
        $title = '';

        return view('package',[
            "title" => "All Package" . $title ,
            "postsx" => Package::all(),
            "postsx2" => Subject::all()

        ]);
        
    }

    public function index2()
    {

        return view('/',[
            "postsx" => Package::all(),
            "postsx2" => Subject::all()

        ]);
        
    }


}
