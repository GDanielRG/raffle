@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-success">
        <div class="panel-heading">Assitencia registrada</div>

        <div class="panel-body">
            <h1>{{$concursant->name}}</h1>
        </div>
        
    </div>
        <a class="btn btn-primary col-sm-4 col-sm-offset-4" href="/assist">Marcar otra asistencia</a>
        </div>
    </div>
</div>
@endsection
