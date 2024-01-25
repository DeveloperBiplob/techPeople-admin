@extends('Frontend.app')
@section('title', 'Contact')
@section('app-content')

<!-- common hero -->
<section class="default-hero" style="  background-image: url('{{ asset('Frontend')}}/assets/img/gallery/about-1.png');">
    <h1>Contact</h1>
</section>
<!-- common end -->
<section class="contact">
    <div class="container">
        <div class="contact-content">
            <div class="left">
                <img src="{{ asset('Frontend')}}/assets/img/gallery/people.png" alt="">
            </div>
            <div class="right">
                <span class="short-title">Get in Touch</span>
                <h1 class="title">Let's work with us</h1>
                <p class="sub-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, explicabo!</p>

                <form action="">
                    <div class="row">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="row">
                        <label for="name">Phone</label>
                        <input type="number" name="phone" id="phone" placeholder="Enter your phone">
                    </div>
                    <div class="row">
                        <label for="name">Email</label>
                        <input type="email" name="emial" id="emial" placeholder="Enter your email">
                    </div>
                    <div class="row">
                        <label for="name">Message</label>
                        <textarea name="message" id="message" rows="4" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="row">
                        <button class="btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection