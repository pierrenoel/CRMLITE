<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get("/login",[AuthController::class,"index"])->name("login");
Route::post("/login",[AuthController::class,"login"]);

Route::middleware("auth")->group(function(){
    Route::get('/', function () {
        return view('welcome');
    })->name("dashboard");

    Route::post("/logout",[AuthController::class,"logout"])->name("logout");

});

