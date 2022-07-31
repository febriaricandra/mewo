@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card">
    <div class="card-header">
        <div class="alert alert-success" role="alert">
            Congratulations! You have successfully purchased the products.
        </div>
    </div>
</div>
@endsection