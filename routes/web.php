<?php

use App\Http\Controllers\CheffModelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('cheff/add',[CheffModelController::class, 'index'])->name('cheff.add');
Route::post('cheff/add',[CheffModelController::class, 'store']);
Route::get('cheff/show',[CheffModelController::class, 'show'])->name('cheff.show');


Route::get('/user/login',[UserController::class,'index'])->name('user.login');
Route::post('/user/login',[UserController::class,'login']);

Route::get('/user/register',[UserController::class,'register_form'])->name('user.add');
Route::post('/user/register',[UserController::class,'store']);
Route::get('/user/logout',[UserController::class,'logout'])->name('user.logout');




//
