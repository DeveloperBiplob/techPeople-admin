<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Action\File;
use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Process;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Processes = Process::get();
        $services = Service::get();
        return view("Backend.Pages.Service.index", compact('services', 'Processes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Pages.Service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        Service::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'image' => File::upload($request->file('image'), 'Services')
        ]);
        $this->notificationMessage('New Service Added Successfully!');
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view("Backend.Pages.Service.edit", compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        if($request->hasFile('image')){
            $old_image = $service->image;
            File::deleteFile($old_image);

            $service->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,
                'image' => File::upload($request->file('image'), 'Services')
            ]);

        }else{
            $service->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description
            ]);

        }
        $this->notificationMessage('service Update Successfully!');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $deleteService = $service->delete();
        if($deleteService){
            File::deleteFile($service->image);
            $this->notificationMessage('Service Deleted Successfully!');
            return redirect()->route('service.index');
        }
    }
}
