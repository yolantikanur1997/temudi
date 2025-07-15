<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MasterProductController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;


Route::get('login',[AuthController::class,'loginView'])->name('login');
Route::post('login_submit',[AuthController::class,'login'])->name('login_submit');

Route::middleware(['auth'])->group(function () {

  

    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('setting/organization',[OrganizationController::class,'index']);
    Route::get('setting/organization/{organization}/edit',[OrganizationController::class,'edit']);
    Route::put('setting/organization/{organization}', [OrganizationController::class, 'update'])->name('organization.update');
    Route::post('setting/organization/schedule/{organization}', [ScheduleController::class, 'store'])->name('organization.schedule.store');


    Route::get('product/category',[MasterProductController::class,'index']);
    Route::post('product/category/store',[MasterProductController::class,'store']);
    Route::post('product/category/update',[MasterProductController::class,'update']);

    Route::get('product', [ProductController::class, 'index']);
    Route::get('product/create', [ProductController::class, 'create']);
    Route::post('product/store', [ProductController::class, 'store']);
    Route::get('product/{product}/edit', [ProductController::class, 'edit']);
    Route::post('product/{product}', [ProductController::class, 'update']);

    Route::get('customer', [CustomerController::class, 'index']);
    Route::get('customer/create', [CustomerController::class, 'create']);
    Route::post('customer/store', [CustomerController::class, 'store']);
    Route::get('customer/{customer}/edit', [CustomerController::class, 'edit']);
    Route::post('customer/{customer}', [CustomerController::class, 'update']);

    Route::post('logout',[AuthController::class,'logout'])->name('logout');
});
