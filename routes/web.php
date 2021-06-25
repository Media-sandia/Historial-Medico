<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Auth\LoginController;


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

Route::get('/', [LoginController::class,'ShowLoginForm'])->name('showlogin');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('logout',[LoginController::class,'logout'])->name('logout');


Route::get('/index',[FormController::class,'NewRegister'])->name('index');
Route::get('/paciente',[FormController::class,'Paciente'])->name('paciente');

Route::post('/store',[FormController::class,'store'])->name('store');
