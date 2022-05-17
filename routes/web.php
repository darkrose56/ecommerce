<?php

use App\Http\Controllers\MyController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/about', function () {
//    return view('About');
//});
//Route::get('/service', function () {
//    return view('Service');
//});
//Route::get('/contact', function () {
//    return view('Contact');
//});
//Route::get('/gallery', function () {
//    return view('Gallery');
//});


//form to insert data
Route::get('employee/create',[\App\Http\Controllers\EmployeeController::class,'create'])->name('employee.create');
//route to store data into database
Route::post('employee/save',[\App\Http\Controllers\EmployeeController::class,'store'])->name('employee.store');

//route to list all employee
Route::get('employee',[\App\Http\Controllers\EmployeeController::class,'index'])->name('employee.index');




Route::get('staff/create',[\App\Http\Controllers\StaffController::class,'create'])->name('staff.create');
Route::post('staff/save',[\App\Http\Controllers\StaffController::class,'store'])->name('staff.store');



//Route::get('/me',[\App\Http\Controllers\MyController::class,'getMe']);
//
//Route::get('/print',[\App\Http\Controllers\MyController::class,'printMe']);
//
//Route::get('/home',[\App\Http\Controllers\MyController::class,'homeMe']);
//
//Route::get('/about',[\App\Http\Controllers\MyController::class,'about']);
//
//Route::get('/contact',[\App\Http\Controllers\MyController::class,'contact']);
//
//Route::get('/gallery',[\App\Http\Controllers\MyController::class,'gallery']);
//
//Route::get('/service',[\App\Http\Controllers\MyController::class,'service']);
//

Route::get('hello/{name}',function($name){
    return "hello $name";
});

