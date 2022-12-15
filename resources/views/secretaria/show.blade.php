@extends('layouts.barrainicial')

@section('title', 'Mostrar')

@section('content')
@if(Auth::user()->role == 1)
        @if($user->role == 2)
        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Mostrar Aluno</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/secretaria/alunos"> Voltar</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID:</strong>
                        {{ $user->id }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nome:</strong>
                        {{ $user->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>CPF:</strong>
                        {{ $user->cpf }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Endereco:</strong>
                        {{ $user->endereco }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Filme:</strong>
                        {{ $user->filme }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $user->email }}
                    </div>
                </div>
            </div>

        @endif

        @if($user->role == 3)
        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Mostrar Professor</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/secretaria/professores"> Voltar</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID:</strong>
                        {{ $user->id }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nome:</strong>
                        {{ $user->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>CPF:</strong>
                        {{ $user->cpf }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Endereco:</strong>
                        {{ $user->endereco }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $user->email }}
                    </div>
                </div>
            </div>


        @endif
@endif

@if(Auth::user()->role == 2 && Auth::user()->name == $user->name)
        @if($user->role == 2)
        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Seus Dados</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/alunos/alunos"> Voltar</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID:</strong>
                        {{ $user->id }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nome:</strong>
                        {{ $user->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>CPF:</strong>
                        {{ $user->cpf }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Endereco:</strong>
                        {{ $user->endereco }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Filme:</strong>
                        {{ $user->filme }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $user->email }}
                    </div>
                </div>
            </div>
        @endif
@endif

@if(Auth::user()->role == 2 && Auth::user()->name != $user->name)
    <h1>Você não tem permissão!</h1>
    <a href="/" class="btn btn-primary">Retornar</a>
@endif

@if(Auth::user()->role == 3 && Auth::user()->name == $user->name)
        @if($user->role == 3)
        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Seus Dados</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/professores/professores"> Voltar</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID:</strong>
                        {{ $user->id }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nome:</strong>
                        {{ $user->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>CPF:</strong>
                        {{ $user->cpf }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Endereco:</strong>
                        {{ $user->endereco }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $user->email }}
                    </div>
                </div>
            </div>


        @endif
@endif

@if(Auth::user()->role == 3 && Auth::user()->name != $user->name)
    <h1>Você não tem permissão!</h1>
    <a href="/" class="btn btn-primary">Retornar</a>
@endif




@endsection