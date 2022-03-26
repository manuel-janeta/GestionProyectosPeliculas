<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\PerfilController;
use App\Models\Perfil;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/peliculas', [PeliculaController::class, 'index'])->name('peliculas.index');
Route::get('/peliculas/create',[PeliculaController::class, 'create']) ->name('peliculas.create');
Route::post('/peliculas',[PeliculaController::class, 'store']) ->name('peliculas.store');
Route::get('/peliculas/{pelicula}',[PeliculaController::class, 'show']) ->name('peliculas.show');
Route::get('/peliculas/{pelicula}/edit',[PeliculaController::class, 'edit']) ->name('peliculas.edit');
Route::put('/peliculas/{pelicula}',[PeliculaController::class, 'update']) ->name('peliculas.update');
Route::delete('/peliculas/{pelicula}',[PeliculaController::class, 'destroy']) ->name('peliculas.destroy');
Auth::routes();


//Perfiles
Route::get('/perfiles/{perfil}',[PerfilController::class, 'show']) ->name('perfiles.show');
Route::get('/perfiles/{perfil}/edit',[PerfilController::class, 'edit']) ->name('perfiles.edit');
Route::put('/perfiles/{perfil}',[PerfilController::class, 'update']) ->name('perfiles.update');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
