<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    //

    public function editPassword($profile)
    {
        $profile = User::find($profile);

        return view('dashboard.sideProfile.editPassword',[
            'profile' =>$profile
        ]);

        // return view('dashboard.sideProfile.editPassword');
    }

    public function updatePassword(Request $request)
    {
        
    }
}
