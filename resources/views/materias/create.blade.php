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
}

.subtexto{
    font-size: large;
    
}
</style>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicione nova materia</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('materias.index') }}"> Voltar</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('materias.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mat_Id:</strong>
                <input type="number" name="mat_id" class="form-control" placeholder="Mat_Id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary my-4">Enviar</button>
        </div>
    </div>

</form>
@endsection