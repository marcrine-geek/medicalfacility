<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Appointment;

use App\Models\Health;

use App\Models\Treatment;

use App\Models\Condition;

use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function myhealth(){

        if (Auth::id()){
            $useremail=Auth::user()->email;

            $myhealth=health::where('email', $useremail)->get();

            return view('user.myhealth', compact('myhealth'));
        }else{
            return view('login');
        }


    }

    public function medical_history(){
        if (Auth::id()){
            $useremail=Auth::user()->email;

            $medical_history=treatment::where('email', $useremail)->get();

            return view('user.medical_history', compact('medical_history'));
        }else{
            return view('login');
        }

    }

    public function sensitive_condition(){
        if (Auth::id()){
            $useremail=Auth::user()->email;

            $mycondition=condition::where('email', $useremail)->get();

            return view('user.sensitive_condition', compact('mycondition'));
        }else{
            return view('login');
        }
    }

    public function book_appointments(){
        return view('user.book_appointments');
    }

    public function ask_doctor(){
        return view('user.ask_doctor');
    }

    public function comments(){
        return view('user.comments');
    }

    public function appointment(Request $request){

        $data=new appointment;

        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->email=$request->email;
        $data->doctorname=$request->doctorname;
        $data->date=$request->date;
        $data->message=$request->message;

        $data->save();

        return redirect()->back()->with('message', 'appointment request sent successfully');

    }
}
