@extends('layouts.paginainicial')

@section('content')
  <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Lista de Todos os Cursos</h2>
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
            <th width="280px">Action</th>
        </tr>
        @foreach ($cursos as $curso)
        <tr>
            <td>{{ $curso->id }}</td>
            <td>{{ $curso->name }}</td>
            <td>
                
            <form action="{{ route('curso.destroy',$curso->id) }}" method="POST">
                    <a class="btn" style="background-color:green" href="{{ route('curso.show',$curso->id) }}">Mostrar</a>
                    <a class="btn btn-primary" href="{{ route('curso.edit',$curso->id) }}">Editar</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $cursos->links() }}

@endsection