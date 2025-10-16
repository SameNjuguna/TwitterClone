<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

// MVC - Model View Controller
// Model : handles data and business logic
// View : handles the presentation layer (UI)
// Controller : handles user input and interacts with the model and view

Route::get('/', [DashboardController::class, 'index'] );
