@extends('layouts.barrainicial')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Curso</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/secretaria/cursos"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Eita!</strong> Ocorreu algum problema ao inserir o aluno.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('curso.update',$curso->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="name" value="{{ $curso->name }}" class="form-control" placeholder="nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição completa:</strong>
                    <input type="text" name="descriptionfull" value="{{ $curso->descriptionfull }}" class="form-control" placeholder="CPF">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição Simples:</strong>
                    <input type="text" name="descriptionsimple" value="{{ $curso->descriptionsimple }}" class="form-control" placeholder="Endereco">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Minimo:</strong>
                    <input type="number" name="minimum" value="{{ $curso->minimum }}" class="form-control" placeholder="Email">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Maximo:</strong>
                    <input type="number" name="maximum" value="{{ $curso->maximum }}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center my-3">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>


    </form>

@endsection