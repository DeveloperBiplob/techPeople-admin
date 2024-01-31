<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Action\File;
use App\Models\Process;
use App\Http\Requests\StoreProcessRequest;
use App\Http\Requests\UpdateProcessRequest;
use App\Models\Service;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::latest()->get();
        return view('Backend.Pages.Service.WorkProcess.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProcessRequest $request)
    {
        // return $request->all();
        $file = $request->file('image');
        Process::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'service_id' => $request->service_id,
            'image' => File::upload($file, 'WorkProcesses')
        ]);

        $this->notificationMessage('New Work Process Added Successfully!');
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Process $process)
    {
        return view('Backend.Pages.Service.WorkProcess.show', compact('process'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Process $process)
    {
        $services = Service::latest()->get();
        return view('Backend.Pages.Service.WorkProcess.edit', compact('process', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProcessRequest $request, Process $process)
    {
        $file = $request->file('image');
        if($request->has('image')){
            $old_img = $process->image;
            File::deleteFile($old_img);


        $process->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'service_id' => $request->service_id,
            'image' => File::upload($file, 'WorkProcesses')
        ]);

        }else{
            $process->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,
                'service_id' => $request->service_id
            ]);
        }

        $this->notificationMessage('Work Process Update Successfully!');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Process $process)
    {
        $deletePost = $process->delete();
        if($deletePost){
            File::deleteFile($process->image);
            $this->notificationMessage('Work Process Deleted Successfully!');
            return redirect()->route('service.index');
        }
    }
}
