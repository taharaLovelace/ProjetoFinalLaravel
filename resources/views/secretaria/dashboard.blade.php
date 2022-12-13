@extends('layouts.barrainicial')

@section('title', 'Painel de Controle')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Painel de Controle da Secretaria') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você logou com sucesso!') }}
                </div>
                <a class="btn btn-primary" href="/registeraluno" role="button" >Cadastrar Novo Aluno</a>
                <a class="btn btn-primary" href="/registerprofessor" role="button" >Cadastrar Novo Professor</a>
                <a class="btn btn-primary" href="/secretaria/createcursos" role="button" >Cadastrar Novo Curso</a>
                <a class="btn btn-primary" href="/secretaria/alunos" role="button" >Listar Alunos</a>
                <a class="btn btn-primary" href="/secretaria/professores" role="button" >Listar Professores</a>
                <a class="btn btn-primary" href="/secretaria/cursos" role="button" >Listar Cursos</a>
                <li class="nav-item dropdown d-flex justify-content-center my-2">
    <button id="navbarDropdown" class="nav-link dropdown-toggle show" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <span id="proftexto">Selecione um professor</span>
    </button>

    <div class="dropdown-menu dropdown-menu-end show" aria-labelledby="navbarDropdown" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(866px, 46px);" data-popper-placement="bottom-end">
                <button class="dropdown-item" onclick="professores( '3', 'Leandro Xastre' )">
           Leandro Xastre
        </button>
                <button class="dropdown-item" onclick="professores( '9', 'Valdomiro Pannain' )">
           Valdomiro Pannain
        </button>
                <button class="dropdown-item" onclick="professores( '10', 'Ricardo Engelbrecht' )">
           Ricardo Engelbrecht
        </button>
            </div>
</li>
        
            </div>
        </div>
    </div>
</div>
@endsection
