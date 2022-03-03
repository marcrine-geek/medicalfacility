<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AdminController extends Controller
{
    public function patients(){
        $data=user::all();

        return view('admin.patients', compact('data'));
    }

    public function updateuser($id){
        $user=user::find($id);

        return view('admin.updateuser', compact('user'));
    }

    public function edituser(Request $request, $id){

        $user=user::find($id);

        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;

        $user->save();

        return redirect()->back()->with('message', 'updated successfully');
    }

    public function delete($id){

        $user=user::find($id);

        $user->delete();

        return redirect()->back();
    }
}
