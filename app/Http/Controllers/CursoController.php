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

}

