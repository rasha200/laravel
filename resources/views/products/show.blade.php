@extends('layout.app')
@section('title')View Product @endsection

@section('content')
<div class="container">
<div class="card mt-4">

  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Product name:{{$product->product_name}}</h5>
    <p class="card-text">Product description:{{$product->product_description}}</p>
    <p class="card-text">Product price:{{$product->product_price}}</p>
    <p class="card-text">Category name:{{$product->category? $product->category->category_name : 'not found'}}</p>

    <a href="{{route('products.index')}}" class="btn btn-outline-warning">Back</a>

  
</div>
</div>
</div>

@endsection