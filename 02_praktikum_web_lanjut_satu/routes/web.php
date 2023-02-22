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

Route::get('/', function (){
    echo "Selamat Datang";
});

Route::get('/about', function (){
    echo "NIM : 2141720059 <br>";
    echo "NAMA : Febryan Rizki Hidayatullah";
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman artikel dengan id '.$id;
});
