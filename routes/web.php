<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportEntryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LguController;
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

    if(Auth::check())
    {
    	return view('admin.home');
    }
    else
    {
    	return view('main.index');
    }
});

Route::get('/lgu-reports', function () {
    return view('main.reports');
});


Route::get('/contact-us', function () {
    return view('main.contact-us');
});

Route::get('/about-us', function () {
    return view('main.about-us');
});

Route::get('/login', function () {
    return view('main.login');
});

Route::get('/register', function () {
    return view('main.register');
});



//Create User
Route::post('/users/create', [UserController::class, 'store']);

//Authenticate Login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Logout User
Route::post('/logout', [UserController::class, 'logout']);


//Admin Report
Route::get('/reports', [AdminController::class, 'reports']);

//Navigate to Upload Report
Route::get('/upload_report', [AdminController::class, 'upload_report']);

//Insert Report
// Route::post('/insert_report', [AdminController::class, 'insert_report']);
Route::post('/insert_report', [ReportEntryController::class, 'insert_report_entry']);


//Navigate to Users
Route::get('/users', [AdminController::class, 'users']);

//Navigate to Create New User
Route::get('/create_user', [AdminController::class, 'create_user']);


//Navigate to Storage
Route::get('/storage', [AdminController::class, 'storage']);

Route::get('/sample', [AdminController::class, 'sample']);
//Navigate to Calendar
Route::get('/calendar', [AdminController::class, 'calendar']);


//View LGU Info
Route::get('/lgu', [AdminController::class, 'lgu']);

//View LGU Info
Route::get('/upload_lgu', [AdminController::class, 'upload_lgu']);


Route::get('/get_lgu', [AdminController::class, 'get_lgu']);
// Route::get('/get_lgu', function (Request $request) {
//     return response($request);
// });


Route::post('/insert_lgu', [LguController::class, 'insert_lgu']);


// Route::get('/lgu-reports/cm', function () {
//     return view('main.cm');
// });
Route::get('/lgu-reports/cm/{province_id}', [AdminController::class, 'view_lgu']);



Route::get('/lgu-profile/cm/{lgu}', [AdminController::class, 'view_profile']);

//Delete Listing
Route::delete('lgu/{lgu}', [AdminController::class, 'destroy'])->middleware('auth');
Route::delete('report/{report}', [AdminController::class, 'destroy'])->middleware('auth');


//View Report
Route::get('/{report}', [AdminController::class, 'view_report']);

