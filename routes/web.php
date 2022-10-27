<?php

use App\Http\Controllers\PastorController;
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

Route::get('/', [PastorController::class, 'index']);

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/dph', function () {
    return view('dph');
});
