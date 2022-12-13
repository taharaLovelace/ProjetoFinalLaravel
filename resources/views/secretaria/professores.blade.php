@extends('layouts.barrainicial')

@section('title', 'Lista de Professores')

@section('content')
  <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Lista de Todos os Professores</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('register') }}"> Criar Novo Professor</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereco</th>
            <th>CPF</th>
            <th>Filme</th>
            <th width="280px">Action</th>
        </tr>
        @if(Auth::user()->role == 1)
        @foreach ($users as $user)
        @if ($user->role == 3)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->endereco }}</td>
            <td>{{ $user->cpf }}</td>
            <td>{{ $user->filme }}</td>
            <td>
                
            <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                    <a class="btn" style="background-color:green" href="{{ route('user.show',$user->id) }}">Mostrar</a>
                    <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Editar</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endif
        @endforeach
        @endif

        @if(Auth::check() && Auth::user()->role == 3)
        <tr>
            <td>{{ Auth::user()->id }}</td>
            <td>{{ Auth::user()->name }}</td>
            <td>{{ Auth::user()->email }}</td>
            <td>{{ Auth::user()->endereco }}</td>
            <td>{{ Auth::user()->cpf }}</td>
            <td>{{ Auth::user()->filme }}</td>
            <td>
                
            <form action="{{ route('user.destroy',Auth::user()->id) }}" method="POST">
                    <a class="btn" style="background-color:green" href="{{ route('user.show',Auth::user()->id) }}">Mostrar</a>
                    <a class="btn btn-primary" href="{{ route('user.edit',Auth::user()->id) }}">Editar</a>
                    
                </form>
            </td>
        </tr>

        @endif

    </table>
    {{ $users->links() }}

@endsection