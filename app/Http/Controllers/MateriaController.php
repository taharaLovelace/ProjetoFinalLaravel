<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::latest()->paginate(5);
        return view('materias.index',compact('materias'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validando o input
        $request->validate([
            'nome'=> 'required',   //required significa que esse input é obrigatório(não pode ser Nulo)
            'mat_id'=> 'required'
        
        ]);

        //adicionando novo aluno
        Materia::create($request->all()); ///esse comando cria o aluno na databse

        ///orientando o usuário
        return redirect()->route('materias.index')->with('Sucesso','Materia adicionada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        return view('materias.show',compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        return view('materias.edit',compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
             //validando o input
             $request->validate([
                'nome'=> 'required',   //required significa que esse input é obrigatório(não pode ser Nulo)
                'mat_id'=> 'required'
                
                ]);
        
            //adicionando novo aluno
            $materia->update($request->all()); ///esse comando faz o update do aluno na databse
        
            ///orientando o usuário
            return redirect()->route('materias.index')->with('Sucesso','Materia adicionada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();

        return redirect()->route('materias.index')->with('Sucesso','Materia deletado');
    }
}
