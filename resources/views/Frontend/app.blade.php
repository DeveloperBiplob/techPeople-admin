@php
    $configer = App\Models\Configer::latest()->first();
@endphp
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Tech People | @yield('title', 'Default')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/assets/img/logo/pavicon.icon">
    <link rel="manifest" href="site.webmanifest">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Frontend')}}/assets/img/logo/pavicon.icon">

    <!-- Style & Responsive style sheet -->
	<link rel="stylesheet" href="{{ asset('Frontend') }}/assets/css/style.css">
	<link rel="stylesheet" href="{{ asset('Frontend') }}/assets/css/responsive.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;500;700&family=Open+Sans:wght@300;400;500;700&family=Poppins:wght@200;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f57283aa3.js" crossorigin="anonymous"></script>
    @stack('css')
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
                        <a href="{{ route('home')}}" class="logo">
                            @if ($configer->logo)
                            <img src="{{ asset($configer->logo) }}" alt="">
                            @else
                            <img src="{{ asset("Frontend")}}/assets/img/logo/techpeople.png" alt="">
                            @endif
                        </a>
                    </div>
                    <div class="col main-nev">
                        <div class="nev">
                            <ul>
                                <li><a href="{{ route('home')}}" class="active-nav">Home</a></li>
                                <li><a href="{{ route('about')}}">About Us</a></li>
                                <li><a href="{{ route('service')}}">Services</a></li>
                                <li><a href="{{ route('portfolio')}}">Portfolio</a></li>
                                <li><a href="{{ route('blog')}}">Blogs</a></li>
                                <li><a href="{{ route('contact')}}">Contact Us</a></li> 
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
    @if(Session::has('success'))

    <div id="successModal" style="position: fixed;top:20%;right:2%;background:#ffffff;color:green;z-index:999;padding:20px;font-size:20px;border-radius:5px;box-shadow: inset 0 -3em 3em rgb(0 200 0 / 30%),0 0 0 2px white,0.3em 0.3em 1em rgb(200 0 0 / 60%);">
    <div style="display:flex;justify-content:space-between;gap:2em">
        <span>{{ Session()->get('success') }}</span>
        <span style="cursor: pointer" onclick="closeModal()"><i class="fa-solid fa-circle-xmark"></i></span>
    </div>
    </div>

    @endif

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
                            @if ($configer->logo)
                            <img src="{{ asset($configer->logo) }}" alt="">
                            @else
                            <img src="{{ asset("Frontend")}}/assets/img/logo/techpeople.png" alt="">
                            @endif
                            <p>{{ $configer->companydetail }}</p>
                            <div class="social-icon">
                                <a href="{{ $configer->facebook }}"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{ $configer->twitter }}"><i class="fa-brands fa-twitter"></i></a>
                                <a href="{{ $configer->youtube }}"><i class="fa-brands fa-youtube"></i></a>
                                <a href="{{ $configer->instagram }}"><i class="fa-brands fa-instagram"></i></i></i></a>
                            </div>
                        </div>
                        <div class="col">
                            <h3>Quiq Menu</h3>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('home') }}">Our Story</a></li>
                                <li><a href="{{ route('home') }}">What we do</a></li>
                                <li><a href="{{ route('home') }}">Research & Programes</a></li>
                                <li><a href="{{ route('home') }}">Out Team</a></li>
                                <li><a href="{{ route('home') }}">Governing Board</a></li>

                            </ul>
                        </div>
                        <div class="col">
                            <h3>Important Links</h3>
                            <ul>
                                <li><a href="{{ route('home') }}">Terms & Conditions</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('blog') }}">blog</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Company Details</h3>
                            <ul>
                                <li class="footer-address"><i class="fa-solid fa-phone"></i><a href="tel:{{ $configer->phone }}"> {{ $configer->phone }}</a></li>
                                <li class="footer-address"><i class="fa-solid fa-envelope"></i><a href="mailto:{{ $configer->email }}"> {{ $configer->email }}</a></li>
                                <li class="footer-address"><i class="fa-solid fa-location-dot"></i> <a>{{ $configer->address }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-end">
                <span>
                    <i class="fa-sharp fa-regular fa-copyright"></i>
                    copyright <?php echo date("Y"); ?> techPeople, All rights reserved
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
    <!-- Requst Form End -->

    <!-- Video Modal -->
    <div class="video-modal" id="video-modal">
        <div class="video-modal-close-btn">
            <i onclick="closeVideoModal()" class="fa-solid fa-xmark"></i>
        </div>
            <div class="video-modal-video">
                @if ($configer->video)
                <iframe width="100%" height="100%" src="{{ $configer->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                @else
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Vb0dG-2huJE?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                @endif
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
    @stack('script')
    </body>
</html>