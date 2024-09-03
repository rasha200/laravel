<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allpro = Product::all();
        return view('products.index', ['products' => $allpro]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allcat = Category::all();
        return view('products.create', ['categories' => $allcat]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
            'product_name'=>$request->input('product_name'),
            'product_description'=>$request->input('product_description'),
            'product_price'=>$request->input('product_price'),
            'category_id'=>$request->input('category_id'),
        ]);
        return to_route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
       return view('products.show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $allcat = Category::all();
       return view('products.edit',['product'=>$product,'categories' => $allcat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update([
            'product_name'=>$request->input('product_name'),
            'product_description'=>$request->input('product_description'),
            'product_price'=>$request->input('product_price'),
            'category_id'=>$request->input('category_id'),
        ]);
        return to_route('products.index',['product'=>$product]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index');
    }
}
