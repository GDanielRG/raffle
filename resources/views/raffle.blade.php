@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($raffles as $raffle)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge">{{$prizes->where('batch', $raffle->batch)->count()}}</span>
                    Rifa #{{$raffle->batch}}
                </li>
            </ul>
        </div>
    </div>
    @endforeach
</div>
@endsection
