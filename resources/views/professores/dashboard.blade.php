@extends('layouts.app')

@section('title', 'Painel de Controle')

@section('content')
<div class="container">
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Painel de Controle Do Professor') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bem vindo: ') }} {{ Auth::user()->name }}
                </div>
                
                <a class="btn btn-primary" href="/professores/professores" role="button">Editar Seus Dados</a>
                <a class="btn btn-primary" href="/professores/cursos" role="button">Cursos Ministrados</a>
                <a class="btn btn-primary" href="/professor/nota/" role="button">Adicionar Nota a um Aluno</a>
            </div>
        </div>
    </div>
</div>
@endsection