@extends('layout/app')
@section('title') Categories @endsection

@section('content')
<a href="{{route('categories.create')}}" class="btn btn-outline-success">Sign</a>
<div class="container">
<div class="card mt-4">
<a href="{{route('categories.create')}}" class="btn btn-outline-success">Creat new Category</a>

</div>
</div>

@foreach ($categories as $category)


<div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Category name:{{$category->category_name}}</h5>
    <p class="card-text">Category description:{{$category->category_description}}</p>

    <a href="{{route('categories.show' , $category->id)}}" class="btn btn-outline-warning">view</a>
    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-outline-info">update</a>
    <form action="{{route('categories.destroy', $category->id)}}" method="POST">
      @csrf
      @method('delete')
    <button type="submit" class="btn btn-outline-danger">delete</button>
    </form>
  </div>
</div>

@endforeach

@endsection