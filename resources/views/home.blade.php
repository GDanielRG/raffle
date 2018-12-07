@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3"><i class="fa fa-comments fa-5x"></i></div>
        <div class="col-xs-9 text-right">
          <div id="participants" class="huge">{{$concursants->count()}}</div>
          <div>Participantes</div>        </div>
      </div>
    </div><a href="/concursants">
      <div class="panel-footer">
      <img class="img-responsive text-center" src="https://media.gettyimages.com/photos/group-of-multiethnic-diverse-mixed-occupation-people-picture-id498032555?b=1&k=6&m=498032555&s=612x612&w=0&h=rTTeaOKKCTzIcAzU2a7pSlNl9IaGWNuh26mORFWjzoY=" alt="Chania">
    <br>      
      <span class="pull-left">Ver detalles</span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
        <div class="clearfix"></div>
      </div></a>
  </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3"><i class="fa fa-tasks fa-5x"></i></div>
        <div class="col-xs-9 text-right">
          <div id="prizes" class="huge">{{$prizes->count()}}</div>
          <div>Premios</div>
        </div>
      </div>
    </div><a href="/prizes">
      <div class="panel-footer">
      <img class="img-responsive text-center" src="http://i.telegraph.co.uk/multimedia/archive/02416/Christmas_presents_2416800b.jpg" alt="Chania">
      <br>
      <span class="pull-left">Ver detalles</span><span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
        <div class="clearfix"></div>
      </div></a>
  </div>
</div>
</div>
</div>
<br>
</div>
        <a class="btn btn-success col-sm-4 col-sm-offset-4 huge" href="/raffles">Riffar!</a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
  setInterval(function() {
    cache_clear()
  }, 10000);
});

function cache_clear() {
  window.location.reload(true);
  // window.location.reload(); use this if you do not remove cache
}
    </script>
@endsection
