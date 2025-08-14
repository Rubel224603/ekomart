<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('website.backend.dashboard.index');
    }
    public function userList(){
        $users = User::latest()->get();
        return view('website.backend.user.list',compact('users'));
    }
    public function userEdit($id){
        $user = User::find($id);
        return view('website.backend.user.edit',compact('user'));
    }
    public function userUpdate($id,Request $request){
        //return $request;
        $user           = User::find($id);
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        $user->address  = $request->address;

        //password change...
        if(isset($request->old_password) && isset($request->new_password)){

            if(password_verify($request->old_password, $user->password)) {

                $user->password =  bcrypt($request->new_password);
                //return $user->password;


            }else {
                toastr()->error('Old password did not match');
                return redirect()->back();
            }

        }

        //image change...
        if(isset($request->image)){
            if($user->image && file_exists('backend/upload/images/user/'.$user->image)){
                unlink('backend/upload/images/user/'.$user->image);
            }
            $image = time().'-user-.'.$request->image->getClientOriginalExtension();
            $request->image->move('backend/upload/images/user/',$image);

            //image save in db...
            $user->image = $image;
        }

        $user->save();
        toastr()->success('User updated successfully');
        return redirect()->route('admin.user.list');


    }
    public function userDelete($id){
        $user = User::find($id);
        $user->delete();
        toastr()->warning("User  Deleted!!");
        return back();
    }
}
