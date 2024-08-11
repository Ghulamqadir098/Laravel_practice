<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::view('/','input_form');


// contact form routes
Route::prefix('contact')->group(function () {
    Route::post('save',[ContactController::class,'contact_save'])->name('contact_save');
    Route::get('list',[ContactController::class,'contact_list'])->name('contact_list');
    Route::get('edit/{id}',[ContactController::class,'contact_edit'])->name('contact_edit');
    Route::put('update/{id}',[ContactController::class,'contact_update'])->name('contact_update');
    Route::delete('delete/{id}',[ContactController::class,'contact_delete'])->name('contact_delete');
});