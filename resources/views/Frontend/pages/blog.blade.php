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
                @if($randomPost->status == 'Active')
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
                        <span>{{ strtoupper($randomPost->category->name) }}</span>
                        <h3>{{ $randomPost->title}}</h3>
                        @php
                            $strippedContent  = strip_tags($randomPost->description)
                        @endphp
                        <p>{!! Str::limit($strippedContent, 200) !!}</p>
                        <div class="blg-footer">
                            {{-- <a href=""><i class="fa-regular fa-comment"></i> 50 Comments</a> --}}
                            <a> {{ $randomPost->created_at->diffForHumans() }}</a>
                            <a href="{{ route('blogdetails', $randomPost->slug) }}" class="light-btn">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endif
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
        {{ $randomPosts->links('vendor.pagination.custom') }}
        {{-- <div class="blog-left-footer">
            <ul>
                <li><a href=""><i class="fa-solid fa-arrow-left"></i></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href=""><i class="fa-solid fa-arrow-right"></i></a></li>
            </ul>
        </div> --}}
</section>

@endsection