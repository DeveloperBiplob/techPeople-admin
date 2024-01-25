@extends('Frontend.app')
@section('title', 'Blog Details')
@section('app-content')

<!-- common hero -->
<section class="default-hero" style="  background-image: url('{{ asset('Frontend')}}/assets/img/gallery/about-1.png');">
    <h1>Blog Details</h1>
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
                        <p style="margin-bottom: 20px;opacity: .7;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even more slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>

                        <p style="margin-bottom: 20px;opacity: .7;">By injected humour, or randomised words which don't look even more slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>

                        <p style="margin-bottom: 20px;opacity: .7;">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet it uses a dictionary of over latin words, combined with a handful of model sentence structures.</p>

                        <p style="margin-bottom: 20px;opacity: .7;">But the majority have suffered alteration in some form, by injected humour, or randomised odds which don't look even more slightly believable. If you are going to use a passage of Lorem sum, you need to be sure there isn't anything embarrassing hidden in the middle of the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>

                        <p style="margin-bottom: 20px;opacity: .7;">Many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even more slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the nternet tend to repeat predefined chunks.</p>

                        <p style="margin-bottom: 20px;opacity: .7;">A passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the psum generators on the nternet tend to repeat predefined chunks.</p>
                        <div class="blg-detail-footer">
                            <a href=""><b>TAGS:</b> Non-Immigration, Business, Travel</a>
                            <div class="social-media-group">
                                <p>SHARE</p>
                                <a href="" class="share-socialmedia"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="" class="share-socialmedia"><i class="fa-brands fa-twitter"></i></a>
                                <a href="" class="share-socialmedia"><i class="fa-brands fa-google-plus-g"></i></a>
                            </div>
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
                                    <img src="{{ asset('Frontend')}}/assets/img/gallery/about-4.png" alt="">
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
        <!-- Blog Witter--- -->
        <section class="writter">
            <div class="container">
                <div class="writter-content">
                    <div class="left">
                        <div class="writter-img-wrapper">
                            <img src="{{ asset('Frontend')}}/assets/img/gallery/comment-01.jpg" alt="">
                        </div>
                    </div>
                    <div class="right">
                        <h4>DREW MCINTYRE</h4>
                        <p>A passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing on the nternet tend to repeat predefined chunks.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog comments -->
        <section class="comments">
            <div class="container">
                <div class="comments-content">
                    <div class="comment-header">
                        <h3><span>3</span> Comments</h3>
                    </div>
                    <div class="comments-body">
                        <div class="card">
                            <div class="left">
                                <div class="writter-img-wrapper">
                                    <img src="{{ asset('Frontend')}}/assets/img/gallery/comment-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="right">
                                <h4>DREW MCINTYRE</h4>
                                <span>JAN 29, 2019 AT 10:40PM</span>
                                <p>A passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing on the nternet tend to repeat predefined chunks. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as cessary, making this the first true generator on the Internet.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="left">
                                <div class="writter-img-wrapper">
                                    <img src="{{ asset('Frontend')}}/assets/img/gallery/comment-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="right">
                                <h4>DREW MCINTYRE</h4>
                                <span>JAN 29, 2019 AT 10:40PM</span>
                                <p>A passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing on the nternet tend to repeat predefined chunks. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as cessary, making this the first true generator on the Internet.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="left">
                                <div class="writter-img-wrapper">
                                    <img src="{{ asset('Frontend')}}/assets/img/gallery/comment-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="right">
                                <h4>DREW MCINTYRE</h4>
                                <span>JAN 29, 2019 AT 10:40PM</span>
                                <p>A passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing on the nternet tend to repeat predefined chunks. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as cessary, making this the first true generator on the Internet.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="left">
                                <div class="writter-img-wrapper">
                                    <img src="{{ asset('Frontend')}}/assets/img/gallery/comment-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="right">
                                <h4>DREW MCINTYRE</h4>
                                <span>JAN 29, 2019 AT 10:40PM</span>
                                <p>A passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing on the nternet tend to repeat predefined chunks. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as cessary, making this the first true generator on the Internet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comments Form----- -->
        <div class="contact-body">
            <div class="main-contact-body">
                <div class="contact-left">
                    <div class="form-header">
                        <h1>Post a Comment</h1>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col">
                                <div class="items">
                                    <label for="">Name</label>
                                    <input type="text" name="" id="" placeholder="Enter Your Name">
                                </div>
                                <div class="items">
                                    <label for="">Email</label>
                                    <input type="email" name="" id="" placeholder="Enter Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">Your Message</label>
                            <textarea name="" id="" placeholder="Enter You Comment Here...."></textarea>
                        </div>
                        <div class="row">
                            <button class="btn">Post Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection