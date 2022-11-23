<?php

use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\AlunosController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/requisicao', function () {
    $json = \Illuminate\Support\Facades\Http::get('https://viacep.com.br/ws/01001000/json/')->body();
    dd($json);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/alunos/dashboard', [AlunosController::class, 'index']);
Route::get('/professores/dashboard', [ProfessoresController::class, 'index']);
Route::get('/home/createalunos', function() {
    return view('alunos.create');
});

Route::get('/home/createprof', function() {
    return view('professores.create');
});

Route::get('/home/createcursos', function(){
    return view('cursos.create');
});
