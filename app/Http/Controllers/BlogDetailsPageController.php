<?php

namespace App\Http\Controllers;

use App\Models\Frontend\BlogDetails;
use App\Http\Requests\StoreBlogDetailsRequest;
use App\Http\Requests\UpdateBlogDetailsRequest;

class BlogDetailsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Frontend.pages.blogDetails');
    }

}
