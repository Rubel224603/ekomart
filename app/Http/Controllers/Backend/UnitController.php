<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    //
    public function createUnit(){
        return view('website.backend.admin.unit.create');
    }
    public function storeUnit(Request $request){

       $unit = new Unit();
       $unit->name= $request->name;
       $unit->code= $request->code;
       $unit->status= $request->status;
       $unit->description= $request->description;
       $unit->save();
        toastr()->success("Unit Save Successfully!!");
       return back();

    }
    public function listUnit(){
        $units = Unit::latest()->get();
        return view('website.backend.admin.unit.index',compact('units'));
    }
    public function editUnit($id){
        $unit= Unit::find($id);
        return view('website.backend.admin.unit.edit',compact('unit'));
    }
    public function updateUnit($id,Request $request){
        $unit = Unit::find($id);
        $unit->name = $request->name;
        $unit->code = $request->code;
        $unit->status = $request->status;
        $unit->description = $request->description;
        $unit->save();
        toastr()->success("Unit Save Successfully!!");
        return redirect()->route('unit.list');
    }
     public function deleteUnit($id){
         $unit = Unit::find($id);
         $unit->delete();
         toastr()->warning("Unit deleted !!");
         return back();
    }

}
