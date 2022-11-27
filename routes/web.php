<?php

use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\SecretariaController;
use App\Http\Controllers\CursosController;
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

//ROTAS DE ALUNOS
Route::get('/alunos/dashboard', [AlunosController::class, 'index']);                    //dashboard principal alunos
Route::resource('user',AlunosController::class);






//ROTAS DE SECRETARIA
Route::get('/secretaria/dashboard', [SecretariaController::class, 'index'])->middleware('secretaria');            //dashboard principal secretaria
Route::get('/secretaria/alunos', [AlunosController::class, 'view'])->middleware('secretaria');                    //lista alunos
Route::get('/secretaria/professores', [ProfessoresController::class, 'view'])->middleware('secretaria');          //lista professores
Route::get('/register', [SecretariaController::class, 'registro'])->middleware('secretaria');                    //registro dos alunos e professores
Route::get('/secretaria/createcursos', function(){                                      //criacao de novos cursos
    return view('cursos.create');
});
Route::post('/curso/join/{id}', [SecretariaController::class, 'joinCurso']);




//ROTAS DE PROFESSORES
Route::resource('professores',ProfessoresController::class);
Route::get('/professores/dashboard', [ProfessoresController::class, 'index']);          //dashboard principal professores






//ROTAS DE CURSOS
Route::resource('curso',CursosController::class);







Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
