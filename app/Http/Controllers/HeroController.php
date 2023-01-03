<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    //
    public function list()
    {
        $hero =Hero::all();
        return view('dashboard.sideHero.list',compact('hero'));

    }

    public function create(Request $request)
    {   
        return view('dashboard.sideHero.create');
    }

    public function store()
    {
        $data = request()->validate([//validate before sending data from http to database
            'Title' =>['string'],
            'description_1' =>['string'],
            'description_2' =>['string']
        ]);

        Hero::create($data);
        return redirect('/dashHero');
    }

    public function edit($id)
    {
        $id = Hero::find($id);

        return view('dashboard.sideHero.edit',[
            'hero' => $id
        ]);
    }


    public function update(Hero $id){
        $data = request()->validate([
            'Title' =>['string'],
            'description_1' =>['string'],
            'description_2' =>['string']
        ]);

        $id->update($data);

        return redirect('/dashHero');
    }

    public function destroy(Hero $id)
    {
        $id->delete();
        
        return redirect('/dashHero');
    }

}
