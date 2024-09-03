@extends('layout.app')
@section('title')Edit Product @endsection

@section('content')
<div class="container">
    <div class="card mt-4">

        <form method="POST" action="{{route('products.update',$product->id)}}">
            @csrf
@method('PUT')
            <div class="mb-3">
                <!-- photo here -->
                <img src="..." class="card-img-top" alt="...">
            </div>

            <div class="mb-3">
                <label class="form-label">Product name:</label>
                <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Product description:</label>
                <textarea class="form-control" rows="3" name="product_description">{{$product->product_description}}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Product price:</label>
                <input type="text" class="form-control" name="product_price" value="{{$product->product_price}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Category name:</label>
                <select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                    <option @selected($category->id == $product->category_id) value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-outline-info">Save</button>
        </form>

    </div>
</div>

@endsection