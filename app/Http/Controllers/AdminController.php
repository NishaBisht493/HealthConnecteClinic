<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Notification;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function addView(){
        return view('admin.add_doctor');
    }

    // public function upload(Request $request){
    //     $doctor = new doctor;
    //     $request->validate([
    //         'file' => 'required|mimes:png,jpg,jpeg|max:2048' 
    //     ]);
    //     $image = $request->file;
    //     $imageName = time().'.'.$image->getClientOriginalExtension();
    //     $request->file->move('doctorImages', $imageName);
    //     $doctor->file = $imageName;
    //     $doctor->name = $request->name;
    //     $doctor->phone = $request->phone;
    //     $doctor->email = $request->email;
    //     $doctor->speciality = $request->speciality;
    //     $doctor->save();


    //     return view('admin.doctor_form_submit');
    // }

    public function upload(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|max:255',
            'speciality' => 'required|in:cardiologist,dermatologist,neurologist,radiologist,surgeon,others',
            'file' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $doctor = new doctor;

        $image = $request->file('file');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move('doctorImages', $imageName);

        $doctor->file = $imageName;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->email = $request->email;
        $doctor->speciality = $request->speciality;
        $doctor->save();

        return view('admin.doctor_form_submit');
    }


    public function showappointment(){
        $data = appointment::all();
        return view('admin.showappointment', compact('data'));
    }

    public function approved($id){
        $data = appointment::find($id);
        $data->status = "Approved";
        $data->save();
        return redirect()->back();
    }

    public function cancelled($id){
        $data = appointment::find($id);
        $data->status = "Cancelled";
        $data->save();
        return redirect()->back();
    }
    
    public function showdoctor(){
        $data = doctor::all();
        return view('admin.showdoctor', compact('data'));
    }
    
    public function updateDoctor($id){
        $data = doctor::find($id);
        
        return view('admin.updateDoctor', compact('data'));
    }
    
    public function deleteDoctor($id){
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    public function updateData(Request $request, $id){
        $doctor = doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone= $request->phone;
        $doctor->email = $request->email;
        $doctor->speciality= $request->speciality;
        $image = $request->file;
        
        if($image){
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            $request->file->move('doctorImages, $imageName');
            
            $doctor->file = $imageName;
            $doctor->save();
        }
        
        $doctor->save();

        return redirect()->back()->with('message','Doctor Details Updated Successfully');
    }

    public function emailView($id){
        $data = appointment::find($id);
        return view('admin.emailView', compact('data'));
    }

    // public function sendEmail(Request $request, $id){
    //     $data = appointment::find($id);
    //     $details  = [
    //         'greet' => $request->greet,
    //         'body' => $request->body,
    //         'action' => $request->action,
    //         'actionurl' => $request->actionurl,
    //         'end' => $request->end
    //     ];
    //     Noification::send($data, new SendEmailNotification($details));

    //     return redirect()->back();
    // }
}
