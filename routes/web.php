<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\mahasiswa;

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

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/jual', function () {
    return view('satoru.jual');
});

Route::get('/beli', function () {
    return view('satoru.beli');
});

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });


Route::get('/create_pupu',[mahasiswa::class, 'redirectCreatePage']);

Route::post('/post-create-mahasiswa',[mahasiswa::class, 'create_pupu']);