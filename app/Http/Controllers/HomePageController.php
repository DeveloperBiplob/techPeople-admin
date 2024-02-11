<?php

namespace App\Http\Controllers;

use App\Models\Frontend\home;
use App\Http\Requests\StorehomeRequest;
use App\Http\Requests\UpdatehomeRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\CompanyDetail;
use App\Models\Overview;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];
        $data['slider'] = Slider::first();
        $data['companyDetails'] = CompanyDetail::first();
        $data['services'] = Service::latest()->get();
        $data['overviews'] = Overview::latest()->get();
        $data['portfolios'] = Portfolio::latest()->get();
        $data['testimonials'] = Testimonial::latest()->get();
        $data['brands'] = Brand::latest()->get();
        $data['categories'] = Category::get();
        return view("Frontend.Pages.home", $data);
    }


}
