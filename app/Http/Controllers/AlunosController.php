<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->role;
        if ($user == '2'){
            return view('alunos.dashboard');
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
            'filme',
            'email',
            'password'
        ]);
        //criar novo produto
        Alunos::create($request->all());

        //redirecionar e enviar mensagem
        return redirect()->route('welcome');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('alunos.show', compact ('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('alunos.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
            //validando o input
            $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'endereco' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'max:255'],
            'filme' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        
                
                ]);
        
            //adicionando novo aluno
            $user->update($request->all()); ///esse comando faz o update do aluno na databse
        
            ///orientando o usuário
            if(Auth::check() && Auth::user()->role == '1'){
            return redirect('/secretaria/alunos')->with('Sucesso','Aluno alterado com sucesso');
            }
            if(Auth::check() && Auth::user()->role == '2'){
                return redirect('/alunos/alunos')->with('Sucesso','Aluno alterado com sucesso');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alunos  $alunos
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function view () {
        $users = User::latest()->paginate(15);

        return view('secretaria.alunos', compact('users'))->with(request()->input('page'));
    }

    
}

