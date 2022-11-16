<!-- Esse arquivo controla a pagina inicial do site -->
<!DOCTYPE html>
<html lang="en">
<head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Escola de Educação Técnica de Informática
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Logar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar-se') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
    <meta charset="UTF-8">
    <title>EETI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body>


       <main class="my-5">
        <div class="container d-flex align-items-center justify-content-center text-center">
          <div class="row">
            <div class="col-sm">
                <p class = "title mt-9">Escola de Educação Técnica de Informática</p>
                
            </div>
            <div class="text-center">
                <img src="https://www.ui1.es/sites/default/files/blog/images/ingenieria-informatica.jpg" alt="imagem principal" class="img-fluid" image>

            </div>
          </div>
        </div>
       </main>

        <section class=" p-5 text-center my-">
            <div class="container d-flex align-items-center justify-content-center">
              <div class="d-sm-flex">
                <div class="text-right">
                    <p class = "title my-2">Cursos Disponíveis</p>
                    
                    <div class="row">
                      <div class="col-lg-4 margin-tb">
                          <div class="pull-right">
                            <a class="btn btn-success" href="login"> Python</a>
                          </div>
                      </div>
                      <div class="col-lg-4 margin-tb">
                        <div class="pull-right">
                            <a class="btn btn-success" href="login"> Assembly</a>
                        </div>
                      </div>
                      <div class="col-lg-4 margin-tb">
                        <div class="pull-right">
                          <a class="btn btn-success" href="login"> Java</a>
                        </div>
                      </div>
                    </div>



              </div>
              </div>
            </div>
    


    


    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>