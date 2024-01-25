@extends('Frontend.app')
@section('title', 'Blog')
@section('app-content')

<!-- common hero -->
<section class="default-hero" style="  background-image: url('{{ asset('Frontend')}}/assets/img/gallery/about-1.png');">
    <h1>Blog</h1>
</section>
<!-- common end -->
<section class="blogs">
    <div class="container">
        <div class="blogs-content">
            <div class="blog-left">
                <div class="card">
                    <div class="blg-card-left">
                        <div class="blg-img-wrapper">
                            <img src="{{ asset('Frontend')}}/assets/img/gallery/about-4.png" alt="">
                            <div class="blg-date">
                                <span>
                                    <h3>30</h3>
                                </span>
                                <span>Oct</span>
                            </div>
                        </div>
                    </div>
                    <div class="blg-card-right">
                        <span>BUSINESS VISA</span>
                        <h3>Various versions have evols over the years</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                        <div class="blg-footer">
                            <a href=""><i class="fa-regular fa-comment"></i> 50 Comments</a>
                            <a href="./blog-details.html" class="light-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="blg-card-left">
                        <div class="blg-img-wrapper">
                            <img src="{{ asset('Frontend')}}/assets/img/gallery/about-5.png" alt="">
                            <div class="blg-date">
                                <span>
                                    <h3>30</h3>
                                </span>
                                <span>Oct</span>
                            </div>
                        </div>
                    </div>
                    <div class="blg-card-right">
                        <span>BUSINESS VISA</span>
                        <h3>Various versions have evols over the years</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                        <div class="blg-footer">
                            <a href=""><i class="fa-regular fa-comment"></i> 50 Comments</a>
                            <a href="./blog-details.html" class="light-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="blg-card-left">
                        <div class="blg-img-wrapper">
                            <img src="{{ asset('Frontend')}}/assets/img/gallery/about-6.png" alt="">
                            <div class="blg-date">
                                <span>
                                    <h3>30</h3>
                                </span>
                                <span>Oct</span>
                            </div>
                        </div>
                    </div>
                    <div class="blg-card-right">
                        <span>BUSINESS VISA</span>
                        <h3>Various versions have evols over the years</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                        <div class="blg-footer">
                            <a href=""><i class="fa-regular fa-comment"></i> 50 Comments</a>
                            <a href="./blog-details.html" class="light-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-right">
                <div class="row">
                    <form action="">
                        <input type="text" placeholder="Search Here.....">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="row">
                    <div class="blog-right-titile">
                        <h3>RECENT NEWS</h3>
                    </div>
                    <div class="latest-blog">
                        <a class="card" href="./blog-details.html">
                            <div class="left">
                                <div class="blg-img-wrapper">
                                    <img src="{{ asset('Frontend')}}/assets/img/gallery/about-4.png" alt="">
                                </div>
                            </div>
                            <div class="right">
                                <h4>Simply dummy text offs the printing</h4>
                                <span><i class="fa-solid fa-calendar-days"></i> Feb-20, 2019</span>
                            </div>
                        </a>
                        <a class="card" href="./blog-details.html">
                            <div class="left">
                                <div class="blg-img-wrapper">
                                    <img src="{{ asset('Frontend')}}/assets/img/gallery/about-5.png" alt="">
                                </div>
                            </div>
                            <div class="right">
                                <h4>Simply dummy text offs the printing</h4>
                                <span><i class="fa-solid fa-calendar-days"></i> Feb-20, 2019</span>
                            </div>
                        </a>
                        <a class="card" href="./blog-details.html">
                            <div class="left">
                                <div class="blg-img-wrapper">
                                    <img src="{{ asset('Frontend')}}/assets/img/gallery/about-6.png" alt="">
                                </div>
                            </div>
                            <div class="right">
                                <h4>Simply dummy text offs the printing</h4>
                                <span><i class="fa-solid fa-calendar-days"></i> Feb-20, 2019</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-right-titile">
                        <h3>CATEGORIES</h3>
                    </div>
                    <div class="category">
                        <ul><li><a href="">Travel & Tourism Visa</a></li></ul>
                        <ul><li><a href="">Education Visa</a></li></ul>
                        <ul><li><a href="">Worker Visa</a></li></ul>
                        <ul><li><a href="">Immigration Visa</a></li></ul>
                        <ul><li><a href="">Hoj & Omra Visa</a></li></ul>
                        <ul><li><a href="">Business Visa</a></li></ul>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-right-titile">
                        <h3>TAGS</h3>
                    </div>
                    <div class="tags">
                        <a href="">Travel</a>
                        <a href="">Immigration</a>
                        <a href="">Business</a>
                        <a href="">Education</a>
                        <a href="">Non-Immigration</a>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-right-titile">
                        <h3>Subscribe</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, deleniti.</p>
                    </div>
                    <div class="subscribe">
                        <form action="">
                            <input type="text" placeholder="Enter Your Email">
                            <button class="subscribe-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-left-footer">
            <ul>
                <li><a href=""><i class="fa-solid fa-arrow-left"></i></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>

@endsection