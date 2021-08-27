<?php

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
Route::get('/1', function () {
    return view('login');
});

Route::get('assets/user/create', function (){
    return view('admin.user.create');
});

Route::get('assets/user/list', function (){
    return view('admin.user.list');
});

Route::get('/2', function () {
    return view('404');
});
Route::get('/3', function () {
    return view('admin.master.masteradmin');
});
