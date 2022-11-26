@extends('layouts.app')

@section('content')
  <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Lista de Todos os Alunos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('register') }}"> Criar Novo Aluno</a>
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
        @foreach ($users as $user)
        @if ($user->role == 2)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->endereco }}</td>
            <td>{{ $user->cpf }}</td>
            <td>{{ $user->filme }}</td>
      
        </tr>
        @endif
        @endforeach

    </table>
    {{ $users->links() }}

@endsection