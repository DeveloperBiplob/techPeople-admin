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
                    <button onclick="colorChane()" class="filter-button active portfolio-btn-active" data-filter="all" draggable="false">All</button>
                    <button onclick="colorChane()" class="filter-button" data-filter="user-interface" draggable="false">User Interface</button>
                    <button onclick="colorChane()" class="filter-button" data-filter="web-development" draggable="false">Web Development</button>
                    <button onclick="colorChane()" class="filter-button" data-filter="app-development" draggable="false">App Development</button>
                </div>
                <i id="right" class="fa-solid fa-angle-right"></i>
                
            </div>
            <!-- Filter Button end -->

            <!-- Portfolio Cards group -->
            <div class="portfolio-cards">
                <!-- Single card -->
                <a href="" class="card gallery_product filter all app-development">
                    <div class="card-header">
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/portfolio-1.png" alt="">
                    </div>
                    <h3>Resepin App - Illustration & UI Exploration</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                </a>
                <!-- Single card end -->
                
                <!-- Single card -->
                <a href="" class="card gallery_product filter all user-interface">
                    <div class="card-header">
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/portfolio-2.png" alt="">
                    </div>
                    <h3>Resepin App - Illustration & UI Exploration</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                </a>
                <!-- Single card end -->

                <!-- Single card -->
                <a href="" class="card gallery_product filter all app-development">
                    <div class="card-header">
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/portfolio-3.png" alt="">
                    </div>
                    <h3>Resepin App - Illustration & UI Exploration</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                </a>
                <!-- Single card end -->

                <!-- Single card -->
                <a href="" class="card gallery_product filter all app-development web-development">
                    <div class="card-header">
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/portfolio-4.png" alt="">
                    </div>
                    <h3>Resepin App - Illustration & UI Exploration</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                </a>
                <!-- Single card end -->

                <!-- Single card -->
                <a href="" class="card gallery_product filter all app-development">
                    <div class="card-header">
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/portfolio-5.png" alt="">
                    </div>
                    <h3>Resepin App - Illustration & UI Exploration</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                </a>
                <!-- Single card end -->

                <!-- Single card -->
                <a href="" class="card gallery_product filter all user-interface web-development">
                    <div class="card-header">
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/portfolio-6.png" alt="">
                    </div>
                    <h3>Resepin App - Illustration & UI Exploration</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                </a>
                <!-- Single card end -->

                <!-- Single card -->
                <a href="" class="card gallery_product filter all user-interface">
                    <div class="card-header">
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/portfolio-7.png" alt="">
                    </div>
                    <h3>Resepin App - Illustration & UI Exploration</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                </a>
                <!-- Single card end -->

                <!-- Single card -->
                <a href="" class="card gallery_product filter all web-development">
                    <div class="card-header">
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/portfolio-8.png" alt="">
                    </div>
                    <h3>Resepin App - Illustration & UI Exploration</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                </a>
                <!-- Single card end -->

                <!-- Single card -->
                <a href="" class="card gallery_product filter all user-interface">
                    <div class="card-header">
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/portfolio-9.png" alt="">
                    </div>
                    <h3>Resepin App - Illustration & UI Exploration</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                </a>
                <!-- Single card end -->
            </div>
            <!-- Portfolio CardCards group end -->
        </div>
    </div>
</section>

@endsection