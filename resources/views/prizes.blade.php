@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($raffles as $raffle)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Premios de rifa #{{$raffle->batch}} ({{$prizes->where('batch', $raffle->batch)->count()}})</div>

                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($prizes->where('batch', $raffle->batch) as $prize)
                        <li class="list-group-item">{{$prize->name}}  <p style="color:grey;">Rifa #{{$prize->batch}}</p></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
