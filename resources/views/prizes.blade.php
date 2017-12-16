@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
        <div class="panel-heading">Premios ({{$prizes->count()}})</div>

        <div class="panel-body">
            <ul class="list-group">
                @foreach($prizes as $prize)
                    <li class="list-group-item">{{$prize->name}}</li>
                @endforeach
            </ul>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection
