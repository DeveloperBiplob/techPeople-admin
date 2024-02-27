@extends('Frontend.app')
@section('title', 'Service')
@section('app-content')

<!-- common hero -->
<section class="default-hero" style="  background-image: url('{{ asset('Frontend')}}/assets/img/gallery/about-1.png');">
    <h1>Service</h1>
</section>
<!-- common end -->
<section class="service-page">
    <div class="service">
        <div class="container">
            <div class="service-content">
                <span class="short-title text-center">Service List</span>
                <h1 class="title text-center">What we are offering</h1>
                <p class="sub-title text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, explicabo!</p>

                <!-- Service group -->
                <div class="services">
                    @forelse ($services as $service)
                    <div class="card">
                        <div class="numbaring">
                            <h1>0{{ $loop-> index + 1 }}</h1>
                        </div>
                        <img src="{{ asset($service->image) }}" alt="">
                        <h3>{{ $service->title }}</h3>
                        @php
                            $strippedContent  = strip_tags($service->description)
                        @endphp
                        <p>{!! Str::limit($strippedContent, 150) !!}</p>
                        <a href="{{ route('serviceProcess', $service->slug) }}">Read More...</a>
                    </div>
                    @empty
                        <span>Data Not Found</span>
                    @endforelse
                </div>
                <!-- Service group end -->
            </div>
        </div>
    </div>
</section>

@endsection