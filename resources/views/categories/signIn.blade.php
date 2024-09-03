<div class="container">
    <div class="card mt-4">

        <form method="POST" action="{{route('products.store')}}">
            @csrf

            
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="product_name">
            </div>

            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="text" class="form-control" name="product_name">

            </div>

            <div class="mb-3">
                <label class="form-label">password</label>
                <input type="text" class="form-control" name="product_price">
            </div>

            <div class="mb-3">
                <label class="form-label">Category name:</label>
                <select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-outline-success">Create</button>
        </form>

    </div>
</div>

@endsection