<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServicePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('Frontend.Pages.service', compact('services'));
    }

    public function serviceProcess(Service $service)
    {
        return view('Frontend.Pages.servicedetail', compact('service'));
    }

}
