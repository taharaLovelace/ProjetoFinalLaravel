@extends('layouts.paginainicial')

@section('title', 'Escola Técnica de Informatica')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um curso</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>




@endsection

