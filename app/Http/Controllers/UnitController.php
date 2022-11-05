<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index(){
        $listUnit = Unit::all();

        return view('unit.index', ['units'=>$listUnit]);

    }
    
    public function create(){
        return view('unit.create');
    }
    public function store(Request $request){
        
        $unit = new Unit();
        $unit->nomUnit = $request->input('unitName');
        $unit->company = $request->input('company') ;
        $unit->country = $request->input('country');
        $unit->destination = $request->input('destination') ;
        $unit->activeWell = $request->input('well');
        $unit->haspId = $request->input('haspId');
        $unit->status = $request->input('status');
        $unit->type = $request->input('jobProfile');
        $unit->save();

        return redirect('unit');
        

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }

}
