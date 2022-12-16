@extends('layouts.barrainicial')

@section('title', 'Relacionamento')

@section('content')

@if(Auth::user()->role == 1)
<h1 class="d-flex justify-content-center my-2" style="background-color:#F2A340">Atribua um Professor ao Curso</h1>
<li class="nav-item dropdown d-flex justify-content-center my-2">
    <button id="navbarDropdown" class="nav-link dropdown-toggle " style=" border-radius:6px; color:black;" role="button" data-bs-toggle="dropdown" aria-haspopup="true" >
        <span id="textoprof"></span>
    </button>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        @foreach ($users as $user)
        @if($user->role == 3)
        <button class="dropdown-item"  onclick="profbutton( '{{ $user->name }}', ' {{ $user->id }}' )">
           {{ $user->name}}
        </button>
        @endif
        @endforeach

    </div>

</li>


<li class="nav-item dropdown d-flex justify-content-center my-2">
    <button id="navbarDropdown" class="nav-link dropdown-toggle " style=" border-radius:6px; color:black;"  role="button" data-bs-toggle="dropdown" aria-haspopup="true" >
        <span id="textocurso"></span>
    </button>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        @foreach ($cursos as $curso)
        
        @if($curso->user_id == NULL)
        <button class="dropdown-item"  onclick="cursobutton('{{ $curso->name }}', '{{ $curso->id}}')">
           {{ $curso->name}}
        </button>
        @endif
        @endforeach
    </div>
</li>

    <form action="/link/professor/relacao">
    <div class="row mb-3">
        <label for="profid" class="col-md-4 col-form-label text-md-end"></label>
        <div class="col-md-6">
            <input  style="display:none;" id="profid" type="text" class="form-control @error('profid') is-invalid @enderror" name="profid" value="" required autocomplete="profid" autofocus>

            @error('profid')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="cursoid" class="col-md-4 col-form-label text-md-end"></label>
        <div class="col-md-6">
            <input  style="display:none;" id="cursoid" type="text" class="form-control @error('cursoid') is-invalid @enderror" name="cursoid" value="" required autocomplete="cursoid" autofocus>

            @error('cursoid')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="d-flex justify-content-center">
    <button class ="btn btn-primary">Relacionar Professor</button>
    </div>
    </form>

    <h1 class="d-flex justify-content-center my-2" style="background-color:skyblue">Atribua um Aluno ao Curso</h1>
    <li class="nav-item dropdown d-flex justify-content-center my-2">
        <button id="navbarDropdown" class="nav-link dropdown-toggle " style=" border-radius:6px; color:black;" role="button" data-bs-toggle="dropdown" aria-haspopup="true" >
            <span id="textoaluno"></span>
        </button>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            @foreach ($users as $user)
            @if($user->role == 2)
            <button class="dropdown-item"  onclick="alunobutton( '{{ $user->name }}', ' {{ $user->id }}' )">
            {{ $user->name}}
            </button>
            @endif
            @endforeach

        </div>

    </li>


    <li class="nav-item dropdown d-flex justify-content-center my-2">
        <button id="navbarDropdown" class="nav-link dropdown-toggle " style=" border-radius:6px; color:black;"  role="button" data-bs-toggle="dropdown" aria-haspopup="true" >
            <span id="textocurso1"></span>
        </button>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            @foreach($cursos as $curso)
            <button class="dropdown-item"  onclick="cursobutton1('{{ $curso->name }}', '{{ $curso->id}}')">
            {{ $curso->name}}
            </button>
            @endforeach
        </div>
    </li>
    <div class="d-flex justify-content-center">
    <form action="/link/aluno/relacao" method="POST">
        @csrf
        <a href="/cursos/join/{{ $curso->id }}" class="btn btn-primary" id="curso-submit" onclick="event.preventDefault(); this.closest('form').submit();" style="background-color:skyblue">Participar do Curso</a>
    </form>
    </div>
    @endif

    @if(Auth::user()->role != 1)
    <h1>Você não tem permissão!</h1>
    <a href="/" class="btn btn-primary">Retornar</a>
    @endif
    
    
    <script>
        textoprof = 'Escolha um professor';
        textocurso = 'Escolha um curso';
        textoaluno = 'Escolha um aluno';
        textocurso1 = 'Escolha um curso';

        

    document.getElementById("textoprof").innerHTML = textoprof;
    document.getElementById("textoaluno").innerHTML = textoaluno;
    document.getElementById("textocurso").innerHTML = textocurso;
    document.getElementById("textocurso1").innerHTML = textocurso1;



    function profbutton(professornome,professorid){
        document.getElementById("textoprof").innerHTML = professornome;
        document.getElementById("profid").value = professorid;

    }

    function alunobutton(alunonome,alunoid){
        document.getElementById("textoaluno").innerHTML = alunonome;
        document.getElementById("alunoid").value = alunoid;

    }

    function cursobutton(cursonome,cursoid){
        document.getElementById("textocurso").innerHTML = cursonome;
        document.getElementById("cursoid").value = cursoid;
    }

    function cursobutton1(cursonome1,cursoid1){
        document.getElementById("textocurso1").innerHTML = cursonome1;
        document.getElementById("cursoid1").value = cursoid1;
    }

    </script>




@endsection