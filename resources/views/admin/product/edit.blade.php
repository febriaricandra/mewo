@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Edit product
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        <form action="{{route('admin.product.update', ['id'=>$viewData["product"]->getId()])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        <div class="row">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">
                        Name:
                    </label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input type="text" name="name" value="{{$viewData['product']->getName()}}" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">
                        price:
                    </label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input type="text" name="price" value="{{$viewData['product']->getPrice()}}" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Image:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                &nbsp;
            </div>
        </div>
        <div class="mb-3 d-flex">
            <label class="form-label">Description:</label>
            <textarea name="description" rows="3">{{$viewData["product"]->getDescription()}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>
@endsection