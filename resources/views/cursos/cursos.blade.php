@extends('layouts.barrainicial')

@section('title', 'Escola Técnica de Informatica')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um curso</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">

    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    <h2>Cursos oferecidos</h2>
    <p class="subtitle">Cursos de programação disponiveis:</p>
    @endif

    <div id="cards-container" class="row">
        @foreach($cursos as $curso)
        <div class="card col-md-3">
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
            <div class="card-body">
                <p class="card-date">27/11/2022</p>
                <h5 class="card-title">{{ $curso->name }}</h5>
                <p class="card-participants">{{ $curso->descriptionsimple }}</p>
                <p class="card-participants">X Participantes</p>
                <a href="/cursos/{{ $curso->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($cursos) == 0 && $search)
        <p>Nenhum curso '{{ $search }}' encontrado! <a href="/">Ver todos os cursos</a></p>
        @elseif(count($cursos) == 0)
        <p>Não há cursos disponìveis</p>
        @endif
    </div>
</div>


@endsection

