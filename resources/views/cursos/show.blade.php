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
                <p class="events-participants"><ion-icon name="people-outline"></ion-icon> {{ count($curso->users) }} Participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Professor do Curso: </p>
                <form action="/cursos/join/{{ $curso->id }}" method="POST">
                @csrf
                <a href="/cursos/join/{{ $curso->id }}" class="btn btn-primary" id="curso-submit" onclick="event.preventDefault(); this.closest('form').submit();">Participar do Curso</a>
                </form>
            </div>
             <div class="col-md-12" id="description-container">
                <h3>Sobre o curso</h3>
                <p class="event-description">{{ $curso->descriptionfull }}</p>
             </div>
        </div>
    </div>

@endsection