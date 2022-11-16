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
}

.laravel{
    color: black;
}

.subtexto{
    font-size: large;
    
}
</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar Professor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('profs.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Professor:</strong>
                {{ $prof->nome }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RP:</strong>
                {{ $prof->RP }}
            </div>
        </div>
    </div>
    @if ($prof->materia)
    <p><strong>Matéria aplicada: </strong>{{ $prof->materia->nome }}</p>
    @endif
        
    
@endsection