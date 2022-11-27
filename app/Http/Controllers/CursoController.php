<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;

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

        return view('cursos.show', ['curso' => $curso]);

    }

    public function view () {
        $cursos = Curso::latest()->paginate(15);

        return view('secretaria.cursos', compact('cursos'))->with(request()->input('page'));
    }

    public function destroy(Curso $curso)
    {
        //
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
        $user = auth()->user();

        $user->cursos()->attach($id);

        $curso = Curso::findOrFail($id);

        return redirect('/cursos')->with('msg', 'Voce se inscreveu no curso ' . $curso->name);
    }
}

