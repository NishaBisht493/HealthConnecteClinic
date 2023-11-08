<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class UserController extends Controller
{
    public function bookAppointment(){
        $doctor = doctor::all();
        return view('user.bookAppointment', compact('doctor'));
    }
    
    public function doctorsPage(){
        $doctor = doctor::all();
        return view('user.doctorsPage', compact('doctor'));
    }
}
