<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function users(){
        if (Auth::id()){
            $data=user::all();

            return view('admin.users', compact('data'));

        }else{
            return view('login');
        }


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

        return redirect()->back();
    }

    public function delete($id){

        $user=user::find($id);

        $user->delete();

        return redirect()->back();
    }
    public function add_doctor(){
        return view('admin.add_doctor');
    }

    public function add_doc(Request $request){
        $doctor=new doctor;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->email=$request->email;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;

        $doctor->save();

        return redirect()->back();
    }
}


















