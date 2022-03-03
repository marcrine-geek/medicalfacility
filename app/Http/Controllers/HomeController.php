<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{

    public function redirect(){
        if (Auth::id()){
            if (Auth::user()->usertype=='0' && Auth::user()->typeofuser=='patient'){
                return view('user.home');
            }
            if  (Auth::user()->usertype=='0' && Auth::user()->typeofuser=='doctor'){
                return view('doctor.home');
            }
            else{
                return view('admin.home');
            }
        }else{
            return view('home');
        }
    }

    public function index(){
//        if (Auth::id()){
//            return redirect('home');
//        }else{
//            return view('user.home');
//        }
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function doctors(){
        return view('doctors');
    }

    public function hospitals(){
        return view('hospitals');
    }

    public function contacts(){
        return view('contacts');
    }
}
