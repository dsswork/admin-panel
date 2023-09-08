<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Language;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return to_route('categories.edit', compact(['category']))
            ->with(['message' => 'Category was created', 'type' => 'success']);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category

     */
    public function edit(Category $category)
    {
        $languages = Language::all();
        $category->title = json_decode($category->title);
        return view('categories.edit', compact(['category', 'languages']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category

     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return to_route('categories.edit', compact(['category']))
            ->with(['message' => 'Changes was saved', 'type' => 'info']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('categories.index')
            ->with(['message' => 'Category was deleted', 'type' => 'danger']);;
    }
}
