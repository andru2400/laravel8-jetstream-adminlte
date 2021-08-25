<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;

/*
|--------------------------------------------------------------------------
| Routes solo para dasboard (Administrable)
|--------------------------------------------------------------------------
*/

Route::get('home', [HomeController::class, 'index']);