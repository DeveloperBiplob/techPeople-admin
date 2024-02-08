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
                @foreach ($randomPosts as $randomPost)
                <div class="card">
                    <div class="blg-card-left">
                        <div class="blg-img-wrapper">
                            <img src="{{ asset($randomPost->image)}}" alt="">
                            <div class="blg-date">
                                <span>
                                    <h3>{{ $randomPost->created_at->format('d') }}</h3>
                                </span>
                                <span>{{ $randomPost->created_at->format('M') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="blg-card-right">
                        <span>{{ $randomPost->category->name }}</span>
                        <h3>{{ $randomPost->title}}</h3>
                        <p>{!! Str::limit($randomPost->description, 300) !!}</p>
                        <div class="blg-footer">
                            {{-- <a href=""><i class="fa-regular fa-comment"></i> 50 Comments</a> --}}
                            <a> {{ $randomPost->created_at->diffForHumans() }}</a>
                            <a href="{{ route('blogdetails', $randomPost->slug) }}" class="light-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
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
                        <a class="card" href="./blog-details.html">
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
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="blog-right-titile">
                        <h3>CATEGORIES</h3>
                    </div>
                    <div class="category">
                        @foreach ($categories as $category)
                        <ul><li><a href="">{{ $category->name }}</a></li></ul>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="blog-right-titile">
                        <h3>TAGS</h3>
                    </div>
                    <div class="tags">
                        @foreach ($tags as $tag)
                        <a href="">{{ $tag->name }}</a>      
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