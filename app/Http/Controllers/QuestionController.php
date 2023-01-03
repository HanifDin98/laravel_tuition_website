<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\About;
use App\Models\Question;
use App\Exports\FormExport;
use Illuminate\Http\Request;
// use Maatwebsite\Excel\Excel;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;

class QuestionController extends Controller
{
    //
    public function list()
    {
        

        $questions = Question::orderBy('id')
                    // ->with('user')
                    ->get();
        return view('dashboard.sideQuestion.index',[
            'questions' =>$questions
        ]);

    }

    public function create()
    {
        $users =User::all();
        return view ('dashboard.sideQuestion.create',[
            'users' => $users
        ]);
    }

    public function store()
    {
        $data = request()->validate([//validate before sending data from http to database
            'user_id' =>['integer', Rule::exists('users','id')],
            'Question' =>['string'],
            'Answer' =>['string']
        ]);

        Question::create($data);
        return redirect('/dashQuestion');
    }

    public function edit($question)
    {
        $question = Question::find($question);

        return view('dashboard.sideQuestion.EditQuestion',[
            'question' =>$question
        ]);
    }

    public function update(Question $question)
    {

        $data = request()->validate([
            'Question' => ['string'],
            'Answer' =>['string']

        ]);

        $question->update($data);

        return redirect('/dashQuestion');
    


    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect('/dashQuestion');
    }

    public function export() 
    {
    return Excel::download(new FormExport, 'invoices.xlsx');
    }

    // public function export(){
    //     return Excel::download(new FormExport, 'invoices.xlsx');
    // }


}
