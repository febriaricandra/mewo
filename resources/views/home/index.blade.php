@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2"><img class="img-fluid rounded" src="{{asset('/img/game.png')}}" alt=""></div>
    <div class="col-md-6 col-lg-4 mb-2"><img class="img-fluid rounded" src="{{asset('/img/safe.png')}}" alt=""></div>
    <div class="col-md-6 col-lg-4 mb-2"><img class="img-fluid rounded" src="{{asset('/img/submarine.png')}}" alt=""></div>
</div>
@endsection