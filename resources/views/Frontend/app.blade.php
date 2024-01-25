<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Tech People | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/assets/img/logo/pavicon.icon">
    <link rel="manifest" href="site.webmanifest">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo/pavicon.icon">

    <!-- Style & Responsive style sheet -->
	<link rel="stylesheet" href="{{ asset('Frontend') }}/assets/css/style.css">
	<link rel="stylesheet" href="{{ asset('Frontend') }}/assets/css/responsive.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;500;700&family=Open+Sans:wght@300;400;500;700&family=Poppins:wght@200;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f57283aa3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main">
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header -->
    <header  id="fixtNavbar">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col left">
                        <a href="./index.html" class="logo">
                            <img src="{{ asset("Frontend")}}/assets/img/logo/techpeople.png" alt="">
                        </a>
                    </div>
                    <div class="col main-nev">
                        <div class="nev">
                            <ul>
                                <li><a href="./index.html" class="active-nav">Home</a></li>
                                <li><a href="./about.html">About Us</a></li>
                                <li><a href="/service.html">Services</a></li>
                                <li><a href="./portfolio.html">Portfolio</a></li>
                                <li><a href="./blog.html">Blogs</a></li>
                                <li><a href="./contact.html">Contact Us</a></li> 
                                <div class="header-btn">
                                    <a onclick="showRequestForm()">Get Started</a>
                                </div>   
                            </ul>
                        </div>
                    </div>
                    <div class="col mobile-menu">
                        <span onclick="showFunction()"><i class="fa-solid fa-bars"></i></span>
                    </div>
                </div>
            </div>
            <div class="mobile-nav"  id="showMenu">
                <ul>
                    <li><a href="./index.html" class="active-nav">Home</a></li>
                    <li><a href="./about.html">About Us</a></li>
                    <li><a href="/service.html">Services</a></li>
                    <li><a href="./portfolio.html">Portfolio</a></li>
                    <li><a href="./blog.html">Blogs</a></li>
                    <li><a href="./contact.html">Contact Us</a></li> 
                    <div class="header-btn for-mobile">
                        <a onclick="showRequestForm()">Get Started</a>
                    </div>   
                </ul>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <div style="min-height: 90vh">
            <!-- App Content -->
    @yield('app-content')
    <!-- App Content end-->
    </div>

    <!-- Footer -->
    <footer>
        <section class="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <div class="col">
                            <img src="./assets/img/logo/techpeople.png" alt="">
                            <p>12 Years+ Experienced, 300+ Interior Design Construction & 500+ Interior Consultancy Done by Circle Interior Ltd. Currently No#1 Best Interior Design Company in Bangladesh</p>
                            <div class="social-icon">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></i></i></a>
                            </div>
                        </div>
                        <div class="col">
                            <h3>Quiq Menu</h3>
                            <ul>
                                <li><a href="./index.html">Home</a></li>
                                <li><a href="">Our Story</a></li>
                                <li><a href="">What we do</a></li>
                                <li><a href="">Research & Programes</a></li>
                                <li><a href="">Out Team</a></li>
                                <li><a href="">Governing Board</a></li>

                            </ul>
                        </div>
                        <div class="col">
                            <h3>Important Links</h3>
                            <ul>
                                <li><a href="">Terms & Conditions</a></li>
                                <li><a href="./about.html">About Us</a></li>
                                <li><a href="./blog.html">blog</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Company Details</h3>
                            <ul>
                                <li class="footer-address"><i class="fa-solid fa-phone"></i><a href=""> +880 1684428110</a></li>
                                <li class="footer-address"><i class="fa-solid fa-envelope"></i><a href=""> Interior@mail.com</a></li>
                                <li class="footer-address"><i class="fa-solid fa-location-dot"></i> <a href="">House # 6/20 (12st Floor) Block # E, A/k Link Rood, Boshundhora, Dhaka -1212</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-end">
                <span>
                    <i class="fa-sharp fa-regular fa-copyright"></i>
                    copyright 2024 techPeople, All rights reserved
                </span>                    
            </div>
        </section>
    </footer>
    <!-- Footr End -->

    <!-- Messenger----- -->
    <!-- <div class="messenger" onclick="showRequestForm()">
        <i class="fa-brands fa-facebook-messenger"></i>
    </div> -->

    <!-- Requst Form -->
    <div class="request-form" id="request-form">
        <div class="request-form-header">
            <h3>Quick Contact Us</h3>
            <i onclick="closerRequestForm()" class="fa-solid fa-xmark"></i>
        </div>
        <div class="request-form-body">
            <form action="#">
                <div class="row">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="" class="name" placeholder="Enter Your Full Name"> 
                </div>
                <div class="row">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="" class="name" placeholder="Enter Your Email Address"> 
                </div>
                <div class="row">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="" class="phone" placeholder="Enter Your Full Phone"> 
                </div>
                <div class="row">
                    <label for="subbject">Subbject</label>
                    <input type="text" name="subbject" id="" class="subbject" placeholder="Enter Your Full Subbject"> 
                </div>
                <div class="row">
                    <label for="message">Message</label>
                    <textarea name="message" class="message" id="" placeholder="Enter Your Message"></textarea> 
                </div>
                <button class="btn">Send Message</button>
            </form>
        </div>
    </div>
    <!-- Requst Form End -->

    <!-- Video Modal -->
    <div class="video-modal" id="video-modal">
        <div class="video-modal-close-btn">
            <i onclick="closeVideoModal()" class="fa-solid fa-xmark"></i>
        </div>
            <div class="video-modal-video">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Vb0dG-2huJE?si=Pu67rJ5CztznIs-T" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- video Modal End -->

    </div>
    <!-- JS here -->
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('Frontend') }}/./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Script Js -->
    <script src="{{ asset('Frontend') }}/./assets/js/script.js"></script>
    
    </body>
</html>