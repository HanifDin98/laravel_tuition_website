<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DashboardConntroller extends Controller
{
    //
    public function list()
    {
        // $packages = Package::orderByDesc('created_at')
        //             ->with('user')
        //             ->get();
        

        $packages = Package::orderByDesc('created_at')
                    ->with('user')
                    ->get();
        return view('dashboard.side.home',[
            'packages' =>$packages
        ]);
    }

    public function create()
    {
        $users =User::all();
        return view ('dashboard.side.addPackage',[
            'users' => $users
        ]);
    }

    public function store()
    {
        $data = request()->validate([//validate before sending data from http to database
            'user_id' =>['integer', Rule::exists('users','id')],
            'title' =>['string'],
            'price' =>['string'],
            'core_limit' =>['string'],
            'science_limit' =>['string'],
            'description' =>['string']
        ]);

        Package::create($data);
        return redirect('/dashHome');
    }

    public function edit($package)
    {
        $package = Package::find($package);

        return view('dashboard.side.editPackage',[
            'package' => $package
        ]);
    }

    public function update(Package $package)
    {
        $data = request()->validate([
            'title' => ['string'],
            'price' =>['string'],
            'core_limit' =>['string'],
            'science_limit' =>['string'],
            'description' =>['string']
        ]);

        $package->update($data);

        return redirect('/dashHome');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect('/dashHome');
    }
}
