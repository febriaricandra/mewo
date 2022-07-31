@extends('layouts.app')
@section('title',$viewData["title"])
@section('subtitle',$viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img class="img-fluid rounded-start" src="{{asset('/storage/'.$viewData["product"]->getImage())}}" alt="image">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{$viewData["product"]->getName()}}(${{$viewData["product"]->getPrice()}})
                </h5>
                <p class="card-text">{{$viewData["product"]->getDescription()}}</p>
                <p class="card-text">
                    <form method="POST" action="{{route('cart.add',['id'=>$viewData['product']->getId()])}}">
                    <div class="row">
                        @csrf
                        <div class="col-auto">
                            <div class="input-group col-auto">
                                <div class="input-group-text">Quantity</div>
                                <input type="number" name="quantity" min="1" max="10" value="1" class="form-control quantity-input">
                            </div>
                            <div class="col-auto">
                                <button class="btn bg-primary text-white" type="submit">add to cart</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection