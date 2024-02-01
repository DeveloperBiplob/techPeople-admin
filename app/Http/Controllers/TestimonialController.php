<?php

namespace App\Http\Controllers;

use App\Action\File;
use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('Backend.Pages.Testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Pages.Testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        Testimonial::create([
            'name' => $request->name,
            'slug' => $request->name,
            'designation' => $request->designation,
            'description' => $request->description,
            'image' => File::upload($request->file('image'), 'Testimonials')
        ]);
        $this->notificationMessage('New Testimonial Added Successfully!');
        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('Backend.Pages.Testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('Backend.Pages.Testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        if($request->hasFile('image')){
            $old_image = $testimonial->image;
            File::deleteFile($old_image);

            $testimonial->update([
                'name' => $request->name,
                'slug' => $request->name,
                'designation' => $request->designation,
                'description' => $request->description,
                'image' => File::upload($request->file('image'), 'Testimonials')
            ]);

        }else{
            $testimonial->update([
                'name' => $request->name,
                'slug' => $request->name,
                'designation' => $request->designation,
                'description' => $request->description,
            ]);

        }
        $this->notificationMessage('Testimonial Update Successfully!');
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $deleteTestimonial = $testimonial->delete();
        if($deleteTestimonial){
            File::deleteFile($testimonial->image);
            $this->notificationMessage('Testimonial Deleted Successfully!');
            return redirect()->route('testimonial.index');
        }
    }
}
