<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home');

Route::prefix('panel')->group(function() {

    Route::get('/',function(){return view('admin.pages.dashboard');})->name('admin.home');
    Route::get('/hakkimda',function(){return view('admin.pages.hakkimda.index');})->name('admin.hakkimda');

});