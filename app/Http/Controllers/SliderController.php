<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Action\File;
use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::latest()->first();
        return view('Backend.Pages.Slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('Backend.Pages.Slider.update', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        // return $request->all();
        if($request->hasFile('image')){
            $old_image = $slider->image;
            File::deleteFile($old_image);

            $slider->update([
                'sub_title' => $request->sub_title,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,
                'image' => File::upload($request->file('image'), 'Sliders')
            ]);

        }else{
            $slider->update([
                'sub_title' => $request->sub_title,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,
            ]);

        }
        $this->notificationMessage('Slider Update Successfully!');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
