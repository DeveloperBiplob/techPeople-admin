<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Action\File;
use App\Models\Portfolio;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Category;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('Backend.Pages.Portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('Backend.Pages.Portfolio.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioRequest $request)
    {
        Portfolio::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'image' => File::upload($request->file('image'), 'Portfolios')
        ]);
        $this->notificationMessage('New Portfolio Added Successfully!');
        return redirect()->route('portfolio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        return view('Backend.Pages.Portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        $categories = Category::latest()->get();
        return view('Backend.Pages.Portfolio.edit', compact('portfolio', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $file = $request->file('image');
        if($request->has('image')){
            $old_img = $portfolio->image;
            File::deleteFile($old_img);


        $portfolio->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image' => File::upload($file, 'Portfolios')
        ]);

        }else{
            $portfolio->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description,
                'category_id' => $request->category_id
            ]);
        }

        $this->notificationMessage('Portfolio Update Successfully!');
        return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $deletePortfolio = $portfolio->delete();
        if($deletePortfolio){
            File::deleteFile($portfolio->image);
            $this->notificationMessage('Portfolio Deleted Successfully!');
            return redirect()->route('portfolio.index');
        }
    }
}
