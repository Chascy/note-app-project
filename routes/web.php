<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;

//Authentication Controller

Route::middleware('auth')->group(function (){
    Route::view('/', 'home')->name('home');

    Route::get('/', [NoteController::class, 'showAllNotes'])->name('showNotes');

    //Note Controller
    Route::get('/create', [NoteController::class, 'create'])->name('create');
    Route::post('/create', [NoteController::class, 'createPost'])->name('create.post');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

