<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->role;
        if ($user == '3'){
            return view('professores.dashboard');
        }else{
            return view('welcome');
        };
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar a entrada
        $request-> validate([
            'nome',
            'cpf',
            'endereco',
            'email',
            'password'
        ]);
        //criar novo produto
        Professores::create($request->all());

        //redirecionar e enviar mensagem
        return redirect()->route('professores.index')-> with ('Sucesso!', 'Professor Cadastrado com Sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function show(Professores $professores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function edit(Professores $professores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professores $professores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professores $professores)
    {
        //
    }

    public function view () {
        $users = User::latest()->paginate(15);

        return view('secretaria.professores', compact('users'))->with(request()->input('page'));
    }

    public function notas () {
        $users = User::all();
        $cursos = Curso::all();
        $cursouser = CursoUser::all();

        return view('professores.notas',[ 'cursos' => $cursos, 'users' => $users, 'cursouser' => $cursouser]);
    }

    public function atribuinota(Request $request){
        $user = user::findOrFail($request->alunoid);
        $curso = curso::findOrFail($request->cursoid);
        $nota = CursoUser::findOrFail($request->alunoid);
        $nota->nota = $request->nota;


        $curso = CursoUser::where('user_id','=',$user)->where('curso_id', '=',$curso)->update(['nota'=> $nota]);

        return back();
    }
    
}
