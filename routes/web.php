<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\NewUserController;
use App\Http\Controllers\ProductController;
use App\Models\NewUserModel;

Route::get('/', function () {
    $users = NewUserModel::all();
    // return $users;
    return view('welcome',compact('users'));
});

Route::get('/add-form',[FormController::class,'form'])->name('add-form');
Route::post('/store',[FormController::class,'store'])->name('store');

Route::get('/newuser-form',[NewUserController::class,'new'])->name('newuser-form');
Route::post('/newuser',[NewUserController::class,'create'])->name('newuser');

Route::get('/newuser/edit/{id}',[NewUserController::class,'edit'])->name('newuser.edit');
Route::post('/newuser/update/{id}',[NewUserController::class,'update'])->name('newuser.update');

Route::get('/newuser/destroy/{id}',[NewUserController::class,'destroy'])->name('newuser.destroy');


Route::get('/add-product',[ProductController::class,'product'])->name('add-product');
Route::post('/product',[ProductController::class,'addProduct'])->name('product');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('newuser.edit');
Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
