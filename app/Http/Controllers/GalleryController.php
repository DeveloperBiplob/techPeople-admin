<?php

namespace App\Http\Controllers;

use App\Action\File;
use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
    public function store(StoreGalleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('Backend.Pages.Gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        if($request->hasFile('image_one') && $request->hasFile('image_two') && $request->hasFile('image_three')){
            File::deleteFile($gallery->image_one);
            File::deleteFile($gallery->image_two);
            File::deleteFile($gallery->image_three);
            $gallery->update([
                'image_one' => File::upload($request->file('image_one'), 'Galleries'),
                'image_two' => File::upload($request->file('image_two'), 'Galleries'),
                'image_three' => File::upload($request->file('image_three'), 'Galleries')
            ]);

        }elseif($request->hasFile('image_one')){
            $old_image = $gallery->image_one;
            File::deleteFile($old_image);

            $gallery->update([
                'image_one' => File::upload($request->file('image_one'), 'Galleries')
            ]);

        }elseif($request->hasFile('image_two')){
            $old_image = $gallery->image_two;
            File::deleteFile($old_image);

            $gallery->update([
                'image_two' => File::upload($request->file('image_two'), 'Galleries')
            ]);

        }elseif($request->hasFile('image_three')){
            $old_image = $gallery->image_three;
            File::deleteFile($old_image);

            $gallery->update([
                'image_three' => File::upload($request->file('image_three'), 'Galleries')
            ]);

        }
        $this->notificationMessage('About Gallery Update Successfully!');
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
