<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Overview;
use App\Http\Requests\StoreOverviewRequest;
use App\Http\Requests\UpdateOverviewRequest;

class OverviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $overviews = Overview::get();
        return view('Backend.Pages.Overview.index', compact('overviews'));
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
    public function store(StoreOverviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Overview $overview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Overview $overview)
    {
        return view('Backend.Pages.Overview.edit', compact('overview'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOverviewRequest $request, Overview $overview)
    {
        $overview->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'amount' => $request->amount
        ]);

        $this->notificationMessage('Project Overview Update Successfully!');
        return redirect()->route('overview.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Overview $overview)
    {
        //
    }
}
