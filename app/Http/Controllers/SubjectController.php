<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function list()
    {
        // $packages = Package::orderByDesc('created_at')
        //             ->with('user')
        //             ->get();
        

        $subjects = Subject::orderByDesc('created_at')
                    ->with('user')
                    ->get();
        return view('dashboard.sideSub.list',[
            'subjects' =>$subjects
        ]);
    }

    public function create()
    {
        $users =User::all();
        return view ('dashboard.sideSub.addSubject',[
            'users' => $users
        ]);
    }

    public function store()
    {
        $data = request()->validate([//validate before sending data from http to database
            'user_id' =>['integer', Rule::exists('users','id')],
            'title' =>['string'],
            'type' =>['string']
        ]);

        Subject::create($data);
        return redirect('/dashSubject');
    }

    // public function store1()
    // {
    //     $data = request()->validate([//validate before sending data from http to database
    //         'user_id' =>['integer', Rule::exists('users','id')],
    //         'title' =>['string'],
    //         'type' => ['string']
    //     ]);

    //     Subject::create($data);
    //     return redirect('/dashSubject');
    // }

    public function edit($subject)
    {
        $subject = Subject::find($subject);

        return view('dashboard.sideSub.editSubject',[
            'subject' => $subject
        ]);
    }

    
    public function update(Subject $subject)
    {
        $data = request()->validate([
            'title' => ['string'],
            'type' =>['string']
        ]);

        $subject->update($data);

        return redirect('/dashSubject');
    }

    
    public function destroy(Subject $subject)
    {
        $subject->delete();
        $subject->forms()->detach();
        return redirect('/dashSubject');
    }
}
