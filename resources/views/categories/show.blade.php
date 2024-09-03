@extends('layout.app')
@section('title')View Category @endsection

@section('content')
<div class="container">
<div class="card mt-4">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Category name:{{$category->category_name}}</h5>
    <p class="card-text">Category description:{{$category->category_description}}</p>
    <a href="{{route('categories.index')}}" class="btn btn-outline-warning">Back</a>

  </div>
</div>
</div>

@endsection