<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $allcat = Category::all();
    //    dd($allcat);
       return view('categories.index' , ['categories' => $allcat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create([
            'category_name'=>$request->input('category_name'),
            'category_description'=>$request->input('category_description'),
        ]);

        return to_route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // dd($category);
        return view('categories.show',['category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->update([
            'category_name'=>$request->input('category_name'),
            'category_description'=>$request->input('category_description')
        ]);
        return to_route('categories.index', ['category'=>$category]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('categories.index');
    }
}
