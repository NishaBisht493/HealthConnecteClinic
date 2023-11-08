<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype == '0'){
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            }else{
                return view('admin.home');
            }
        }else{
            return redirect()->back();
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('home');
        }else{
            $doctor = doctor::all();
            return view('user.home', compact('doctor'));
        }
    }

    // public function appointment(Request $request){
    //     $data = new Appointment;
    //     // $request->validate([
    //     //     'file' => 'mimes:png,jpg,jpeg,pdf|max:4096' 
    //     // ]);
    //     // $report = $request->prescriptionReport;
    //     // if($report){
    //     //     $fileName = time().'.'.$report->getClientOriginalExtension();
    //     //     $request->prescriptionReport->move('userFiles', $fileName);
    //     //     $data->file = $fileName;
    //     // }

    //     $data->name = $request->name;
    //     $data->age = $request->age;
    //     $data->gender = $request->gender;
    //     $data->phone = $request->phone;
    //     $data->email = $request->email;
    //     $data->doctor = $request->doctor;
    //     $data->appDate = $request->appDate;
    //     $data->appTime = $request->appTime;
    //     $data->message = $request->message;
    //     $data->status = "In Progress";
    //     if(Auth::id()){
    //         $data->user_id = Auth::user()->id;
    //         $doctor = doctor::all();
    //         $data->save();
    //         return view('user.appointment_form_submit', compact('doctor'));
    //     }else{
    //         $doctor = doctor::all();
    //         return view('user.errors', compact('doctor'));
    //     }
    //     $data->save();
    // }

    public function appointment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|numeric',
            'phone' => 'required|string|max:20|regex:/^\+?[0-9]+$/',
            'email' => 'required|email|max:255',
            'appDate' => 'required|date',
            'appTime' => 'required|date_format:H:i',
            'prescriptionReport' => 'file|mimes:pdf,doc,docx|max:2048'
        ]);
        $data = new Appointment;
        $data->name = $request->name;
        $data->age = $request->age;
        $data->gender = $request->gender;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->doctor = $request->doctor;
        $data->appDate = $request->appDate;
        $data->appTime = $request->appTime;
        $data->message = $request->message;
        $data->status = "In Progress";
        
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
            if ($request->hasFile('prescriptionReport')) {
                $report = $request->file('prescriptionReport');
                $fileName = time().'.'.$report->getClientOriginalExtension();
                $report->move('userFiles', $fileName);
                $data->file = $fileName;
            }
            $data->save();
            $doctor = Doctor::all();
            return view('user.appointment_form_submit', compact('doctor'));
        } else {
            $doctor = Doctor::all();
            return view('user.errors', compact('doctor'));
        }
    }


    public function myAppointment(){
        if(Auth::id()){
            $userid = Auth::user()->id;
            $appointment = appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appointment'));
        }else{
            return redirect()->back();
        }
    }

    public function cancel_appointment($id){
        $data = appointment::find($id);

        $data->delete();

        return redirect()->back();
    }
}
