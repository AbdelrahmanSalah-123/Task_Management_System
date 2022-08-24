<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AssignController;
use Illuminate\Support\Facades\Auth;
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
    return view('Auth.login');
});
Auth::routes();
Route::group(['middleware'=>['auth']],function(){


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::Resource('/project', ProjectController::class);
Route::Resource('/task',TaskController::class);

Route::Resource('/employee',EmployeeController::class);
Route::get('/assign',[AssignController::class,'index']);
Route::get('/assign/{id}',[AssignController::class,'create']);
Route::post('/assign/',[AssignController::class,'store']);
Route::get('/changeProgress/{id}',[TaskController::class,'changeProgress']);
Route::get('/show/{id}',[TaskController::class,'show']);
Route::POST('/task/{id}',[TaskController::class,'destroy']);
Route::DELETE('/assign/{id}',[AssignController::class,'destroy']);

Route::get('/404', function () {
    return abort(404);
});



});
