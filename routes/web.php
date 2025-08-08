<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

Route::get('/students', [SiswaController::class, 'index']);
Route::get('/students/{id}', [SiswaController::class, 'show']);
Route::get('/siswa/{username}', [SiswaController::class, 'show']);


// Route::name('students.')->prefix('students')->group(function(){
//     Route::get("/", [SiswaController::class, 'index'])->name('index');
    // Route::get(uri: '/', action: [siswacontroller::class, 'index'])->name(name: 'index');
// 
    // Route::get(uri: '/{id}', action: [siswacontroller::class, 'show'])->name(name:'show');

