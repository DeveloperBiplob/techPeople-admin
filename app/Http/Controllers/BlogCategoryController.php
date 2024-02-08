<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\BlogCategory;
use App\Http\Requests\StoreBlogCategoryRequest;
use App\Http\Requests\UpdateBlogCategoryRequest;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = BlogCategory::latest()->get();
        return view('Backend.Pages.Blog.Category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogCategoryRequest $request)
    {
        BlogCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        $this->notificationMessage('New Category Added Successfully!');
        return redirect()->route('blogcategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogCategoryRequest $request, BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogCategory $blogcategory)
    {
        $blogcategory->delete();
        $this->notificationMessage('Category Deleted Successfully!');
        return redirect()->route('blogcategory.index');
    }
}
