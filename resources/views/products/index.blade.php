@extends('layout/app')
@section('title') Products @endsection

@section('content')
<div class="container">
<div class="card mt-4">
<a href="{{route('products.create')}}" class="btn btn-outline-success">Creat new Product</a>
</div>
</div>


@foreach ($products as $product)


<div class="card">
  <img src="..." class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">Product name:{{$product->product_name}}</h5>
    <p class="card-text">Product description:{{$product->product_description}}</p>
    <p class="card-text">Product price:{{$product->product_price}}</p>
    <p class="card-text">Category name:{{$product->category? $product->category->category_name : 'not found'}}</p>
    <p class="card-text">created at:{{$product->created_at}}</p>

    <a href="{{route('products.show', $product->id)}}" class="btn btn-outline-warning">View</a>
    <a href="{{route('products.edit', $product->id)}}" class="btn btn-outline-info">Update</a>

   <form action="{{route('products.destroy',$product->id)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-outline-danger">Delete</a>
    </form>
  </div>
</div>
@endforeach

@endsection