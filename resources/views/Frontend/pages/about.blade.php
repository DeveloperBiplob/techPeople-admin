@extends('Frontend.app')
@section('title', 'About')
@section('app-content')

<!-- common hero -->
<section class="default-hero" style="  background-image: url('{{ asset('Frontend')}}/assets/img/gallery/about-1.png');">
    <h1>About</h1>
</section>
<!-- common end -->
<section class="about-page">
    <div class="container">
        <div class="about-page-content">
            <span class="short-title">Our Story</span>
            <h1 class="title">About techPeople</h1>
            <p class="sub-title">{{ $companyDetail->title }}</p>
            <p class="sub-title">{!! $companyDetail->description !!}</p>
            <a style="margin-top: 30px" onclick="showRequestForm()" class="btn">Get Started</a>
            <div class="about-page-header">
                <div class="left">
                    <img src="{{ asset($gallery->image_one) ?? ''}}" alt="">
                </div>
                <div class="right">
                    <div class="card">
                        <img src="{{ asset($gallery->image_two) ?? ''}}" alt="">
                    </div>
                    <div class="card">
                        <img src="{{ asset($gallery->image_three) ?? ''}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ser-details">
        <div class="container">
            @forelse ($abouts as $about)
            <div class="ser-details-content">
                <div class="left">
                    <h3>{{ $about->title }}</h3>
                    <p>{!! $about->description !!}</p>
                </div>
                <div class="right">
                    <div class="ser-img-wrapper">
                        <!-- Must Use Square Image -->
                        <img src="{{ asset($about->image)}}" alt="">
                    </div>
                </div>
            </div>
            @empty
                <span>Data not found</span>
            @endforelse
        </div>
    </div>
</section>

@endsection