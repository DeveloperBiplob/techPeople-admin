<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Action\File;
use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\CompanyDetail;
use App\Models\Gallery;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::first();
        $companyDetail = CompanyDetail::first();
        $abouts = About::get();
        return view('Backend.Pages.About.index', compact('abouts', 'companyDetail', 'gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Pages.About.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
        About::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'image' => File::upload($request->file('image'), 'Abouts')
        ]);
        $this->notificationMessage('New About Added Successfully!');
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('Backend.Pages.About.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('Backend.Pages.About.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        if($request->hasFile('image')){
            $old_image = $about->image;
            File::deleteFile($old_image);

            $about->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,
                'image' => File::upload($request->file('image'), 'Abouts')
            ]);

        }else{
            $about->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description
            ]);

        }
        $this->notificationMessage('About Update Successfully!');
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $deleteAbout = $about->delete();
        if($deleteAbout){
            File::deleteFile($about->image);
            $this->notificationMessage('About Deleted Successfully!');
            return redirect()->route('about.index');
        }
    }
    
    /**
     * About Company
     */
    public function companyView(CompanyDetail $companyDetail)
    {
        $about  = $companyDetail;
        return view('Backend.Pages.About.show', compact('about'));
    }

    public function companyEdit(CompanyDetail $companyDetail)
    {
        $about  = $companyDetail;
        return view('Backend.Pages.About.companyEdit', compact('about'));
    }
    public function companyUpdate(Request $request, CompanyDetail $companyDetail)
    {
        if($request->hasFile('image')){
            $old_image = $companyDetail->image;
            File::deleteFile($old_image);

            $companyDetail->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,
                'image' => File::upload($request->file('image'), 'CompanyDetail')
            ]);

        }else{
            $companyDetail->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description
            ]);

        }
        $this->notificationMessage('Company Details Update Successfully!');
        return redirect()->route('about.index');
    }
}
