@extends('Frontend.app')
@section('title', 'Service')
@section('app-content')

<!-- common hero -->
<section class="default-hero" style="  background-image: url('{{ asset('Frontend')}}/assets/img/gallery/about-1.png');">
    <h1>Service</h1>
</section>
<!-- common end -->
<section class="service-page">
    <div class="service">
        <div class="container">
            <div class="service-content">
                <span class="short-title text-center">Service List</span>
                <h1 class="title text-center">What we are offering</h1>
                <p class="sub-title text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, explicabo!</p>

                <!-- Service group -->
                <div class="services">
                    <div class="card">
                        <div class="numbaring">
                            <h1>01</h1>
                        </div>
                        <img src="{{ asset('Frontend')}}/assets/img/service/service-icon-1.png" alt="">
                        <h3>Modern Website Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates, veritatis nisi quas excepturi debitis</p>
                        <a href="">Read More...</a>
                    </div>
                    <div class="card">
                        <div class="numbaring">
                            <h1>02</h1>
                        </div>
                        <img src="{{ asset('Frontend')}}/assets/img/service/service-icon-2.jpg" alt="">
                        <h3>Modern Website Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates, veritatis nisi quas excepturi debitis</p>
                        <a href="">Read More...</a>
                    </div>
                    <div class="card">
                        <div class="numbaring">
                            <h1>03</h1>
                        </div>
                        <img src="{{ asset('Frontend')}}/assets/img/service/service-icon-3.png" alt="">
                        <h3>Modern Website Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates, veritatis nisi quas excepturi debitis</p>
                        <a href="">Read More...</a>
                    </div>
                    <div class="card">
                        <div class="numbaring">
                            <h1>04</h1>
                        </div>
                        <img src="{{ asset('Frontend')}}/assets/img/service/service-icon-4.png" alt="">
                        <h3>Modern Website Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates, veritatis nisi quas excepturi debitis</p>
                        <a href="">Read More...</a>
                    </div>
                    <div class="card">
                        <div class="numbaring">
                            <h1>05</h1>
                        </div>
                        <img src="{{ asset('Frontend')}}/assets/img/service/service-icon-5.png" alt="">
                        <h3>Modern Website Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates, veritatis nisi quas excepturi debitis</p>
                        <a href="">Read More...</a>
                    </div>
                    <div class="card">
                        <div class="numbaring">
                            <h1>06</h1>
                        </div>
                        <img src="{{ asset('Frontend')}}/assets/img/service/service-icon-6.png" alt="">
                        <h3>Modern Website Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates, veritatis nisi quas excepturi debitis</p>
                        <a href="">Read More...</a>
                    </div>
                </div>
                <!-- Service group end -->
            </div>
        </div>
    </div>
</section>

@endsection