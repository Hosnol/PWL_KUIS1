<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Test Koneksi Database
Route::get('/test-koneksi-database', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});

//Pemanggilan controller
Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/post-details', [HomeController::class, 'post']);
Route::get('/contact-us', [HomeController::class, 'contact']);
Route::get('/daftar-barang', [HomeController::class, 'barang']);
Route::get('/daftar-pelanggan', [HomeController::class, 'pelanggan']);
Route::get('/daftar-pegawai', [HomeController::class, 'pegawai']);
Route::get('/daftar-supplier', [HomeController::class, 'supplier']);