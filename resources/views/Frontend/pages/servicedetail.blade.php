@extends('Frontend.app')
@section('title', 'Service Details')
@section('app-content')

<!-- common hero -->
<section class="default-hero" style="  background-image: url('{{ asset('Frontend')}}/assets/img/gallery/about-1.png');">
    <h1>Process</h1>
</section>
<!-- common end -->
<section class="about-page">
    <div class="ser-details">
        <div class="container">
            @forelse ($service->workProcesses as $process)
            <div class="ser-details-content">
                <div class="left">
                    <h3>{{ $process->title }}</h3>
                    <p>{!! $process->description !!}</p>
                </div>
                <div class="right">
                    <div class="ser-img-wrapper">
                        <!-- Must Use Square Image -->
                        <img src="{{ asset($process->image)}}" alt="">
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