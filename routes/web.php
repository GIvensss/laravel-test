<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|lara_db
*/

Route::name('user.')->group(function(){
   Route::get('/home', [QuizController::class, 'show'])->middleware('auth')->name('home');

   Route::get('/login', function(){
       return view('hallo');
   })->name('login');

   Route::post('/login', [AuthController::class, 'authenticate']);

   Route::post('/logout');
});
