<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Health;

use App\Models\Treatment;

use App\Models\Condition;

use App\Models\Appointment;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function general_health(){
        return view('doctor.general_health');
    }
    public function health(Request $request){

        $data=new health;

        $data->email = $request->email;
        $data->bloodgroup = $request->bloodgroup;
        $data->bloodpressure = $request->bloodpressure;
        $data->bloodsugar = $request->bloodsugar;
        $data->eyecondition = $request->eyecondition;
        $data->heartcondition = $request->heartcondition;
        $data->cancer = $request->cancer;
        $data->other = $request->other;

        $data->save();

        return redirect()->back();

    }

    public function treatment(){
        return view('doctor.treatment');
    }

    public function patient_treatment(Request $request){
        $data=new treatment;

        $data->hname=$request->hname;
        $data->dname=$request->dname;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->condition=$request->condition;
        $data->diagnosis=$request->diagnosis;
        $data->treatment=$request->treatment;

        $data->save();

        return redirect()->back();

    }

    public function sensitive(){
        return view('doctor.sensitive');
    }

    public function condition(Request $request){

        $data=new condition;

        $data->hname=$request->hname;
        $data->dname=$request->dname;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->condition=$request->condition;
        $data->details=$request->details;

        $data->save();

        return redirect()->back();

    }

    public function appoint(){
        if (Auth::id()){
            if (Auth::user()->typeofuser=='doctor'){
                $doctorname=Auth::user()->name;

                $docappoint=appointment::where('doctorname', $doctorname)->get();

                return view('doctor.appoint', compact('docappoint'));
            }else{
                return redirect()->back();
            }
        }else{
            return view('login');
        }

    }

    public function approve($id){
        $data=appointment::find($id);

        $data->status='Approved';

        $data->save();

        return redirect()->back();
    }
    public function cancel($id){
        $data=appointment::find($id);

        $data->status='Cancelled';

        $data->save();

        return redirect()->back();
    }

//    public function emailview($id){
//        $data=appointment::find($id);
//
//        return view('doctor.email_view', compact('data'));
//    }
//    public function sendmail(Request $request, $id){
//
//        $data=appointment::find($id);
//
//        $details = [
//            'greeting' => $request->greeting,
//            'body' => $request->body,
//            'endpart' => $request->endpart
//        ];
//        Notification::send($data, new SendNotification($details));
//
//        return redirect()->back();
//
//    }
}



























