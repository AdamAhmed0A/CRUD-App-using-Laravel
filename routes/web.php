<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// Routes
Route::controller(UserController::class)->group(function() {
    Route::get("/", "index");

    Route::get("/users/adduser", "create");
    Route::post("/users", "store");

    Route::get("/users/update/{id}", "edit");
    Route::put("/users/update/{id}", "update");

    Route::get("/users/delete/{id}", "delete");
    
});
