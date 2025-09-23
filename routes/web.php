<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\ColorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\BreederController;
use App\Http\Controllers\SpecimensController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', [UsuarioController::class, 'profile'])->name('profile');

    Route::resource('/colores', ColorController::class)->names('colores');
    Route::resource('/categorias', CategoryController::class)->names('categorias');
    Route::resource('/direcciones', AddressController::class)->names('direcciones');
    Route::resource('/criadores', BreederController::class)->names('criadores');
    Route::resource('/ejemplares', SpecimensController::class)->names('ejemplares');

});