<?php

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
    return view('welcome');
});

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
