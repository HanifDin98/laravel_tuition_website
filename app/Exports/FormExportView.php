<?php

namespace App\Exports;

use App\Models\Form;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FormsExportView implements FromView
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
            'form' => Form::all()
        ]);
    }
}
