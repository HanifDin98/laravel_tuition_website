<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use App\Models\About;
use App\Models\Package;
use App\Models\Subject;
use App\Models\Question;
use App\Exports\FormExport;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

// use Maatwebsite\Excel\Excel;

use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\registerAStoreRequest;

class FormController extends Controller
{
    public function list()
    { //    $forms1 = Form::with('packages')->get();
          //  'forms1'=>$forms1

         $forms = Form::with('subjects')->orderByDesc('created_at')->with('package')->get();
        //  $packages = Package::with('form')->get();
       

        return view('register.list',[
            'forms' =>$forms,
          
            // 'packages' =>$packages,
            ]);



    }

    public function edit($form)
    {
    //   $form = Form::withfind($form);
    $form = Form::with('subjects')->orderByDesc('created_at')->with('package')->find($form);

        return view('register.edit',[
            'form' => $form,
            "packages" => Package::all(),
            "subjects" => Subject::all()
        ]);
    }

   

    public function update(Request $request,Form $form)
    {

        $request->validate([
            'name' => ['string'],
            'email' => ['string'],
            'gender' => ['string'],
            'phone_number' => ['string'],
            'ic_number' => ['string'],
            'address' => ['string'],
            'status' => ['string'],
            'package_id' => ['string', Rule::exists('packages', 'id')]
        ]);

        $form->update([
            'name' =>$request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'ic_number' =>$request->ic_number,
            'address' => $request->address,
            'status' => $request->status,
            'package_id' => $request->package_id
        ]);

        if($request->has('subjects')){
            $form->subjects()->sync($request->subjects);
        }



        return redirect('/dashForm');

    }


    public function destroy(Form $form)
    {
        $form->delete();
        $form->subjects()->detach();
        return redirect('/dashForm');
    }

    public function export() 
    {
    return Excel::download(new FormExport, 'ListRegister.xlsx');
    }

    public function exportView() 
    {
        return Excel::download(new FormExport, 'ListRegister.xlsx');
    }

    


}
