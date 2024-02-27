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
                            <img src="{{ asset($post->image)}}" alt="">
                            <div class="blg-date">
                                <span>
                                    <h3>{{ $post->created_at->format('d') }}</h3>
                                </span>
                                <span>{{ $post->created_at->format('M') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="blg-card-right">
                        <span>{{ strtoupper($post->category->name) }}</span>
                        <h3>{{ $post->title }}</h3>
                        <div style="margin-bottom: 20px;opacity: .8;">
                            {!! $post->description !!}
                        </div>
                        <div class="blg-detail-footer">
                            <a><b>TAGS:</b> @foreach ($post->tags as $tag) {{ $tag->name }} / @endforeach</a>
                            <div class="social-media-group">
                                <p>SHARE</p>
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('blogdetails', $post->slug) }}" class="share-socialmedia"><i class="fa-brands fa-facebook-f"></i></a>
                                <a target="_blank" href="https://wa.me/?text=YOUR_MESSAGE_HERE%20-%20{{ route('blogdetails', $post->slug) }}" class="share-socialmedia"><i class="fa-brands fa-whatsapp"></i></a>
                                <a target="_blank" href="https://plus.google.com/share?url={{ route('blogdetails', $post->slug) }}" class="share-socialmedia"><i class="fa-brands fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-right">
                {{-- <div class="row">
                    <form action="">
                        <input type="text" placeholder="Search Here.....">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div> --}}
                <div class="row">
                    <div class="blog-right-titile">
                        <h3>RECENT NEWS</h3>
                    </div>
                    <div class="latest-blog">
                        @foreach ($latestPosts as $latestPost)
                        @if($latestPost->status == 'Active')
                        <a class="card" href="{{ route('blogdetails', $latestPost->slug) }}">
                            <div class="left">
                                <div class="blg-img-wrapper">
                                    <img src="{{ asset($latestPost->image)}}" alt="">
                                </div>
                            </div>
                            <div class="right">
                                <h4>{!! Str::limit($latestPost->title, 50) !!}</h4>
                                <span><i class="fa-solid fa-calendar-days"></i> {{ $latestPost->created_at->format('d M Y') }}</span>
                            </div>
                        </a>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="blog-right-titile">
                        <h3>CATEGORIES</h3>
                    </div>
                    <div class="category">
                        @foreach ($categories as $category)
                        <ul><li><a href="{{ route('category-wise-post', $category->slug) }}">{{ $category->name }}</a></li></ul>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="blog-right-titile">
                        <h3>TAGS</h3>
                    </div>
                    <div class="tags">
                        @foreach ($tags as $tag)
                        <a href="{{ route('tag-wise-post', $tag->slug) }}">{{ $tag->name }}</a>      
                        @endforeach
                    </div>
                </div>
                {{-- <div class="row">
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
                </div> --}}
            </div>
        </div>
        <!-- Blog Witter--- -->
        {{-- <section class="writter">
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
        </section> --}}
        <!-- Blog comments -->
        {{-- <section class="comments">
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
        </section> --}}

        <!-- Comments Form----- -->
        {{-- <div class="contact-body">
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
        </div> --}}
    </div>
</section>

@endsection