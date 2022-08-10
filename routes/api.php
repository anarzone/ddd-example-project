<?php

use App\Http\Controllers\Users\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Users\UserController;

Route::prefix('auth')->name('auth.')->group(function () {
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth:sanctum')->prefix('users')->name('users.')->group(function () {
    Route::get('company', [UserController::class, 'getCompany'])->name('company');
});

Route::middleware('auth:sanctum')->prefix('company')->name('company.')->group(function () {
    Route::get('partners', [CompanyController::class, 'getPartners'])->name('partners');
});
