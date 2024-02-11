@extends('Frontend.app')
@section('title', 'Home')
@section('app-content')
        <!-- Slider -->
        <section class="slider" style="background-image: url({{ asset($slider->image) }})">
            <div class="container">
                <div class="slider-content">
                    <span class="short-title-slider">{{ $slider->sub_title }}</span>
                    <h1>{{ $slider->title }}</h1>
                    <p>{{ $slider->description }}</p>
                    <div class="slider-btn-section">
                        <a class="btn"href="{{ route('service') }}">Explore Our Work</a>
                        <div onclick="showVideoModal()" class="paly-btn"><a href="#"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Slider -->
    
        <!-- About -->
        <section class="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-left">
                        <img src="{{ asset('Frontend') }}/assets/img/gallery/about.png" alt="">
                    </div>
                    <div class="about-right">
                        <span class="short-title">Our Story</span>
                        <h1 class="title">About techPeople</h1>
                        <p class="sub-title">{{ $companyDetails->title }}</p>
    
                        <!-- Mini Device -->
                        <img class="about-img-minidevice" src="{{ asset('Frontend') }}/assets/img/gallery/about.png" alt="">
                        <!-- Mini Device end-->
    
                        <p>{!! $companyDetails->description !!}</p>   

                        <a href="{{ route('about') }}" class="btn">Learn More</a>
    
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->
    
        <!-- Service -->
        <section class="service">
            <div class="container">
                <div class="service-content">
                    <span class="short-title text-center">Service List</span>
                    <h1 class="title text-center">What we are offering</h1>
                    <p class="sub-title text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, explicabo!</p>
    
                    <!-- Service group -->
                    <div class="services">
                        @foreach ($services as $service)
                        <div class="card">
                            <div class="numbaring">
                                <h1>0{{ $loop->index + 1 }}</h1>
                            </div>
                            <img src="{{ asset($service->image) }}" alt="">
                            <h3>{{ $service->title }}</h3>
                            <p>{!! Str::limit($service->description, 150) !!}</p>
                            <a href="">Read More...</a>
                        </div>
                        @endforeach
                    </div>
                    <!-- Service group end -->
                </div>
            </div>
        </section>
        <!-- Service end -->
    
        <!-- Project -->
        <section class="project">
            <div class="container">
                <div class="project-content">
                    <!-- Single Project -->
                    @foreach ($overviews as $overview)
                    <div class="card">
                        <div class="top">
                            <img src="{{ asset($overview->image) }}" alt="">
                            <h1>{{ $overview->amount }}+</h1>
                        </div>
                        <p>{{ $overview->title }}</p>
                    </div>
                    @endforeach
                    <!-- Single Project end -->
                </div>
            </div>
        </section>
        <!-- Project end -->
    
        <!-- Portfolio -->
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
        <!-- Portfolio end -->
    
        <!-- Client Feedback -->
        <section class="clnt-feedback">
            <div class="container">
                <div class="clnt-feedback-content">
                    <span class="short-title text-center">Client's Feedback</span>
                    <h1 class="title text-center">What our Client say</h1>
                    <p class="sub-title text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, explicabo!</p>
    
                    <div class="feedbacks">
                        @foreach ($testimonials as $testimonila)
                        <div class="feedback-card fade">
                            <div class="img-wrapper">
                                <img src="{{ asset($testimonila->image) }}" alt="">
                            </div>
                            <h3>{{ $testimonila->name }}</h3>
                            <span>{{ $testimonila->designation }}</span>
                            <div class="feedback-des">
                                <p>{!! $testimonila->description !!}</p>
                                <div class="quatiation-one">
                                    <img src="{{ asset('Frontend') }}/assets/img/gallery/quation-two.png" alt="">
                                </div>
                                <div class="quatiation-two">
                                    <img src="{{ asset('Frontend') }}/assets/img/gallery/quation-one.png" alt="">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div style="text-align:center">
                    @foreach ($testimonials as $testimonial)
                    <span class="dot" onclick="currentSlide({{ $loop-> index + 1 }})"></span>    
                    @endforeach
                  </div>
            </div>
        </section>
        <!-- Client Feedback end -->
    
        <!-- Brand -->
        <section class="brand">
            <div class="container">
                <div class="brand-content">
                    <div class="brand-slider">
                        <div class="slide-track">
                            @foreach ($brands as $brand)
                            <div class="card">
                                <img src="{{ asset($brand->image) }}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand end -->
    
        <!-- Contact -->
        <section class="contact">
            <div class="container">
                <div class="contact-content">
                    <div class="left">
                        <img src="{{ asset('Frontend') }}/assets/img/gallery/people.png" alt="">
                    </div>
                    <div class="right">
                        <span class="short-title">Get in Touch</span>
                        <h1 class="title">Let's work with us</h1>
                        <p class="sub-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, explicabo!</p>
    
                        <form action="{{ route('contactUs') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter your name" required>
                            </div>
                            @error('name')
                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <label for="name">Phone</label>
                                <input type="number" name="phone" id="phone" placeholder="Enter your phone" required>
                            </div>
                            @error('phone')
                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <label for="name">Email</label>
                                <input type="email" name="email" id="emial" placeholder="Enter your email" required>
                            </div>
                            @error('email')
                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <label for="name">Message</label>
                                <textarea name="message" id="message" rows="4" placeholder="Enter your message" required></textarea>
                            </div>
                            @error('message')
                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <button type="submit" class="btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact end -->
@endsection
@push('css')
    <script>
        function closeModal(){
            document.querySelector("#successModal").style.display = 'none'
        }

        const myTimeout = setTimeout(closeModal, 5000);
    </script>
@endpush