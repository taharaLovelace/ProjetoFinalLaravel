<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Alunos::latest()->paginate(5);
        return view('alunos.index',compact('alunos'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('alunos.create');
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
            'RA'=> 'required'
        
        ]);

        //adicionando novo aluno
        Alunos::create($request->all()); ///esse comando cria o aluno na databse

        ///orientando o usuário
        return redirect()->route('alunos.index')->with('Sucesso','Aluno adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function show(Alunos $aluno)
    {
        return view('alunos.show', compact ('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alunos $aluno)
    {
        return view('alunos.edit', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alunos $aluno)
    {
            //validando o input
            $request->validate([
                'nome'=> 'required',   //required significa que esse input é obrigatório(não pode ser Nulo)
                'RA'=> 'required'
        
                
                ]);
        
            //adicionando novo aluno
            $aluno->update($request->all()); ///esse comando faz o update do aluno na databse
        
            ///orientando o usuário
            return redirect()->route('alunos.index')->with('Sucesso','Aluno adicionado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alunos $aluno)
    {
        $aluno->delete();

        return redirect()->route('alunos.index')->with('Sucesso','Aluno deletado');

    }
}
