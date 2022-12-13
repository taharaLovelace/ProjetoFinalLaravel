@extends('layouts.barrainicial')

@section('title', 'Escola Técnica de Informatica')

@section('content')
    <meta charset="UTF-8">
    <script src="/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<body>
    <main class="my-4">
        <div class="container">
          <div class="row">
            <div class="col-7">
                    <img src="/img/imagempgini.jpg" alt="escola logo" class="img-fluid" image>
            </div>
                <div class="col-md-5">
                    <p class = "title mt-5">Escola de Educação Técnica de Informática - Nome Generico</p>
                    <p class="subtexto mt-4">Oferecemos cursos online aos alunos, apenas cursos avulsos, sem trilhas ou relacionamento entre os cursos. 
                    </p>
                    <p class="subtexto mt-4">Conheca já nossos cursos!</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">Cursos Disponíveis</h5>
                        <p class="card-text">Conheça alguns de nossos cursos oferecidos na plataforma.</p>
                        <a href="/cursos" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </main>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
@endsection