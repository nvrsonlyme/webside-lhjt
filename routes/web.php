<?php

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganikPostController;
use App\Http\Controllers\AnorganikPostController;
use App\Http\Controllers\LapakPostController;
use App\Http\Controllers\PembatasanPostController;
use App\Http\Controllers\TpsPostController;
use App\Http\Controllers\SampahSpesifikPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KotaController;
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

// Login
Route::get('/', function () {
    return view('auth.login',[
        "title" => "Login"
    ]);
})->name('login');
// Laporan
Route::get('/laporan', function(){
    return view('admin.laporan',[
        "title" => "Laporan"
    ]);
});

Auth::routes();
// Home|Dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Logout
Route::get('/logout', [AuthLoginController::class, 'logout']);
// Organik
Route::get('/organik', [OrganikPostController::class, 'index'])->name('organik');
Route::get('/organik/form-organik', [OrganikPostController::class, 'create'])->name('organik.form-organik');
Route::post('/organik/store', [OrganikPostController::class, 'store'])->name('organik.store');
Route::get('/organik/{id}/ubah', [OrganikPostController::class, 'ubah'])->name('organik.ubah');
Route::put('/organik/{id}', [OrganikPostController::class, 'update'])->name('organik.update');
Route::delete('/organik/{id}', [OrganikPostController::class, 'destroy'])->name('organik.destroy');
// Anorganik
Route::get('/anorganik', [AnorganikPostController::class, 'index'])->name('anorganik');
Route::get('/anorganik/form-anorganik', [AnorganikPostController::class, 'create'])->name('anorganik.form-anorganik');
Route::post('/anorganik/store', [AnorganikPostController::class, 'store'])->name('anorganik.store');
Route::get('/anorganik/{id}/ubah', [AnorganikPostController::class, 'ubah'])->name('anorganik.ubah');
Route::put('/anorganik/{id}', [AnorganikPostController::class, 'update'])->name('anorganik.update');
Route::delete('/anorganik/{id}', [AnorganikPostController::class, 'destroy'])->name('anorganik.destroy');
// Lapak
Route::get('/lapak', [LapakPostController::class, 'index'])->name('lapak');
Route::get('/lapak/form-lapak', [LapakPostController::class, 'create'])->name('lapak.form-lapak');
Route::post('/lapak/store', [LapakPostController::class, 'store'])->name('lapak.store');
Route::get('/lapak/{id}/ubah', [LapakPostController::class, 'ubah'])->name('lapak.ubah');
Route::put('/lapak/{id}', [LapakPostController::class, 'update'])->name('lapak.update');
Route::delete('/lapak/{id}', [LapakPostController::class, 'destroy'])->name('lapak.destroy');
// Pembatasan
Route::get('/pembatasan', [PembatasanPostController::class, 'index'])->name('pembatasan');
Route::get('/pembatasan/form-pembatasan', [PembatasanPostController::class, 'create'])->name('pembatasan.form-pembatasan');
Route::post('/pembatasan/store', [PembatasanPostController::class, 'store'])->name('pembatasan.store');
// TPS
Route::get('/data-tps', [TpsPostController::class, 'index'])->name('data-tps');
Route::get('/data-tps/form-tps', [TpsPostController::class, 'create'])->name('data-tps.form-tps');
Route::post('/data-tps/store', [TpsPostController::class, 'store'])->name('data-tps.store');
// Sampah Spesifik
Route::get('/sampah-spesifik', [SampahSpesifikPostController::class, 'index'])->name('sampah-spesifik');
Route::get('/sampah-spesifik/form-sampah-spesifik', [SampahSpesifikPostController::class, 'create'])->name('sampah-spesifik.form-sampah-spesifik');
Route::post('/sampah-spesifik/store', [SampahSpesifikPostController::class, 'store'])->name('sampah-spesifik.store');
// Route Fast
Route::get('/form-organik', [KotaController::class, 'organik']);
Route::get('/form-anorganik', [KotaController::class, 'anorganik']);
Route::get('/form-lapak', [KotaController::class, 'lapak']);
Route::get('/form-tps', [KotaController::class, 'tps']);
Route::get('/form-sampah-spesifik', function(){return view('admin.form-sampah-spesifik',["title" => "Sampah Spesifik"]);});
Route::post('api/fetch-kecamatan', [KotaController::class, 'fetchKecamatan']);
Route::post('api/fetch-kelurahan', [KotaController::class, 'fetchKelurahan']);


