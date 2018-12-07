@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
        <div class="panel-heading">Checar premio</div>

        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ url('check') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="number" class="col-md-4 control-label">Número de nómina</label>

                    <div class="col-md-6">
                        <input id="number" type="text" class="form-control" name="number" value="{{ old('number') }}" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Checar
                        </button>
                    </div>
                </div>
            </form>

            <br>

            @if(!empty($concursant))
                @if($concursant->prize)
                <div class="alert alert-success">
                    <p>{{$concursant->name}}</p>
                    <strong>Ganaste!</strong> {{$concursant->prize->name}} ({{$concursant->prize->article_no}})
                </div>
                @else

                <div class="alert alert-danger">
                    <p>{{$concursant->name}}</p>
                    <strong>Ni modo!</strong> No hay premio :(
                </div>
                @endif
            @endif
        </div>
    </div>
        </div>
    </div>
</div>
@endsection
