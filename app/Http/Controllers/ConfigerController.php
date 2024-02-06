<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Action\File;
use App\Models\Configer;
use App\Http\Requests\StoreConfigerRequest;
use App\Http\Requests\UpdateConfigerRequest;

class ConfigerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $configer = Configer::latest()->first();
        return view('Backend.Pages.Configure.index', compact('configer'));
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
    public function store(StoreConfigerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Configer $configer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Configer $configer)
    {
        return view('Backend.Pages.Configure.edit', compact('configer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConfigerRequest $request, Configer $configer)
    {
        if($request->hasFile('logo')){
            $old_image = $configer->logo;
            File::deleteFile($old_image);

            $configer->update([
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'companydetail' => $request->companydetail,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'youtube' => $request->youtube,
                'instagram' => $request->instagram,
                'video' => $request->video,
                'logo' => File::upload($request->file('logo'), 'Configuration')
            ]);

        }else{
            $configer->update([
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'companydetail' => $request->companydetail,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'youtube' => $request->youtube,
                'instagram' => $request->instagram,
                'video' => $request->video
            ]);

        }
        $this->notificationMessage('Website Configuration Update Successfully!');
        return redirect()->route('configer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Configer $configer)
    {
        //
    }
}
