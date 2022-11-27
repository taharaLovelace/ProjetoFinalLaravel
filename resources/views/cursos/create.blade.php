@extends('layouts.barrainicial')

@section('title', 'Criar Cursos')

@section('content')

<div id="curso-create-container" class="col-md-6 offset-md-3">
    <h1>Crie um curso</h1>
    <form action="/cursos" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Curso:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do curso">
        </div>
        <div class="form-group">
            <label for="title">Descrição completa:</label>
            <textarea name="descriptionfull" id="descriptionfull" class="form-control" placeholder="Descrição completa do curso"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Descrição resumida:</label>
            <input type="text" class="form-control" id="descriptionbasic" name="descriptionsimple" placeholder="Descrição resumida do curso">
        </div>
        <div class="form-group">
            <label for="title">Minimo de alunos:</label>
            <input type="text" class="form-control" id="min" name="min" placeholder="Minimo de alunos do curso">
        </div>
        <div class="form-group">
            <label for="title">Maximo de alunos:</label>
            <input type="text" class="form-control" id="max" name="max" placeholder="Maximo de alunos do curso">
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Curso">
    </form>
</div>

@endsection

