@extends('layouts.barrainicial')

@section('title', 'Editar Usuário')

@section('content')

@if(Auth::user()->role == 1)
        @if($user->role == 2)
        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Editar aluno</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/secretaria/alunos"> Voltar</a>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Eita!</strong> Ocorreu algum problema ao inserir o aluno.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('user.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nome:</strong>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="nome">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>CPF:</strong>
                            <input type="text" name="cpf" value="{{ $user->cpf }}" class="form-control" placeholder="CPF">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Endereco:</strong>
                            <input type="text" name="endereco" value="{{ $user->endereco }}" class="form-control" placeholder="Endereco">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Filmes:</strong>
                            <textarea class="form-control" style="height:150px" name="filme" placeholder="Filmes">{{ $user->filme }}</textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Senha:</strong>
                            <input type="password" name="password" value="{{ $user->password }}" class="form-control" placeholder="Senha">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center my-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>


            </form>

        @endif

        @if($user->role == 3)
        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Editar professor</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/secretaria/professores"> Voltar</a>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Eita!</strong> Ocorreu algum problema ao inserir o professor.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('user.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nome:</strong>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="nome">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>CPF:</strong>
                            <input type="text" name="cpf" value="{{ $user->cpf }}" class="form-control" placeholder="CPF">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Endereco:</strong>
                            <input type="text" name="endereco" value="{{ $user->endereco }}" class="form-control" placeholder="Endereco">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Senha:</strong>
                            <input type="password" name="password" value="{{ $user->password }}" class="form-control" placeholder="Senha">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center my-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>

        @endif
@endif

@if(Auth::user()->role == 2 && Auth::user()->name == $user->name)
        @if($user->role == 2)
        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Editar seus dados</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/alunos/alunos"> Voltar</a>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Eita!</strong> Ocorreu algum problema ao inserir o aluno.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('user.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nome:</strong>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="nome">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>CPF:</strong>
                            <input type="text" name="cpf" value="{{ $user->cpf }}" class="form-control" placeholder="CPF">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Endereco:</strong>
                            <input type="text" name="endereco" value="{{ $user->endereco }}" class="form-control" placeholder="Endereco">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Filmes:</strong>
                            <textarea class="form-control" style="height:150px" name="filme" placeholder="Filmes">{{ $user->filme }}</textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Senha:</strong>
                            <input type="password" name="password" value="{{ $user->password }}" class="form-control" placeholder="Senha">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center my-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
        @endif
@endif

@if(Auth::user()->role == 2 && Auth::user()->name != $user->name)
    <h1>Você não tem permissão!</h1>
    <a href="/" class="btn btn-primary">Retornar</a>
@endif

@if(Auth::user()->role == 3 && Auth::user()->name == $user->name)
        @if($user->role == 3)
        <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Editar seus dados</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="/professores/professores"> Voltar</a>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Eita!</strong> Ocorreu algum problema ao inserir o professor.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('user.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nome:</strong>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="nome">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>CPF:</strong>
                            <input type="text" name="cpf" value="{{ $user->cpf }}" class="form-control" placeholder="CPF">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Endereco:</strong>
                            <input type="text" name="endereco" value="{{ $user->endereco }}" class="form-control" placeholder="Endereco">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Senha:</strong>
                            <input type="password" name="password" value="{{ $user->password }}" class="form-control" placeholder="Senha">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center my-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>

        @endif
@endif

@if(Auth::user()->role == 3 && Auth::user()->name != $user->name)
    <h1>Você não tem permissão!</h1>
    <a href="/" class="btn btn-primary">Retornar</a>
@endif

@endsection