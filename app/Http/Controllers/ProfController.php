<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profs = Prof::latest()->paginate(5);
        return view('profs.index',compact('profs'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('profs.create');
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
            'RP'=> 'required'
        
        ]);

        //adicionando novo aluno
        Prof::create($request->all()); ///esse comando cria o aluno na databse

        ///orientando o usuário
        return redirect()->route('profs.index')->with('Sucesso','Professor adicionada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function show(Prof $prof)
    {
        return view('profs.show',compact('prof'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function edit(Prof $prof)
    {
        return view('profs.edit',compact('prof'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prof $prof)
    {
             //validando o input
             $request->validate([
                'nome'=> 'required',   //required significa que esse input é obrigatório(não pode ser Nulo)
                'RP'=> 'required'
                
                ]);
        
            //adicionando novo aluno
            $prof->update($request->all()); ///esse comando faz o update do aluno na databse
        
            ///orientando o usuário
            return redirect()->route('profs.index')->with('Sucesso','Professor adicionado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prof $prof)
    {
        $prof->delete();

        return redirect()->route('profs.index')->with('Sucesso','Professor deletado');
    }
}
