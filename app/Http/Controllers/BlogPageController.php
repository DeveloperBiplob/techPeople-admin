<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\Post;
use App\Models\Tag;

class BlogPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];
        $data['randomPosts'] = Post::with('category')->latest()->inRandomOrder()->paginate(3);
        $data['latestPosts'] = Post::with('category')->latest()->take(3)->get();
        $data['categories'] = BlogCategory::latest()->get();
        $data['tags'] = Tag::latest()->get();
        return view('Frontend.pages.blog', $data);
    }

    public function categoryWisePost(BlogCategory $blogCategory)
    {

        $data = [];
        $data['randomPosts'] = $blogCategory->posts()->latest()->paginate(3);
        $data['latestPosts'] = Post::with('category')->latest()->take(3)->get();
        $data['categories'] = BlogCategory::latest()->get();
        $data['tags'] = Tag::latest()->get();
        return view('Frontend.pages.blog', $data);
    }

    public function tagWisePost(Tag $tag)
    {
        $data = [];
        $data['randomPosts'] = $tag->posts()->latest()->paginate(3);
        $data['latestPosts'] = Post::with('category')->latest()->take(3)->get();
        $data['categories'] = BlogCategory::latest()->get();
        $data['tags'] = Tag::latest()->get();
        return view('Frontend.pages.blog', $data);
    }


}
