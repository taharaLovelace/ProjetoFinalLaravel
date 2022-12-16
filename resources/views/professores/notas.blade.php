@extends('layouts.barrainicial')

@section('title', 'Notas')

@section('content')

<h1 class="d-flex justify-content-center my-2" style="background-color:#F2A340">Atribua uma nota ao Aluno</h1>
<li class="nav-item dropdown d-flex justify-content-center my-2">
    <button id="navbarDropdown" class="nav-link dropdown-toggle " style=" border-radius:6px; color:black;" role="button" data-bs-toggle="dropdown" aria-haspopup="true" >
        <span id="textoaluno"></span>
    </button>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        @foreach ($users as $user)
        @if($user->role == 2)
        <button class="dropdown-item"  onclick="alunobutton( '{{ $user->name }}', ' {{ $user->id }}' )">
           {{ $user->name }}
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
        <button class="dropdown-item"  onclick="cursobutton('{{ $curso->name }}', '{{ $curso->id}}')">
           {{ $curso->name }}
        </button>

        @endforeach


    </div>
</li>

    <form action="/professor/atribui/nota/" method="GET">
        @csrf
    <div class="row mb-3">
        <label for="alunoid" class="col-md-4 col-form-label text-md-end"></label>
        <div class="col-md-6">
            <input  style="display:none;" id="alunoid" type="text" class="form-control @error('alunoid') is-invalid @enderror" name="alunoid" value="" required autocomplete="alunoid" autofocus>

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
    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nota:</strong>
                            <input type="number" name="nota" id="nota" step="0.01" class="form-control @error('nota') is-invalid @enderror" required autocomplete="nota" placeholder="nota">
                        </div>
                    </div>
    <div class="d-flex justify-content-center">
    <button class ="btn btn-primary">Adicionar Nota</button>
    </div>
    </form>
    
    
    <script>
        textoaluno = 'Escolha um Aluno';
        textocurso = 'Escolha um curso';
        

    document.getElementById("textoaluno").innerHTML = textoaluno;
    document.getElementById("textocurso").innerHTML = textocurso;



    function alunobutton(alunonome,alunoid){
        document.getElementById("textoaluno").innerHTML = alunonome;
        document.getElementById("alunoid").value = alunoid;

    }


    function cursobutton(cursonome,cursoid){
        document.getElementById("textocurso").innerHTML = cursonome;
        document.getElementById("cursoid").value = cursoid;
    }

    </script>




@endsection