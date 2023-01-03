<?php

namespace App\Exports;

use App\Models\Question;
use App\Models\Form;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FormExport implements FromView
{
    // /**
    // * @return \Illuminate\Support\
    // */
    public function view(): View
    {
        // return view(view: 'form.table',[
        //     'form' =>Form::all()
        // ]);
        // $form =Form::all();
        return view('register.table',[
            'forms' => Form::all()
        ]);
    }
}

// class FormExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {

    
//         return Form::all();

        

//     }


// }
