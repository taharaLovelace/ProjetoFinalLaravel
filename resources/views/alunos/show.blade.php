@extends('alunos.layout')

@section('content')
<style>
    body{
    background-color: lightskyblue;
}

.image{
    height: 60%;
}

.title{
    font-size: xx-large;
    color: black;
    font-family: 'Roboto Mono', monospace;
}

.laravel{
    color: black;
    font-family: 'Roboto Mono', monospace;
}

.subtexto{
    font-size: large;
    
}
</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar aluno</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('alunos.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $aluno->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RA:</strong>
                {{ $aluno->RA }}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                @if ($aluno->materia)
                <strong>Matéria:</strong>
                {{ $aluno->materia->nome }}
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Filmes:</strong>
                {{ $aluno->filmes }}
            </div>
        </div>
        
    </div>
@endsection