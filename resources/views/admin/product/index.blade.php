@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Create Product
        </div>
        <div class="card-body">
            @if($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif

            <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Name:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input class="form-control" type="text" name="name" value={{old('name')}}>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input class="form-control" type="text" name="price" value={{old('price')}}>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-6 col-md-6 col-sm-12 col-form-label">Image:</label>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description:</label>
                    <textarea class="form-control" name="description" rows="3">{{old('description')}}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- ** -->
    <div class="card">
        <div class="card-header">
            Manage Products
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData["products"] as $product)
                    <tr>
                        <td>{{$product->getId()}}</td>
                        <td>{{$product->getName()}}</td>
                        <td>
                                <a href="{{route('admin.product.edit', ['id'=>$product->getId()])}}" class="btn btn-primary">
                                    <i class="bi-pencil"></i>
                                </a>
                        </td>
                        <td>
                            <form action="{{route('admin.product.delete', $product->getId())}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection