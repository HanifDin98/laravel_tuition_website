<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function list()
    {
        

        $profile = User::orderBy('id')
                    ->get();
        return view('dashboard.sideProfile.index',[
            'profiles' =>$profile
        ]);

    }
    public function edit($profile)
    {
        $profile = User::find($profile);

        return view('dashboard.sideProfile.edit',[
            'profile' =>$profile
        ]);
    }

    public function update(User $profile)
    {

        $data = request()->validate([
            'name' => ['string'],
            'email' =>['string']

        ]);

        $profile->update($data);

        return redirect('/dashProfile');
    


    }

}
