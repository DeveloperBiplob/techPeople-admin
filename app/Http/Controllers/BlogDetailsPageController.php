<?php

namespace App\Http\Controllers;

use App\Models\Frontend\BlogDetails;
use App\Http\Requests\StoreBlogDetailsRequest;
use App\Http\Requests\UpdateBlogDetailsRequest;
use App\Models\BlogCategory;
use App\Models\Post;
use App\Models\Tag;

class BlogDetailsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Post $post)
    {
        $data['latestPosts'] = Post::with('category')->latest()->take(3)->get();
        $data['categories'] = BlogCategory::latest()->get();
        $data['tags'] = Tag::latest()->get();
        return view('Frontend.pages.blogDetails', compact('post'), $data);
    }

}
