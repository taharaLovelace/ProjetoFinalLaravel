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
<br>

<div class = "row">
    <div class = "col-lg-12 margin-tb">
        <div class = "pull-left">
            <h2>Adicionar novo aluno</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route ('alunos.index') }}"> Voltar</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Erro:</strong> Ocorreu algum problema.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('alunos.store') }}" method="POST">
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
                <strong>RA:</strong>
                <input type="number" name="RA" class="form-control" placeholder="RA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id da Matéria Cursada:</strong>
                <input type="number" name="alu_mat" class="form-control" placeholder="Id Matéria">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Filmes:</strong>
                <textarea class="form-control" style="height:150px" name="filmes" placeholder="Filmes"></textarea>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary my-4">Enviar</button>
        </div>
    </div>

</form>

@endsection