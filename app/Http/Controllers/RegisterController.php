<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Package;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Requests\registerAStoreRequest;

class RegisterController extends Controller
{
    //
    public function list()
    {
    //   $forms = form::orderByDesc('created_at')->get();
    //   return view('register.list',[
    //     'forms' =>$forms
    // ]);
    }

    public function create0($id)
    {
        // $subjects = Subject::all();
        // return view('register.index',compact('subjects'));
        $id = Package::find($id);
        return view('register.indeZ',[
            "packages" => $id,
            "subjects" => Subject::all()

        ]);
    }

    public function create()
    {
        // $subjects = Subject::all();
        // return view('register.index',compact('subjects'));

        return view('register.index',[
            "packages" => Package::all(),
            "subjects" => Subject::all()

        ]);
    }

    public function create2()
    {
        // $subjects = Subject::all();
        // return view('register.index',compact('subjects'));

        return view('register.index2',[
            "packages" => Package::all(),
            "subjects" => Subject::all()

        ]);
    }

    public function create3()
    {
        // $subjects = Subject::all();
        // return view('register.index',compact('subjects'));

        return view('register.index3',[
            "packages" => Package::all(),
            "subjects" => Subject::all()

        ]);
    }

    public function store(registerAStoreRequest $request)
    {
        $form = Form::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'phone_number'=>$request->phone_number,
            'ic_number'=>$request->ic_number,
            'address'=>$request->address,
            'package_id'=>$request->package_id,
        ]);



        if($request->has('subjects1')){
            $form->subjects()->attach($request->subjects1);//kena sama ngan blade nama subjects tu
        }
        
        if($request->has('subjects2')){
            $form->subjects()->attach($request->subjects2);
        }

        if($request->has('subjects3')){
            $form->subjects()->attach($request->subjects3);//kena sama ngan blade nama subjects tu
        }
        
        if($request->has('subjects4')){
            $form->subjects()->attach($request->subjects4);//kena sama ngan blade nama subjects tu
        }

        if($request->has('subjectz1')){
            $form->subjects()->attach($request->subjectz1);
        }

        if($request->has('subjectz2')){
            $form->subjects()->attach($request->subjectz2);
        }

        if($request->has('subjectz3')){
            $form->subjects()->attach($request->subjectz3);
        }

        
        // if($request->has('subjects5')){
        //     $form->subjects()->attach($request->subjects5);
        // }

        
        // if($request->has('subjects6')){
        //     $form->subjects()->attach($request->subjects6);
        // }

        
        // if($request->has('subjects7')){
        //     $form->subjects()->attach($request->subjects7);
        // }



       



        return redirect('/');
    }
}
