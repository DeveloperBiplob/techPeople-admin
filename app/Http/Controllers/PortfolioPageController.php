<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;

class PortfolioPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];
        $data['categories'] = Category::latest()->get();
        $data['portfolios'] = Portfolio::latest()->get();
        return view('Frontend.pages.portfolio', $data);
    }


}
