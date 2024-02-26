<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/',[ProductController::class,'index'])->name('product.add');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('/product/manage',[ProductController::class,'manage'])->name('product.manage');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update',[ProductController::class,'update'])->name('product.update');
Route::post('/product/delete',[ProductController::class,'delete'])->name('product.delete');
