@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
        <div class="panel-heading">Participantes ({{$concursants->count()}})</div>

        <div class="panel-body">
            <ul class="list-group">
                @foreach($concursants as $concursant)
                    <li class="list-group-item">{{$concursant->name}}</li>
                @endforeach
            </ul>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection
