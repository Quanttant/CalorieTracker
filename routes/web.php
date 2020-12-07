<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalorieController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return Inertia\Inertia::render('Dashboard', ["user" => Auth::user()]);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/calories', function () {
    return Inertia\Inertia::render('Calories', ["user" => Auth::user()]);
})->name('calories');


Route::middleware('auth:sanctum')->get('/user_calories',[CalorieController::class, 'calories']);
Route::middleware('auth:sanctum')->get('/user_bmh',[CalorieController::class, 'BMH']);
