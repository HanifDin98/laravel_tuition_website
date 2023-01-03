<?php

namespace App\Http\Controllers;

use App\Models\Choose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ChooseController extends Controller
{
    //
    public function list()
    {
        $choose =Choose::all();
        return view('dashboard.sideChoose.list',compact('choose'));
    }

    public function create(Request $request)
    {   
        return view('dashboard.sideChoose.create');
    }

    public function store(Request $request)
    {

        $choose = new Choose();
        $choose->point =$request->input('point');
        $choose->description =$request->input('description');
        if($request->hasFile('point_image'))
        {
            $file = $request->file('point_image');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/chooses/', $filename);
            $choose->point_image =$filename;
        }
        $choose->save();
       return redirect('/dashChoose');

    }

    public function edit($id){
       
        $choose = Choose::find($id);
        return view('dashboard.sideChoose.edit',compact('choose'));
        
    }


    public function update(Request $request, $id){
        
        $choose = Choose::find($id);
        $choose->point =$request->input('point');
        $choose->description =$request->input('description');
        if($request->hasFile('point_image'))
        {
            $destination = 'uploads/chooses/'.$choose->point_image;
            if(File::exists( $destination)){
                File::delete($destination);
            }

            $file = $request->file('point_image');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/chooses/', $filename);
            $choose->point_image =$filename;
        }
        $choose->update();
        return redirect('/dashChoose');
        
        
        // return view('dashboard.sideStudent.create',compact('student'));
    }

    public function destroy($id)
    {
        $choose = Choose::find($id);
        $destination = 'uploads/chooses/'.$choose->point_image;
        if(File::exists( $destination)){
            File::delete($destination);
        }
        $choose->delete();
        return redirect('/dashChoose');

    }


}
