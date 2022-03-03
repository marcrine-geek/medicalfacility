<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Health;

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
}
