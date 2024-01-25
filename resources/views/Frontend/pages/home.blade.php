@extends('Frontend.app')
@section('title', 'Home')
@section('app-content')
        <!-- Slider -->
        <section class="slider">
            <div class="container">
                <div class="slider-content">
                    <span class="short-title-slider">Focus on Business</span>
                    <h1>our target is to reach <span>the goal</span></h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati assumenda dolores quisquam maiores atque, illum iste ad ex dolorem est. Lorem ipsum dolor sit amet consectetur adipisicing elit. At, debitis!</p>
                    <div class="slider-btn-section">
                        <a class="btn"href="">Explore Our Work</a>
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
                        <p class="sub-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, explicabo!</p>
    
                        <!-- Mini Device -->
                        <img class="about-img-minidevice" src="{{ asset('Frontend') }}/assets/img/gallery/about.png" alt="">
                        <!-- Mini Device end-->
    
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis doloribus reprehenderit aliquid, perspiciatis dicta quaerat provident accusantium laudantium sint? Et maxime incidunt ipsa, nisi quas possimus laudantium sequi ad illum quaerat maiores iusto aperiam labore qui perferendis error, recusandae, assumenda deserunt fugiat rem necessitatibus odio a! Quis in quae adipisci.</p>
    
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis doloribus reprehenderit aliquid, perspiciatis dicta quaerat provident accusantium laudantium sint? Et maxime incidunt ipsa, nisi quas possimus laudantium sequi ad illum quaerat maiores iusto aperiam labore qui perferendis error, recusandae, assumenda deserunt fugiat rem necessitatibus odio a! Quis in quae adipisci.</p>
                        <a href="" class="btn">Learn More</a>
    
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
                        <div class="card">
                            <div class="numbaring">
                                <h1>01</h1>
                            </div>
                            <img src="{{ asset('Frontend') }}/assets/img/service/service-icon-1.png" alt="">
                            <h3>Modern Website Design</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates, veritatis nisi quas excepturi debitis</p>
                            <a href="">Read More...</a>
                        </div>
                        <div class="card">
                            <div class="numbaring">
                                <h1>02</h1>
                            </div>
                            <img src="{{ asset('Frontend') }}/assets/img/service/service-icon-2.jpg" alt="">
                            <h3>Modern Website Design</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates, veritatis nisi quas excepturi debitis</p>
                            <a href="">Read More...</a>
                        </div>
                        <div class="card">
                            <div class="numbaring">
                                <h1>03</h1>
                            </div>
                            <img src="{{ asset('Frontend') }}/assets/img/service/service-icon-3.png" alt="">
                            <h3>Modern Website Design</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates, veritatis nisi quas excepturi debitis</p>
                            <a href="">Read More...</a>
                        </div>
                        <div class="card">
                            <div class="numbaring">
                                <h1>04</h1>
                            </div>
                            <img src="{{ asset('Frontend') }}/assets/img/service/service-icon-4.png" alt="">
                            <h3>Modern Website Design</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates, veritatis nisi quas excepturi debitis</p>
                            <a href="">Read More...</a>
                        </div>
                        <div class="card">
                            <div class="numbaring">
                                <h1>05</h1>
                            </div>
                            <img src="{{ asset('Frontend') }}/assets/img/service/service-icon-5.png" alt="">
                            <h3>Modern Website Design</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates, veritatis nisi quas excepturi debitis</p>
                            <a href="">Read More...</a>
                        </div>
                        <div class="card">
                            <div class="numbaring">
                                <h1>06</h1>
                            </div>
                            <img src="{{ asset('Frontend') }}/assets/img/service/service-icon-6.png" alt="">
                            <h3>Modern Website Design</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates, veritatis nisi quas excepturi debitis</p>
                            <a href="">Read More...</a>
                        </div>
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
                    <div class="card">
                        <div class="top">
                            <img src="{{ asset('Frontend') }}/assets/img/service/count-1.png" alt="">
                            <h1>300+</h1>
                        </div>
                        <p>Project Completed</p>
                    </div>
                    <!-- Single Project end -->
    
                    <!-- Single Project -->
                    <div class="card">
                        <div class="top">
                            <img src="{{ asset('Frontend') }}/assets/img/service/count-2.png" alt="">
                            <h1>280+</h1>
                        </div>
                        <p>Safisfied Clients</p>
                    </div>
                    <!-- Single Project end -->
    
                    <!-- Single Project -->
                    <div class="card">
                        <div class="top">
                            <img src="{{ asset('Frontend') }}/assets/img/service/count-3.png" alt="">
                            <h1>150+</h1>
                        </div>
                        <p>Expert Teams</p>
                    </div>
                    <!-- Single Project end -->
    
                    <!-- Single Project -->
                    <div class="card">
                        <div class="top">
                            <img src="{{ asset('Frontend') }}/assets/img/service/count-4.png" alt="">
                            <h1>50+</h1>
                        </div>
                        <p>Win awards</p>
                    </div>
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
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/portfolio-1.png" alt="">
                            </div>
                            <h3>Resepin App - Illustration & UI Exploration</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                        </a>
                        <!-- Single card end -->
                        
                        <!-- Single card -->
                        <a href="" class="card gallery_product filter all user-interface">
                            <div class="card-header">
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/portfolio-2.png" alt="">
                            </div>
                            <h3>Resepin App - Illustration & UI Exploration</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                        </a>
                        <!-- Single card end -->
    
                        <!-- Single card -->
                        <a href="" class="card gallery_product filter all app-development">
                            <div class="card-header">
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/portfolio-3.png" alt="">
                            </div>
                            <h3>Resepin App - Illustration & UI Exploration</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                        </a>
                        <!-- Single card end -->
    
                        <!-- Single card -->
                        <a href="" class="card gallery_product filter all app-development web-development">
                            <div class="card-header">
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/portfolio-4.png" alt="">
                            </div>
                            <h3>Resepin App - Illustration & UI Exploration</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                        </a>
                        <!-- Single card end -->
    
                        <!-- Single card -->
                        <a href="" class="card gallery_product filter all app-development">
                            <div class="card-header">
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/portfolio-5.png" alt="">
                            </div>
                            <h3>Resepin App - Illustration & UI Exploration</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                        </a>
                        <!-- Single card end -->
    
                        <!-- Single card -->
                        <a href="" class="card gallery_product filter all user-interface web-development">
                            <div class="card-header">
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/portfolio-6.png" alt="">
                            </div>
                            <h3>Resepin App - Illustration & UI Exploration</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                        </a>
                        <!-- Single card end -->
    
                        <!-- Single card -->
                        <a href="" class="card gallery_product filter all user-interface">
                            <div class="card-header">
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/portfolio-7.png" alt="">
                            </div>
                            <h3>Resepin App - Illustration & UI Exploration</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                        </a>
                        <!-- Single card end -->
    
                        <!-- Single card -->
                        <a href="" class="card gallery_product filter all web-development">
                            <div class="card-header">
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/portfolio-8.png" alt="">
                            </div>
                            <h3>Resepin App - Illustration & UI Exploration</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sequi necessitatibus dolorem architecto, dolorum quos!</p>
                        </a>
                        <!-- Single card end -->
    
                        <!-- Single card -->
                        <a href="" class="card gallery_product filter all user-interface">
                            <div class="card-header">
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/portfolio-9.png" alt="">
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
        <!-- Portfolio end -->
    
        <!-- Client Feedback -->
        <section class="clnt-feedback">
            <div class="container">
                <div class="clnt-feedback-content">
                    <span class="short-title text-center">Client's Feedback</span>
                    <h1 class="title text-center">What our Client say</h1>
                    <p class="sub-title text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, explicabo!</p>
    
                    <div class="feedbacks">
                        <div class="feedback-card fade">
                            <div class="img-wrapper">
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/person-1.png" alt="">
                            </div>
                            <h3>Jack Dawson</h3>
                            <span>CEO, Google</span>
                            <div class="feedback-des">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae similique aut cupiditate tenetur animi, facilis doloremque quo voluptate architecto minus dignissimos harum ut? Sunt id dicta velit perspiciatis esse nisi corporis itaque ducimus impedit repudiandae. Repellendus esse maiores fugiat perferendis fugit neque, quis nisi vel, repellat ipsam reprehenderit tenetur modi?</p>
                                <div class="quatiation-one">
                                    <img src="{{ asset('Frontend') }}/assets/img/gallery/quation-two.png" alt="">
                                </div>
                                <div class="quatiation-two">
                                    <img src="{{ asset('Frontend') }}/assets/img/gallery/quation-one.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="feedback-card fade">
                            <div class="img-wrapper">
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/person-2.png" alt="">
                            </div>
                            <h3>Adnan Khan</h3>
                            <span>CEO, Google</span>
                            <div class="feedback-des">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae similique aut cupiditate tenetur animi, facilis doloremque quo voluptate architecto minus dignissimos harum ut? Sunt id dicta velit perspiciatis esse nisi corporis itaque ducimus impedit repudiandae. Repellendus esse maiores fugiat perferendis fugit neque, quis nisi vel, repellat ipsam reprehenderit tenetur modi?</p>
                                <div class="quatiation-one">
                                    <img src="{{ asset('Frontend') }}/assets/img/gallery/quation-two.png" alt="">
                                </div>
                                <div class="quatiation-two">
                                    <img src="{{ asset('Frontend') }}/assets/img/gallery/quation-one.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="feedback-card fade">
                            <div class="img-wrapper">
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/person-3.png" alt="">
                            </div>
                            <h3>Jakline juci</h3>
                            <span>CEO, Google</span>
                            <div class="feedback-des">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae similique aut cupiditate tenetur animi, facilis doloremque quo voluptate architecto minus dignissimos harum ut? Sunt id dicta velit perspiciatis esse nisi corporis itaque ducimus impedit repudiandae. Repellendus esse maiores fugiat perferendis fugit neque, quis nisi vel, repellat ipsam reprehenderit tenetur modi?</p>
                                <div class="quatiation-one">
                                    <img src="{{ asset('Frontend') }}/assets/img/gallery/quation-two.png" alt="">
                                </div>
                                <div class="quatiation-two">
                                    <img src="{{ asset('Frontend') }}/assets/img/gallery/quation-one.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="feedback-card fade">
                            <div class="img-wrapper">
                                <img src="{{ asset('Frontend') }}/assets/img/gallery/person-4.png" alt="">
                            </div>
                            <h3>Raisa Mejejabin</h3>
                            <span>CEO, </span>
                            <div class="feedback-des">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae similique aut cupiditate tenetur animi, facilis doloremque quo voluptate architecto minus dignissimos harum ut? Sunt id dicta velit perspiciatis esse nisi corporis itaque ducimus impedit repudiandae. Repellendus esse maiores fugiat perferendis fugit neque, quis nisi vel, repellat ipsam reprehenderit tenetur modi?</p>
                                <div class="quatiation-one">
                                    <img src="{{ asset('Frontend') }}/assets/img/gallery/quation-two.png" alt="">
                                </div>
                                <div class="quatiation-two">
                                    <img src="{{ asset('Frontend') }}/assets/img/gallery/quation-one.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    <span class="dot" onclick="currentSlide(4)"></span> 
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
                            <div class="card">
                                <img src="{{ asset('Frontend') }}/assets/img/brand/brand-1.png" alt="">
                            </div>
                            <div class="card">
                                <img src="{{ asset('Frontend') }}/assets/img/brand/brand-2.png" alt="">
                            </div>
                            <div class="card">
                                <img src="{{ asset('Frontend') }}/assets/img/brand/brand-3.png" alt="">
                            </div>
                            <div class="card">
                                <img src="{{ asset('Frontend') }}/assets/img/brand/brand-4.png" alt="">
                            </div>
                            <div class="card">
                                <img src="{{ asset('Frontend') }}/assets/img/brand/brand-1.png" alt="">
                            </div>
                            <div class="card">
                                <img src="{{ asset('Frontend') }}/assets/img/brand/brand-1.png" alt="">
                            </div>
                            <div class="card">
                                <img src="{{ asset('Frontend') }}/assets/img/brand/brand-2.png" alt="">
                            </div>
                            <div class="card">
                                <img src="{{ asset('Frontend') }}/assets/img/brand/brand-3.png" alt="">
                            </div>
                            <div class="card">
                                <img src="{{ asset('Frontend') }}/assets/img/brand/brand-4.png" alt="">
                            </div>
                            <div class="card">
                                <img src="{{ asset('Frontend') }}/assets/img/brand/brand-1.png" alt="">
                            </div>
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
    
                        <form action="">
                            <div class="row">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter your name">
                            </div>
                            <div class="row">
                                <label for="name">Phone</label>
                                <input type="number" name="phone" id="phone" placeholder="Enter your phone">
                            </div>
                            <div class="row">
                                <label for="name">Email</label>
                                <input type="email" name="emial" id="emial" placeholder="Enter your email">
                            </div>
                            <div class="row">
                                <label for="name">Message</label>
                                <textarea name="message" id="message" rows="4" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="row">
                                <button class="btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact end -->
@endsection