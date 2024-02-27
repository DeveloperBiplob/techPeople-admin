<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CompanyDetail;
use App\Models\Gallery;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyDetail = CompanyDetail::first();
        $gallery = Gallery::first();
        $abouts = About::get();
        return view('Frontend.Pages.about', compact(['companyDetail', 'gallery', 'abouts']));
    }


}
