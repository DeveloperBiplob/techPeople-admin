@extends('Frontend.app')
@section('title', 'Portfolio')
@section('app-content')

<!-- common hero -->
<section class="default-hero" style="  background-image: url('{{ asset('Frontend')}}/assets/img/gallery/about-1.png');">
    <h1>Portfolio</h1>
</section>
<!-- common end -->
<section class="portfolio">
    <div class="container">
        <div class="portfolio-content">
            <span class="short-title text-center">Case Study</span>
            <h1 class="title text-center">Our Recent Project</h1>
            <p class="sub-title text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, explicabo!</p>

            <!-- Filter Button -->
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <div class="portfolio-btn-group">
                    {{-- <button onclick="colorChane()" class="filter-button active portfolio-btn-active" data-filter="all" draggable="false">All</button> --}}
                    @foreach ($categories as $category)
                    <button id="{{ $category->slug }}" onclick="colorChane('{{ $category->slug }}')" class="filter-button" data-filter="{{ $category->slug }}" draggable="false">{{ $category->name }}</button> 
                    @endforeach
                </div>
                <i id="right" class="fa-solid fa-angle-right"></i>
                
            </div>
            <!-- Filter Button end -->

            <!-- Portfolio Cards group -->
            <div class="portfolio-cards">
                <!-- Single card -->
                @foreach ($portfolios as $portfolio)
                <a target="_blank" href="{{ $portfolio->link }}" class="card gallery_product filter all {{ $portfolio->category->slug }}">
                    <div class="card-header">
                        <img src="{{ asset($portfolio->image) }}" alt="">
                    </div>
                    <h3>{{ $portfolio->title }}</h3>
                    <p>{!! Str::limit($portfolio->description, 150) !!}</p>
                </a>     
                @endforeach
                <!-- Single card end -->
            </div>
            <!-- Portfolio CardCards group end -->
        </div>
    </div>
</section>

@endsection