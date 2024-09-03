@extends('layout.app')
@section('title')Creat new Category @endsection

@section('content')
<div class="container">
    <div class="card mt-4">

        <form method="POST" action="{{route('categories.store')}}">
            @csrf

            <div class="mb-3">
                <!-- photo here -->
                <img src="..." class="card-img-top" alt="...">
            </div>

            <div class="mb-3">
                <label class="form-label">Category name:</label>
                <input type="text" class="form-control" name="category_name">
            </div>

            <div class="mb-3">
                <label class="form-label">Category description:</label>
                <textarea class="form-control" rows="3" name="category_description"></textarea>
            </div>



            <button type="submit" class="btn btn-outline-success">Create</button>
        </form>

    </div>
</div>

@endsection