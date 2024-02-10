<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/// showing a specific page from Testcontroller 

Route::controller(UserController::class)->group(function() {
    Route::get("/", "index");

    Route::get("/users/adduser", "create");
    Route::post("/users", "store");

    Route::get("/users/update/{id}", "edit");
    Route::put("/users/update/{id}", "update");

    Route::get("/users/delete/{id}", "delete");
    
});