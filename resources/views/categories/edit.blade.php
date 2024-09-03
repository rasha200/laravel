@extends('layout.app')
@section('title')Edit Category @endsection

@section('content')
<div class="container">
    <div class="card mt-4">

        <form method="POST" action="{{route('categories.update',$category->id)}}">
            @csrf
@method('PUT')
            <div class="mb-3">
                <!-- photo here -->
                <img src="..." class="card-img-top" alt="...">
            </div>

            <div class="mb-3">
                <label class="form-label">Category name:</label>
                <input type="text" class="form-control" name="category_name" value="{{$category->category_name}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Category description:</label>
                <textarea class="form-control" rows="3" name="category_description">{{$category->category_description}}</textarea>
            </div>



            <button type="submit" class="btn btn-outline-info">Save</button>
        </form>

    </div>
</div>

@endsection