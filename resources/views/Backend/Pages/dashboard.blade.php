@php
  $contact = App\Models\Contact::get();
  $blogs = App\Models\Post::get();
  $services = App\Models\Service::get();
  $portfolios = App\Models\Portfolio::get();
  $configer = App\Models\Configer::latest()->first();
@endphp
@extends('Backend.Layouts.master')
@section('title', 'Dashboard')
@section('master-content')
<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $contact->count() }}</h3>

          <p>Message Request</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-envelope-open-text mr-1" aria-hidden="true"></i>
        </div>
        <a href="{{ route('contactContent') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $blogs->count() }}<sup style="font-size: 20px"></sup></h3>

          <p>Blogs</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-blog"></i>
        </div>
        <a href="{{ route('post.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $services->count() }}</h3>

          <p>Services</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-briefcase mr-1" aria-hidden="true"></i>
        </div>
        <a href="{{ route('service.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{ $portfolios->count() }}</h3>

          <p>Portfolios</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-address-card mr-1" aria-hidden="true"></i>
        </div>
        <a href="{{ route('portfolio.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <div class="row">
    <iframe style="min-height: 100vh" width="100%" height="100%" src="{{ $configer->video ?? 'https://www.youtube.com/embed/Vb0dG-2huJE?autoplay=1&mute=1' }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
  
@endsection