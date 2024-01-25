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
            <p class="sub-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, explicabo!</p>
            <p class="sub-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta, voluptatem? Corporis quis quaerat voluptates saepe dolore corrupti modi culpa facere! Blanditiis aspernatur tenetur fugit assumenda quas dolore voluptate veritatis sint adipisci illum, pariatur expedita, quia beatae. At laborum, asperiores laudantium iusto consectetur illo harum eos sequi ratione vero amet itaque, iste non porro. Minus nesciunt perspiciatis itaque maiores vel. Suscipit quasi ducimus voluptatem earum explicabo nemo. In quis, corrupti ab laudantium molestiae officia dolorem? Autem, eligendi beatae consectetur quidem deleniti, at alias odit saepe laudantium tempore voluptatem temporibus quos facilis placeat optio quasi ipsam harum quibusdam, asperiores unde quaera.</p>
            <a href="" class="btn">Get Started</a>
            <div class="about-page-header">
                <div class="left">
                    <img src="{{ asset('Frontend')}}/assets/img/gallery/about-1.png" alt="">
                </div>
                <div class="right">
                    <div class="card">
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/about-2.png" alt="">
                    </div>
                    <div class="card">
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/about-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ser-details">
        <div class="container">
            <div class="ser-details-content">
                <div class="left">
                    <h3>About Our Company</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even more slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                    
                    <p>By injected humour, or randomised words which don't look even more slightly believable. If you are going toos you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <div class="right">
                    <div class="ser-img-wrapper">
                        <!-- Must Use Square Image -->
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/about-4.png" alt="">
                    </div>
                </div>
            </div>
            <div class="ser-details-content">
                <div class="left">
                    <h3>What we do ?</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even more slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                    
                    <p>By injected humour, or randomised words which don't look even more slightly believable. If you are going toos you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <div class="right">
                    <div class="ser-img-wrapper">
                        <!-- Must Use Square Image -->
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/about-5.png" alt="">
                    </div>
                </div>
            </div>
            <div class="ser-details-content">
                <div class="left">
                    <h3>Our Mission</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even more slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                    
                    <p>By injected humour, or randomised words which don't look even more slightly believable. If you are going toos you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <div class="right">
                    <div class="ser-img-wrapper">
                        <!-- Must Use Square Image -->
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/about-6.png" alt="">
                    </div>
                </div>
            </div>
            <div class="ser-details-content">
                <div class="left">
                    <h3>Our Visson</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even more slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                    
                    <p>By injected humour, or randomised words which don't look even more slightly believable. If you are going toos you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <div class="right">
                    <div class="ser-img-wrapper">
                        <!-- Must Use Square Image -->
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/vission.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="ser-details-content">
                <div class="left">
                    <h3>Why techPeople is Best?</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even more slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                    
                    <p>By injected humour, or randomised words which don't look even more slightly believable. If you are going toos you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <div class="right">
                    <div class="ser-img-wrapper">
                        <!-- Must Use Square Image -->
                        <img src="{{ asset('Frontend')}}/assets/img/gallery/about-4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection