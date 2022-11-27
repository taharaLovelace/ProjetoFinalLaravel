@extends('layouts.barrainicial')

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
                <a class="btn btn-primary" href="/register" role="button" >Cadastrar Novo Usuario</a>
                <a class="btn btn-primary" href="/secretaria/createcursos" role="button" >Cadastrar Novo Curso</a>
                <a class="btn btn-primary" href="/secretaria/alunos" role="button" >Listar Alunos</a>
                <a class="btn btn-primary" href="/secretaria/professores" role="button" >Listar Professores</a>
                <a class="btn btn-primary" href="/secretaria/cursos" role="button" >Listar Cursos</a>
        
            </div>
        </div>
    </div>
</div>
@endsection
