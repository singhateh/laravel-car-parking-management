<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        return view('categories.index', ['categories' => Category::with('user:id,name')->get(['id as cat_id', 'name', 'created_at', 'created_by'])]);
    }

    public function create()
    {
       return view('categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::updateOrCreate(['id' => $request->category_id], $request->except('category_id'));

        return redirect()->route('categories.index')->with('success', 'category Created Successfully!!');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('categories.create', compact('category'));
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category Deleted Successfully!!');
    }
}
