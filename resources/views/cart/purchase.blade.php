@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card">
    <div class="card-header">
        <div class="alert alert-success" role="alert">
            Congratulations! You have successfully purchased the products. Order number is <b>#{{$viewData["order"]->getId()}}</b>
        </div>
    </div>
</div>
@endsection