<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\feedbackController;
<<<<<<< HEAD
use App\Http\Controllers\MyController;
=======
use App\Http\Controllers\HighchartController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\thongkeController;
use App\Http\Controllers\ValidateController;
>>>>>>> 83e0c695002e1949d6ffc75ec94c0467db85e1fc
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
<<<<<<< HEAD

=======
Route::get('/', function (){
    return view('welcome');
});
>>>>>>> 83e0c695002e1949d6ffc75ec94c0467db85e1fc

Route::get('assets/user/create', function (){
    return view('admin.user.create');
});

Route::get('assets/user/list', function (){
    return view('admin.user.list');
});

Route::get('assets/list/list', function (){
    return view('doctor.list.list');
<<<<<<< HEAD
});

Route::get('assets/chuyenmon/create', function (){
    return view('admin.chuyenmon.create');
});

=======
});

Route::get('assets/chuyenmon/create', function (){
    return view('admin.chuyenmon.create');
});

>>>>>>> 83e0c695002e1949d6ffc75ec94c0467db85e1fc
Route::get('assets/chuyenmon/list', function (){
    return view('admin.chuyenmon.list');
});

Route::get('assets/user/edit', function (){
    return view('admin.user.edit');
});

<<<<<<< HEAD
=======
Route::get('assets/thongke/list', function (){
    return view('admin.thongke.list');
});

>>>>>>> 83e0c695002e1949d6ffc75ec94c0467db85e1fc
// chuyên môn

Route::get('assets/chuyenmon/list',[MyController::class,'getAll1']);

Route::POST('assets/chuyenmon/create',[MyController::class,'insertProcess1']);
<<<<<<< HEAD

// Route::get('/edit/{id_chuyenmon}',[MyController::class,'updateChuyenmon1']);
=======
    //update chuyên môn
Route::get('/editChuyenmon/{id_chuyenmon}',[MyController::class,'getChuyenmon112']);

Route::post('/editChuyenmon/{id_chuyenmon}',[MyController::class,'updateChuyenmon1']);


>>>>>>> 83e0c695002e1949d6ffc75ec94c0467db85e1fc

// admin

Route::get('assets/user/list',[MyController::class,'getAll']);

Route::POST('assets/user/create',[MyController::class,'insertProcess']);

Route::get('/edit/{id_doctor}',[MyController::class,'getDoctor']);

Route::post('/edit/{id_doctor}',[MyController::class,'updateDoctor']);

Route::get('/delete/{id_doctor}',[MyController::class,'deleteDoctor']);

Route::get('assets/user/create',[MyController::class,'getChuyenmon']);

Route::get('assets/user/edit',[MyController::class,'getchuyenmon11']);

// cuộc hẹn

Route::get('assets/cuochen/list',[DoctorController::class,'getAllAppointment']);

Route::get('/approve/{id}',[DoctorController::class,'Approved']);

// doctor

Route::get('assets/list/list',[DoctorController::class,'getAllDoctor']);

Route::get('/complete/{id}',[DoctorController::class,'Completed']);

// Phản hồi

Route::get('assets/feedback/list',[feedbackController::class,'getAllFeedback']);

Route::get('assets/doctor/feedback/list',[feedbackController::class,'DoctorFeedback']);
    //doctor
Route::get('/edit1/{id_phanhoi}',[feedbackController::class,'getFeedback']);

Route::post('/edit1/{id_phanhoi}',[feedbackController::class,'updateFeedback']);
    //admin
<<<<<<< HEAD
// Route::get('/edit2/{id_phanhoi}',[feedbackController::class,'getFeedback2']);

// Route::post('/edit2/{id_phanhoi}',[feedbackController::class,'updateFeedback2']);
=======
Route::get('/edit2/{id_phanhoi}',[feedbackController::class,'getFeedback2']);

Route::post('/edit2/{id_phanhoi}',[feedbackController::class,'updateFeedback2']);

//thống kê
Route::get('assets/thongke/list',[thongkeController::class,'thongke']);
    //chart
// Route::get('assets/thongke/list', [thongkeController::class, 'index']);
//Validate
// Route::post('assets/user/create', [ValidateController::class, 'UserForm']);
>>>>>>> 83e0c695002e1949d6ffc75ec94c0467db85e1fc
