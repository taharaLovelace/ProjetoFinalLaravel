<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;
use App\Models\User;
use Auth;
use App\Models\CursoUser;

class CursoController extends Controller
{
    
    public function index() {

        $search = request('search');

        if($search){

            $cursos = Curso::where([
                ['name','like','%'.$search.'%']
            ])->get();
        
        } else{
            $cursos = Curso::all();
        }

         return view('cursos.cursos', ['cursos' => $cursos, 'search' => $search]);
    }    

    public function create() {
        return view('cursos.create');
    }

    public function store(Request $request){

        $curso = new Curso;

        $curso->name = $request->title;
        $curso->descriptionfull = $request->descriptionfull;
        $curso->descriptionsimple = $request->descriptionsimple;
        $curso->minimum = $request->min;
        $curso->maximum = $request->max;
       
        $curso->save();

        return redirect('/secretaria/dashboard')->with('msg', 'Curso criado com sucesso!');

    }

    public function show($id){

        $curso = Curso::findOrFail($id);
        $professor = User::find($curso->user_id);
        $user = Auth::user();
        $usuarioentrou = false;

        if($user){
            $cursosusuario = $user->cursos->toArray();
            foreach ($cursosusuario as $cursousuario){
                if($cursousuario['id'] == $id){
                    $usuarioentrou = true;
                } 
            }
        }

        return view('cursos.show', ['curso' => $curso,'usuarioentrou' => $usuarioentrou, 'professor' => $professor]);

    }

    public function view () {
        $cursos = Curso::latest()->paginate(15);

        $user = Auth::user();
        $notinha = CursoUser::where('user_id','=',$user->id)->get();
        $cursos2 = $user->cursos;
        $cursos3 = Curso::where('user_id','=',$user->id)->get();

        return view('secretaria.cursos', ['notinha' => $notinha, 'cursos2' => $cursos2, 'cursos3' => $cursos3], compact('cursos'))->with(request()->input('page'));
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect('/secretaria/cursos');
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    
    public function update(Request $request, Curso $curso)
    {
            //validando o input
            $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'descriptionfull' => ['required', 'string', 'max:255'],
            'descriptionsimple' => ['required', 'string', 'max:255'],
            'minimum' => ['required', 'integer'],
            'maximum' => ['required', 'integer'],

                ]);
        
            //adicionando novo aluno
            $curso->update($request->all()); ///esse comando faz o update do aluno na databse
        
            ///orientando o usuário
            return redirect('/secretaria/cursos')->with('Sucesso','Curso adicionado com sucesso');
    }

    public function joinCurso($id) {
        $user = Auth::user()->role;
        if ($user !=  '2'){
            return redirect('/');
        }
        $user = auth()->user();
        $user->cursos()->attach($id);

        $curso = Curso::findOrFail($id);

        return redirect('/cursos')->with('msg', 'Voce se inscreveu no curso ' . $curso->name);
    }

    
    public function relacao(){
        $user = Auth::user()->role;
        if ($user !=  '1'){
            return redirect('/');
        }

        $users = User::all();
        $cursos = Curso::all();
        $curso_user = CursoUser::all();
    
        return view('secretaria.relacao',[ 'cursos' => $cursos, 'users' => $users, 'curso_user' => $curso_user]);
    }

    public function linkprofessor(Request $request){
        $user = Auth::user()->role;
        if ($user !=  '1'){
            return redirect('/');
        }

        $curso = curso::findOrFail($request->cursoid);
        $user = user::findOrFail($request->profid);
        $curso->user_id = $user->id;
        $curso->save();
        
        return back();
    }

    public function linkaluno(Request $request){
        $user = Auth::user()->role;
        if ($user !=  '1'){
            return redirect('/');
        }
        $curso = curso::findOrFail($request->cursoid);
        $user = user::findOrFail($request->id);
        $user->cursos()->attach($id);
        $curso = Curso::findOrFail($id);

        return redirect('/cursos')->with('msg', 'Voce inscreveu no curso ' . $curso->name);
    }
}
