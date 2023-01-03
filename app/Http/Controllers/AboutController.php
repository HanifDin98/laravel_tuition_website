<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    
    public function list()
    {
        $about = About::with('user')
        ->get();
        return view('dashboard.sideAbout.index',[
        'abouts' =>$about
        ]);
    }

    public function edit($about)
    {
        $about = About::find($about);

        return view('dashboard.sideAbout.editAbout',[
            'about' => $about
        ]);
    }

    public function update(About $about)
    {
        $data = request()->validate([
            'title' => ['string'],
            'discription' =>['string'],
            'mission' =>['string'],
            'vission' =>['string']
        ]);

        $about->update($data);

        return redirect('/dashAbout');
    }
}
