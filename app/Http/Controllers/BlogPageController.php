<?php

namespace App\Http\Controllers;

use App\Models\Frontend\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class BlogPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Frontend.pages.blog');
    }


}
