<?php

use App\Models\TableData;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;

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

Route::get('/', function () {
    return view('landing');
});

// Login

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);




Route::middleware(['auth', 'useronly'])->group(function () {
    Route::get('/table', [DataController::class, 'showing'])->name('table');


Route::get('/form', function () {
    return view('form');
});


// Rute untuk Upload Data
Route::get('/form', [DataController::class, 'add']);
Route::post('/form', [DataController::class, 'store']);

Route::delete('/table/{id}', [DataController::class, 'destroy'])->name('data.destroy');


Route::get('/form-update/{id}', [DataController::class, 'update'])->name('update');
Route::post('/form-update/{id}', [DataController::class, 'updated'])->name('updated');
});
