@extends('layouts.barrainicial')

@section('title', $curso -> name)

@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
            @if($curso -> name == 'Python')
            <img src="/img/python.jpg" alt="{{ $curso->name }}">
            @endif
            @if($curso -> name == 'Laravel')
            <img src="/img/laravel.jpg" alt="{{ $curso->name }}">
            @endif
            @if($curso -> name == 'Java')
            <img src="/img/javalogo.jpg" alt="{{ $curso->name }}">
            @endif
            @if($curso -> name == 'C#')
            <img src="/img/csharp.jpg" alt="{{ $curso->name }}">
            @endif
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $curso->name }}</h1>
                <p class="card-text"><ion-icon name="people-outline"></ion-icon>Mínimo de Alunos: {{ $curso->minimum }}</p>
                <p class="card-text"><ion-icon name="people-outline"></ion-icon>Máximos de Alunos: {{ $curso->maximum }}</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Status: 
                @if(count($curso->users) < $curso->minimum) Mínimo de alunos não atingido!</p> @endif
                @if(count($curso->users) >= $curso->minimum && count($curso->users) !=  $curso->maximum) Matrículas Abertas - Curso acontecerá!</p> @endif
                @if(count($curso->users) ==  $curso->maximum) Matrículas Encerradas</p> @endif
                <p class="events-participants"><ion-icon name="people-outline"></ion-icon> {{ count($curso->users) }} Participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Professor do Curso: @if($professor != NULL) {{$professor['name']}} </p> @endif
                
                @if(Auth::check() && Auth::user()->role == 2)
                @if (!$usuarioentrou && count($curso->users) !=  $curso->maximum)
                <form action="/cursos/join/{{ $curso->id }}" method="POST">
                @csrf
                <a href="/cursos/join/{{ $curso->id }}" class="btn btn-primary" id="curso-submit" onclick="event.preventDefault(); this.closest('form').submit();">Participar do Curso</a>
                </form>
                @endif
                @if($usuarioentrou)
                <br>
                <br>
                <p><a href="" class="btn btn-primary">Você já está no curso</a></p>
                @endif
                @endif
                
                @if(Auth::check() && Auth::user()->role == 1)
                    <br>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/link/professor"> Atribuir Professor </a>
                    </div>
                @endif
            </div>
             <div class="col-md-12" id="description-container">
                <h3>Sobre o curso</h3>
                <p class="event-description">{{ $curso->descriptionfull }}</p>
             </div>
         
        </div>
    </div>


@endsection