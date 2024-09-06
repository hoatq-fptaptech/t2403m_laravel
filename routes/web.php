<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WebController::class,"home"]);
Route::get("/about-us",[WebController::class,"about"]);