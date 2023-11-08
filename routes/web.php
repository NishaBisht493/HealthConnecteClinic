<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them willa
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view', [AdminController::class, 'addView']);

Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::get('/consult', [UserController::class, 'bookAppointment']);

Route::post('/appointment', [HomeController::class, 'appointment']);

Route::get('/myAppointment', [HomeController::class, 'myAppointment']);

Route::get('/cancel_appointment/{id}', [HomeController::class, 'cancel_appointment']);

Route::get('/showappointment', [AdminController::class, 'showappointment']);

Route::get('/approved/{id}', [AdminController::class, 'approved']);

Route::get('/cancelled/{id}', [AdminController::class, 'cancelled']);

Route::get('/showdoctor', [AdminController::class, 'showdoctor']);

Route::get('/updateDoctor/{id}', [AdminController::class, 'updateDoctor']);

Route::get('/deleteDoctor/{id}', [AdminController::class, 'deleteDoctor']);

Route::post('/updateData/{id}', [AdminController::class, 'updateData']);

Route::get('/emailView/{id}', [AdminController::class, 'emailView']);

// Route::post('/sendEmail/{id}', [AdminController::class, 'sendEmail']);

Route::get('/about',function(){
    return view('user.about');
});
Route::get('/ourNews',function(){
    return view('user.ourNews');
});
Route::get('/contactus',function(){
    return view('user.contactus');
});


Route::get('/doctorsPage', [UserController::class, 'doctorsPage']);