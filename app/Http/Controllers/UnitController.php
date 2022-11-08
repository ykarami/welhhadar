<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Http\Requests\unitRequest;
class UnitController extends Controller
{
    public function index(){
        $listUnit = Unit::all();

        return view('unit.index', ['units'=>$listUnit]);

    }
    
    public function create(){
        return view('unit.create');
    }
    public function store(unitRequest $request){
        
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

        session()->flash('success', 'Unit successefuly created !');

        return redirect('unit');
        

    }
    public function edit($id){
        $unit = Unit::find($id);

        return view('unit.edit', ['unit'=>$unit]);
    }
    public function update(unitRequest $request, $id){
        $unit = Unit::find($id);
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
    public function destroy(Request $request, $id){
        $unit = Unit::find($id);

        $unit->delete();

        return redirect('unit');
        

    }

}
