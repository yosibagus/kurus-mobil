<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index(){
        $mobil = Mobil::all();
        return view('mobil.index',compact(['mobil']));
    }

    public function create() 
    {
        return view('mobil.create');    
    }
    public function store(Request $request)  
    {
        //dd($request->all());
        //dd($request->except(['_token','submit']));
        Mobil::create($request->except(['_token','submit']));
        return redirect('/mobil');
        //Mobil::create($request->all());
    }
    public function edit($id) 
    {
        
        $mobil = Mobil::find($id);
        //dd($mobil);
        return view('mobil.edit',compact(['mobil']));     
    }
    public function update($id, Request $request)
    {
        $mobil = Mobil::find($id);
        $mobil->update($request->except(['_token','submit']));
        return redirect('/mobil');
    }
    public function destroy($id) 
    {
        $mobil = Mobil::find($id);
        $mobil->delete();
        return redirect('/mobil');

    }
}
