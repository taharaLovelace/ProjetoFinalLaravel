<?php

use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\SecretariaController;
use App\Http\Controllers\CursoController;
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

Route::get('/cursos', [CursoController::class, 'index']);

Route::get('/secretaria/createcursos', [CursoController::class, 'create'])->middleware('secretaria'); 
Route::post('/cursos', [CursoController::class, 'store']);
Route::get('cursos/{id}', [CursoController::class, 'show']);

Auth::routes();


//ROTAS DE ALUNOS
Route::get('/alunos/dashboard', [AlunosController::class, 'index']);                    //dashboard principal alunos
Route::resource('user',AlunosController::class);
Route::get('/alunos/alunos', [AlunosController::class, 'view']);



//ROTAS DE SECRETARIA
Route::get('/secretaria/dashboard', [SecretariaController::class, 'index'])->middleware('secretaria');            //dashboard principal secretaria
Route::get('/secretaria/alunos', [AlunosController::class, 'view'])->middleware('secretaria');                    //lista alunos
Route::get('/secretaria/professores', [ProfessoresController::class, 'view'])->middleware('secretaria');          //lista professores
Route::get('/secretaria/cursos', [CursoController::class, 'view'])->middleware('secretaria');  
Route::get('/register', [SecretariaController::class, 'registro'])->middleware('secretaria');                    //registro dos alunos e professores



//ROTAS DE PROFESSORES
Route::resource('professores',ProfessoresController::class);
Route::get('/professores/dashboard', [ProfessoresController::class, 'index']);          //dashboard principal professores

Auth::routes();

Route::resource('curso',CursoController::class);

Route::post('/cursos/join/{id}', [CursoController::class, 'joinCurso'])->middleware('auth');;
