<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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

/* HOME */
Route::get('/', [HomeController::class, 'login'])->middleware("isLogin")->name("login");
Route::post('/login', [HomeController::class, 'authenticate'])->name("login.proses");
Route::get('/logout', [HomeController::class, 'logout'])->name("logout");
Route::get('/forbidden', [HomeController::class, 'forbidden'])->name("forbidden");


// Yang Sudah Login Admin
Route::group(["middleware" => ["isAdminOrUser"]], function(){
    Route::get('/dashboard',[DashboardController::class, 'index']);
});

// Yang Sudah Login Admin
Route::group(["middleware" => ["isAdmin"]], function(){
    /* Dashboard Admin */
    Route::resource('mahasiswa', MahasiswaController::class);
});


