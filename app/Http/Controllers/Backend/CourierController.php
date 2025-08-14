<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    //
    public function createCourier(){
        return view('website.backend.admin.courier.create');
    }

    public function storeCourier(Request $request){
       // return $request;
        $courier = new Courier();
        $courier->name= $request->name;
        $courier->email= $request->email;
        $courier->mobile= $request->mobile;
        $courier->address= $request->address;

        if(isset($request->image)){
          $imageName = time().'-courier-.'.$request->image->getClientOriginalExtension();
          $request->image->move('backend/upload/images/courier/',$imageName);
          $courier->image = $imageName;

        }
        $courier->save();
        toastr()->success('Courier created successfully!');
        return back();



    }

    public function listCourier(){
        $couriers = Courier::latest()->get();
        return view('website.backend.admin.courier.index',compact('couriers'));
    }
    public function editCourier($id){
        //return Courier::find($id);
        $courier = Courier::find($id);
        return view('website.backend.admin.courier.edit',compact('courier'));
    }
    public function updateCourier(Request $request,$id){
        $courier = Courier::find($id);
        $courier->name = $request->name;
        $courier->email = $request->email;
        $courier->mobile = $request->mobile;
        $courier->address = $request->address;

        if(isset($request->image)){
            if($courier->image && file_exists('backend/upload/images/courier/'.$courier->image)){
                unlink('backend/upload/images/courier/'.$courier->image);

            }
            $imageName = time().'-courier-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/courier/',$imageName);
            $courier->image = $imageName;
        }
        $courier->save();
        toastr()->success('Courier updated successfully!');
        return redirect()->route('courier.index');



    }

    public function courierDelete($id){
        $courier = Courier::find($id);
        if($courier->image && file_exists('backend/upload/images/courier/'.$courier->image)){
            unlink('backend/upload/images/courier/'.$courier->image);
        }
        $courier->delete();
        toastr()->success('Courier deleted successfully!');
        return back();


    }
}
