<?php

use App\Models\Digimon;
use App\Models\Familia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamerController;
use App\Http\Controllers\DigimonController;
use Laravel\Fortify\Http\Controllers\RegisteredAdminController;



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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/registraradmin', function() {
    return view('auth.registeradmin');
})->name('registraradmin')->middleware(['auth', 'isadmin']);

Route::post('registeradmin', [RegisteredAdminController::class, 'store'])->name('registeradmin')->middleware(['auth', 'isadmin']);

Route::get('/digimon/familias', function() {
    return view('digimon.familias')->with('familias', Familia::all());
})->name('digimon.familias');

Route::get('/digimon/atributos', function(){
    return view('digimon.atributos');
})->name('digimon.atributos');

Route::get('/digimon/tipos', function(){
    return view('digimon.tipos');
})->name('digimon.tipos');

Route::get('/digimon/rangos', function(){
    return view('digimon.rangos');
})->name('digimon.rangos');

Route::get("/digimon/create2/{digimon}", [DigimonController::class, 'create2'])->name('digimon.create2')->middleware(['auth', 'isadmin']);

Route::post("/digimon/update2/{digimon}", [DigimonController::class, 'store2'])->name("digimon.store2")->middleware(['auth', 'isadmin']);

Route::get("/digimon/{digimon}/edit2", [DigimonController::class, 'edit2'])->name("digimon.edit2")->middleware(['auth', 'isadmin']);

Route::put("/digimon/{digimon}/update2", [DigimonController::class, 'update2'])->name("digimon.update2")->middleware(['auth', 'isadmin']);

Route::resource('digimon', DigimonController::class);

Route::resource('tamer', TamerController::class);

Route::get("/digicomparador", function() {
    return view('digimon.comparador')->with('digimon', Digimon::all());
})->name('digimon.comparador');

Route::get("/api", function() {
    return view('apirestproject.index');
})->name('digimon.api');

Route::get("/api/digimon", [DigimonController::class, "getdigis"])->name("digimon.getdigiapi");

Route::get("/api/digimon/{digimon}", [DigimonController::class, "getonedigi"])->name('digimon.getonedigiapi');

Route::get("/api/tamers", [TamerController::class, "gettamers"])->name("tamer.gettamerapi");

Route::get("/api/tamers/{tamer}", [TamerController::class, "getonetamer"])->name("tamer.getonetamerapi");