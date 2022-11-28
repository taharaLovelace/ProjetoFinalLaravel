@extends('layouts.barrainicial')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Painel de Controle Do Aluno') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bem vindo: ') }} {{ Auth::user()->name }}
                </div>
                
                <a class="btn btn-primary" href="/alunos/alunos">Editar seus dados</a>
                <a class="btn btn-primary" href="/home/createprof" role="button">Se inscrever em Algum curso</a>
                <a class="btn btn-primary" href="/home/createcursos" role="button">ZZZZZZZZZZZZZZZZZZZZZZ</a>
            </div>
        </div>
    </div>
</div>
@endsection