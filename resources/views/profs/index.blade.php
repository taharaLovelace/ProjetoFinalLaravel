@extends('profs.layout')

@section('content')

<style>
    body{
    background-color: lightskyblue;
}

.image{
    height: 60%;
}

.title{
    font-size: xx-large;
    color: black;
    font-family: 'Roboto Mono', monospace;
    
}

.laravel{
    color: black;
    font-family: 'Roboto Mono', monospace;
}

.subtexto{
    font-size: large;
    
}
</style>
<div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2 class="laravel my-2">Tabelas de professores</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success my-3" href="{{ route('profs.create') }}"> Adicione novo professor</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" style="border-color:black;">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>RP</th>
            <th width="280px">Opções</th>
        </tr>
        @foreach ($profs as $prof)
        <tr>
            <td>{{ $prof->id }}</td>
            <td>{{ $prof->nome }}</td>
            <td>{{ $prof->RP }}</td>
            <td>
                <form action="{{ route('profs.destroy',$prof->id) }}" method="POST">
                    <a class="btn" style="background-color:green" href="{{ route('profs.show',$prof->id) }}">Mostrar</a>
                    <a class="btn btn-primary" href="{{ route('profs.edit',$prof->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach

</table>
{{ $profs->links() }}



@endsection