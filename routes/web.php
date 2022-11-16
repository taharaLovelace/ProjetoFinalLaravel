<?php
use App\http\Controllers\ProfController;
use App\http\Controllers\MateriaController;
use App\http\Controllers\AlunosController;
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
    return view('inicial');
})->name('inicial');


Route::resource('alunos',AlunosController::class);

Route::resource('profs',ProfController::class);

Route::resource('materias',MateriaController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
