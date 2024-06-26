<?php

use App\Http\Controllers\MahasiswaController;
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

Route::middleware('auth:sanctum' )->get('/user', function(Request $request){
    return $request->user();
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });
