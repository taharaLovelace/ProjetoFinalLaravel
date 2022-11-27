@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Painel de Controle') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você logou com sucesso!') }}
                </div>
                <a class="btn btn-primary" href="/home/createalunos" role="button">Cadastrar Aluno</a>
                <a class="btn btn-primary" href="/home/createprof" role="button">Cadastrar Professor</a>
                <a class="btn btn-primary" href="/home/createcursos" role="button">Cadastrar Novo Curso</a>
            </div>
        </div>
    </div>
</div>
@endsection
