<?php

namespace App\Http\Controllers;

use App\Models\Frontend\BlogDetails;
use App\Http\Requests\StoreBlogDetailsRequest;
use App\Http\Requests\UpdateBlogDetailsRequest;

class BlogDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Frontend.pages.blogDetails');
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
    public function store(StoreBlogDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogDetails $blogDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogDetails $blogDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogDetailsRequest $request, BlogDetails $blogDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogDetails $blogDetails)
    {
        //
    }
}
