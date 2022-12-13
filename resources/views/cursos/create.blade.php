@extends('layouts.barrainicial')

@section('title', 'Criar Cursos')

@section('content')
<div class="container">
<br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crie um curso</div>
                    <div id="curso-create-container" class="col-md-6 offset-md-3">
                        <form action="/cursos" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Nome do curso:</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do curso">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="title">Descrição completa:</label>
                                <textarea name="descriptionfull" id="descriptionfull" class="form-control" placeholder="Descrição completa do curso"></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="title">Descrição resumida:</label>
                                <input type="text" class="form-control" id="descriptionbasic" name="descriptionsimple" placeholder="Descrição resumida do curso">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="title">Minimo de alunos:</label>
                                <input type="text" class="form-control" id="min" name="min" placeholder="Minimo de alunos do curso">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="title">Maximo de alunos:</label>
                                <input type="text" class="form-control" id="max" name="max" placeholder="Maximo de alunos do curso">
                            </div>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Criar Curso">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            

@endsection

