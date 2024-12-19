<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user',[UserController::class,'loadAllUsers']);
Route::get('/user/add',[UserController::class,'AddUserForm']);
Route::post('/user/add',[UserController::class,'AddUser'])->name('AddUser');

Route::get('/edit/{id}',[UserController::class,'EditForm']);
Route::get('/delete/{id}',[UserController::class,'deleteUser']);

Route::post('/edit/user',[UserController::class,'EditUser'])->name('EditUser');

Route::get('/user/search', [UserController::class, 'search'])->name('user.search');

Route::get('/home', function () {
    return view('dashboard');
});
Route::get('/', function () {
    return view('dashboard');
});