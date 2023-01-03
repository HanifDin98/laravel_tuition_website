<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    //
    public function list()
    {
        $portfolio =Portfolio::all();
        return view('dashboard.sidePortfolio.list',compact('portfolio'));
    }

    public function create(Request $request)
    {   
        return view('dashboard.sidePortfolio.create');
    }

    public function store(Request $request)
    {
        $portfolio = new Portfolio;
        $portfolio->title =$request->input('title');
        $portfolio->description =$request->input('description');
        if($request->hasFile('portfolio_image'))
        {
            $file = $request->file('portfolio_image');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/portfolios/', $filename);
            $portfolio->portfolio_image =$filename;
        }
        $portfolio->save();
       return redirect('/dashPortfolio');

    }

    public function edit($id){
       
        $portfolio = Portfolio::find($id);
        return view('dashboard.sidePortfolio.edit',compact('portfolio'));
        
    }

    public function update(Request $request, $id){
        
        $portfolio = Portfolio::find($id);
        $portfolio->title =$request->input('title');
        $portfolio->description =$request->input('description');
        if($request->hasFile('portfolio_image'))
        {
            $destination = 'uploads/portfolios/'.$portfolio->portfolio_image;
            if(File::exists( $destination)){
                File::delete($destination);
            }

            $file = $request->file('portfolio_image');
            $extention = $file->getClientOriginalName();
            $filename = time().'.'.$extention;
            $file->move('uploads/portfolios/', $filename);
            $portfolio->portfolio_image =$filename;
        }
        $portfolio->update();
        return redirect('/dashPortfolio');
        
        
        // return view('dashboard.sideStudent.create',compact('student'));
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $destination = 'uploads/portfolios/'.$portfolio->portfolio_image;
        if(File::exists( $destination)){
            File::delete($destination);
        }
        $portfolio->delete();
        return redirect('/dashPortfolio');

    }

}
