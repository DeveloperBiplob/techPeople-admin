<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Action\File;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\BlogCategory;
use App\Models\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];
        $data['categories'] = BlogCategory::latest()->get();
        $data['tags'] = Tag::latest()->get();
        $data['posts'] = Post::latest()->get();
        return view('Backend.Pages.Blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        $data['categories'] = BlogCategory::latest()->get();
        $data['tags'] = Tag::latest()->get();
        return view('Backend.Pages.Blog.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $file = $request->file('image');
        $post = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => File::upload($file, 'Post')
        ]);

        if ($post) {
            $post->tags()->sync($request->tags);

            $this->notificationMessage('New Post Added Successfully!');
            return redirect()->route('post.index');
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $data = [];
        $data['categories'] = BlogCategory::latest()->get();
        $data['tags'] = Tag::latest()->get();
        $data['post'] = $post;
        $data['postTags'] = $this->getIDByFunction($post->tags);
        return view('Backend.Pages.Blog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // return dd($request->all());
        if($request->has('image')){
            $old_img = $post->image;
            File::deleteFile($old_img);


        $post->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'image' => File::upload($request->file('image'), 'Post'),
        ]);


        }else{
            $post->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description
            ]);
        }
        $post->tags()->sync($request->tags);
        $this->notificationMessage('Post Update Successfully!');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $deletePost = $post->delete();
        if($deletePost){
            File::deleteFile($post->image);
            $this->notificationMessage('Post Deleted Successfully!');
            return redirect()->route('post.index');
        }
    }

    public function postStatus($slug)
    {
        $post = Post::whereSlug($slug)->first();
        if($post->status == 'Active'){
            $post->update(['status' => 'Inactive']);
        }else{
            $post->update(['status' => 'Active']);
        }

        return redirect()->route('post.index');
    }

    protected function getIDByFunction($items)
    {
        $ids = [];
        foreach ($items as $id) {
            $ids[] = $id->id;
        }

        return $ids;
    }

}
