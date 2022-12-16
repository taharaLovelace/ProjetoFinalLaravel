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

//ROTAS DE CURSOS
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/secretaria/createcursos', [CursoController::class, 'create'])->middleware('secretaria'); 
Route::post('/cursos', [CursoController::class, 'store']);
Route::get('cursos/{id}', [CursoController::class, 'show']);
Auth::routes();

//ROTAS DE ALUNOS
Route::get('/alunos/dashboard', [AlunosController::class, 'index']);                    //dashboard principal alunos
Route::resource('user',AlunosController::class);
Route::get('/alunos/alunos', [AlunosController::class, 'view']);
Route::get('/alunos/cursos', [CursoController::class, 'view']);


//ROTAS DE SECRETARIA
Route::get('/secretaria/dashboard', [SecretariaController::class, 'index'])->middleware('secretaria');            //dashboard principal secretaria
Route::get('/secretaria/alunos', [AlunosController::class, 'view'])->middleware('secretaria');                    //lista alunos
Route::get('/secretaria/professores', [ProfessoresController::class, 'view'])->middleware('secretaria');          //lista professores
Route::get('/secretaria/cursos', [CursoController::class, 'view'])->middleware('secretaria');  
Route::get('/registeraluno', [SecretariaController::class, 'registro'])->middleware('secretaria');                    //registro dos alunos
Route::get('/registerprofessor', [SecretariaController::class, 'registro'])->middleware('secretaria');                    //registro dos professores

//ROTAS DE PROFESSORES
Route::get('/professores/dashboard', [AlunosController::class, 'index']);          //dashboard principal professores
Auth::routes();
Route::resource('curso',CursoController::class);
Route::post('/cursos/join/{id}', [CursoController::class, 'joinCurso'])->middleware('auth');
Route::get('/link/professor', [CursoController::class, 'relacao'])->middleware('auth');
Route::get('/link/professor/relacao', [CursoController::class, 'linkprofessor'])->middleware('auth');
Route::post('/link/aluno/relacao', [CursoController::class, 'linkaluno'])->middleware('auth');
Route::get('/professores/professores', [ProfessoresController::class, 'view']);
Route::get('/professores/cursos', [CursoController::class, 'view']);
Route::post('/professor/nota/', [ProfessoresController::class, 'notas'])->middleware('auth');
Route::get('/professor/atribui/nota/', [ProfessoresController::class, 'atribuinota'])->middleware('auth');