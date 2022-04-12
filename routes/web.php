<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index'])->name('home');

Route::prefix('panel')->group(function() {

    Route::get('/',function(){return view('admin.pages.dashboard');})->name('admin.home');
    Route::get('/hakkimda',[AboutController::class,'index'])->name('about.index');

    Route::post('/hakkimda',[AboutController::class,'update'])->name('about.update');

});