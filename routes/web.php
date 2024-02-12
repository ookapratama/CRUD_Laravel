<?php

use App\Http\Controllers\ProdukController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProdukController::class, 'index']);
Route::get('/create', [ProdukController::class, 'create']);
Route::post('/store', [ProdukController::class, 'store']);
Route::get('/edit/{id}', [ProdukController::class, 'edit']);
Route::put('/update', [ProdukController::class, 'update']);
Route::get('/destroy/{id}', [ProdukController::class, 'destroy']);
