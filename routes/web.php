<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// tugas laravel 1
/*
Route::group(['prefix' => 'list-menu'], function () {
    Route::get('/', function () {
        return 'Ini adalah halaman yang menampilkan semua menu di Amandemy Cafe.';
    });

    Route::get('/get-all-data', function () {
        return response()->json([
            'info' => 'Data berhasil didapatkan',
            'data' => [
                [
                    'makanan' => 'Kebab',
                    'harga' => 15000
                ],
                [
                    'makanan' => 'Mie Ayam',
                    'harga' => 18000
                ],
                [
                    'makanan' => 'Martabak Mesir',
                    'harga' => 20000
                ]
            ]
        ]);
    });

    Route::get('/{makanan}/{harga}', function ($makanan, $harga) {
        $menu = "Anda memilih makanan $makanan dengan harga $harga";
        return $menu;
    });
});
*/

//  Tugas Laravel 2
/* Route::group(['prefix' => 'amandemy-cafe'], function(){
    Route::get('/', [DashboardController::class,'index'])->name('index');
});
*/

// tugas laravel 3
Route::get('/katalog', [ProdukController::class, 'index'])->name('katalog');
Route::get('/form-produk', [ProdukController::class, 'create'])->name('form-produk');
Route::post('/katalog', [ProdukController::class, 'store'])->name('produk');
