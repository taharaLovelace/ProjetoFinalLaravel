@extends('materias.layout')

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

.subtexto{
    font-size: large;
    
}
</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar Matéria</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('materias.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Materia:</strong>
                {{ $materia->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mat_Id:</strong>
                {{ $materia->mat_id }}
            </div>
        </div>
    </div> 
        @if ($materia->prof)
        <p><strong>Professor: </strong>{{ $materia->prof->nome }}</p>
        @endif
        @if ($materia->alunos)
        <strong>Alunos: </strong>
        <br>
        @foreach ($materia->alunos as $alunos)
        {{ $alunos->nome }}
        <br>
        @endforeach
        @endif
       
    
@endsection