<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UmkmController;
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

Route::get('/', function () {
    return view('beranda');
});
Route::get('/tentang-kami', [AboutController::class, 'show'])->name('about');
Route::get('/paket-wisata', function () {
    return view('paket');
});




Route::get('/register', function () {
    return view('admin.pages.auth.register');
})->name('register');
Route::get('/list-umkm', [UmkmController::class, 'show'])->name('umkm');
Route::get('/blog', function () {
    return view('blog');
});
// Auth
Route::get('login', [AuthController::class, 'indexPage'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('register', [AuthController::class, 'regPage'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('/dashboard', [DashboardController::class, 'indexPage']);

// // Route ke Admin
// Route::get('/admin', function () {
//     return view('admin.dashboard.index');
// })->middleware('admin')->name('admin.dashboard.index');
