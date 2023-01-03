<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeacherController extends Controller
{
    //
    public function list()
    {
        $teacher =Teacher::all();
        return view('dashboard.sideTeacher.list',compact('teacher'));
    }

    public function create(Request $request)
    {   
        return view('dashboard.sideTeacher.create');
    }

    public function store(Request $request)
    {
        $teacher = new Teacher;
        $teacher->name =$request->input('name');
        $teacher->subject_teach =$request->input('subject_teach');
        if($request->hasFile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/teachers/', $filename);
            $teacher->profile_image =$filename;
        }
        $teacher->save();
       return redirect('/dashTeacher');

    }

    public function edit($id){
       
        $teacher = Teacher::find($id);
        return view('dashboard.sideTeacher.edit',compact('teacher'));
        
    }

    public function update(Request $request, $id){
        
        $teacher = Teacher::find($id);
        $teacher->name =$request->input('name');
        $teacher->subject_teach =$request->input('subject_teach');
        if($request->hasFile('profile_image'))
        {
            $destination = 'uploads/teachers/'.$teacher->profile_image;
            if(File::exists( $destination)){
                File::delete($destination);
            }

            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/teachers/', $filename);
            $teacher->profile_image =$filename;
        }
        $teacher->update();
        return redirect('/dashTeacher');
        
        
        // return view('dashboard.sideStudent.create',compact('student'));
    }

    public function destroy(Teacher $id)
    {
        $id->delete();
        
        return redirect('/dashTeacher');
    }
    

}
