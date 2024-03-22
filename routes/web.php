<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenggunaTerdaftarController;

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
    return view('welcome');
});
Route::get('/lokasi', function () {
    return view('lokasi');
});
Route::get('/balita', function () {
    return view('balita');
});
Route::get('/batita', function () {
    return view('batita');
});
Route::get('/bantuan', function () {
    return view('bantuan');
});

Route::get('/', [AdminController::class, 'artikelPublik'])->name('artikel-publik');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    //    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/kelola-artikel', [AdminController::class, 'kelolaArtikel'])->name('admin.kelola-artikel');
    Route::get('/admin/tambah-artikel', [AdminController::class, 'tambahArtikelForm'])->name('admin.tambah-artikel.form');
    Route::post('/admin/tambah-artikel', [AdminController::class, 'tambahArtikel'])->name('admin.tambah-artikel');
    Route::get('/admin/edit-artikel/{id}', [AdminController::class, 'editArtikel'])->name('admin.edit-artikel');
    Route::put('/admin/update-artikel/{id}', [AdminController::class, 'updateArtikel'])->name('admin.update-artikel');
    Route::delete('/admin/hapus-artikel/{id}', [AdminController::class, 'hapusArtikel'])->name('admin.hapus-artikel');
    Route::get('/admin/kelola-resep', [AdminController::class, 'kelolaResep'])->name('admin.kelola-resep');
    Route::get('/admin/lihat-hasil-status-gizi', [AdminController::class, 'lihatHasilStatusGizi'])->name('admin.lihat-hasil-status-gizi');
    Route::get('/admin/lihat-hasil-berat', [AdminController::class, 'lihatHasilBeratBadan'])->name('admin.lihat-hasil-berat');
    Route::get('/admin/lihat-feedback', [AdminController::class, 'lihatFeedback'])->name('admin.lihat-feedback');
    Route::get('/admin/beri-resep', [AdminController::class, 'beriResepForm'])->name('admin.beri-resep-form');
    Route::post('/admin/beri-resep', [AdminController::class, 'beriResep'])->name('admin.beri-resep');
    Route::get('/admin/daftar-resep', [AdminController::class, 'daftarResep'])->name('admin.daftar-resep');
});

Route::middleware(['auth', 'role:pengguna terdaftar'])->group(function () {
    //    Route::get('/pengguna-terdaftar', [PenggunaTerdaftarController::class, 'index'])->name('penggunaterdaftar.index');
    Route::get('/pengguna-terdaftar/cek-status-gizi', [PenggunaTerdaftarController::class, 'cekStatusGizi'])->name('cek-status-gizi');
    Route::post('/pengguna-terdaftar/hitung-status-gizi', [PenggunaTerdaftarController::class, 'hitungStatusGizi'])->name('hitung-status-gizi');
    Route::get('/pengguna-terdaftar/riwayat-status-gizi', [PenggunaTerdaftarController::class, 'riwayatStatusGizi'])->name('riwayat-status-gizi');
    Route::get('/pengguna-terdaftar/cek-berat-badan-ideal', [PenggunaTerdaftarController::class, 'cekBeratBadanIdeal'])->name('cekBeratBadanIdeal');
    Route::post('/pengguna-terdaftar/hasil-berat-badan', [PenggunaTerdaftarController::class, 'hitungBeratBadanIdeal'])->name('hasil');
    Route::get('/pengguna-terdaftar/riwayat-berat-badan', [PenggunaTerdaftarController::class, 'riwayatberatbadan'])->name('riwayatberatbadan');
    Route::get('/pengguna-terdaftar/lihat-resep', [PenggunaTerdaftarController::class, 'lihatResep'])->name('lihat-resep');
    Route::get('/pengguna-terdaftar/kirim-feedback', [PenggunaTerdaftarController::class, 'kirimFeedbackForm'])->name('kirim-feedback-form');
    Route::post('/pengguna-terdaftar/kirim-feedback', [PenggunaTerdaftarController::class, 'kirimFeedback'])->name('kirim-feedback');
});

//Route::middleware(['auth', 'role:pengguna tidak terdaftar'])->group(function () {
//    Route::get('/pengguna-tidak-terdaftar', 'PenggunaTidakTerdaftarController@index')->name('pengguna-tidak-terdaftar.dashboard');
//   Route::get('/pengguna-tidak-terdaftar/menu-tidak-tersedia', 'PenggunaTidakTerdaftarController@menuTidakTersedia')->name('pengguna-tidak-terdaftar.menu-tidak-tersedia');
//});


require __DIR__ . '/auth.php';
