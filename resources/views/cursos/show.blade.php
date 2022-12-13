@extends('layouts.barrainicial')

@section('title', $curso -> name)

@section('content')
@if(Auth::check() && Auth::user()->role == 2)
    

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
    @endif

    @if(Auth::check() && Auth::user()->role == 1)
    <div class="col-md-10 offset-md-1">
        <div class="row">
        <div id="info-container" class="col-md-6">
                <h1>{{ $curso->name }}</h1>
                <p class="events-participants"><ion-icon name="people-outline"></ion-icon> {{ count($curso->users) }} Participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Professor do Curso: </p>
                <form action="/cursos/link/{{ $curso->id }}" method="POST">
                @csrf
                <li class="nav-item dropdown d-flex justify-content-center my-2">
    <button id="navbarDropdown" class="nav-link dropdown-toggle show" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <span id="proftexto">Selecione um professor</span>
    </button>

    <div class="dropdown-menu dropdown-menu-end show" aria-labelledby="navbarDropdown" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(866px, 46px);" data-popper-placement="bottom-end">
        @foreach ($professores as $professor)
        @if ($professor->role == 3) 
        <button class="dropdown-item" onclick="professores( '{{ $professor->id }}', '{{ $professor->name }}' )">
           {{ $professor->name }}
        </button>
        @endif
        @endforeach
    </li>
    <input id="profid" style="display:none;" type="text" class="form-control @error('profid') is-invalid @enderror" name="profid" value="" required autocomplete="alunoid" >
                <a href="/cursos/link/{{ $curso->id }}" class="btn btn-primary" id="curso-submit" onclick="event.preventDefault(); this.closest('form').submit();">Relacionar Um Professor</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        function professores(profid,profnome){
        document.getElementById("proftexto").innerHTML = profnome;
        document.getElementById("profid").value = profid;
    }
    </script>
    
    @endif


@endsection