@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($raffles as $raffle)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge" style="background-color: #69ab69;">{{$prizes->where('batch', $raffle->batch)->count()}} premios</span>
                    Rifa #{{$raffle->batch}} - {{$raffle->date->diffForHumans()}}
                    @if(!$raffle->raffled)<div>
                        <form action="/raffled/{{$raffle->id}}" method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-success" href="adsa">Riffar
                                
                            </button>
                        </form>
                    </div>@endif
                </li>
            </ul>
        </div>
    </div>
    @endforeach
</div>
@endsection
