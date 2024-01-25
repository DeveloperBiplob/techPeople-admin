<?php

namespace App\Http\Controllers;

use App\Models\Frontend\home;
use App\Http\Requests\StorehomeRequest;
use App\Http\Requests\UpdatehomeRequest;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Frontend.Pages.home");
    }


}
