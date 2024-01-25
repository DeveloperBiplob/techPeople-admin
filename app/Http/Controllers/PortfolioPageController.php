<?php

namespace App\Http\Controllers;

use App\Models\Frontend\Portfolio;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;

class PortfolioPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Frontend.pages.portfolio');
    }


}
