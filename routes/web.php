<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MainController;
Route::get('/index',[MainController::class,'index']);
Route::get('/offer',[MainController::class,'offer']);
Route::get('/aboutus',[MainController::class,'aboutus']);
Route::get('/contactus',[MainController::class,'contactus']);
Route::post('/contactusaction',[MainController::class,'contactusaction']);
Route::get('/insert',[MainController::class,'insert']);
Route::post('/submit',[MainController::class,'submit']);
Route::get('/login',[MainController::class,'login']);
Route::post('/save',[MainController::class,'save']);
Route::get('/displayall',[MainController::class,'displayall']);
Route::get('/displayclient{dc}',[MainController::class,'displayclient']);
Route::get('/delete{del}',[MainController::class,'delete']);
Route::get('/logout',[MainController::class,'logout']);
Route::get('/edit{ep}',[MainController::class,'edit']);
Route::post('/update',[MainController::class,'update']);
