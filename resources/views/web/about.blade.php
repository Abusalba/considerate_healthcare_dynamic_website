@extends('layouts.web')
@section('title','About US')
@section('content')
<!--============================== Page Header Start ==============================-->
<div class="content-container page-header-container career-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-content os-animation" data-os-animation="fadeInDown">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================== Page Header End =======================-->
<div class="content-container about-container">
    <div class="container">
        <div class="row os-animation">
            <div class="col-lg-6 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
                <div class="about-img-wrapper position-relative">
                    <div class="about-img1">
                        @if($abouts && $abouts->image )
                        <img src="{{ asset($abouts->image) }}" alt="{{ $abouts->title }}">
                        @else
                        <img src="{{ asset('web/images/placeholder.jpg') }}" alt="No image available">
                        @endif
                    </div>
                    <div class="about-img2">
                        @if($abouts && $abouts->image2)
                        <img src="{{ asset($abouts->image2) }}" alt="{{ $abouts->title }}">
                        @else
                        <img src="{{ asset('web/images/placeholder.jpg') }}" alt="No image available">
                        @endif
                    </div>
                    <div class="about-dots">
                        <img src="{{ asset('web/images/dots.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.7s">
                <div class="about-text">
                    <div class="heading mb-0">
                        <h5><span>About Us</span></h5>
                        @if($abouts)
                        <h3>We are a <span>{{ $abouts->title }}</span></h3>
                        <p>{!! $abouts->description !!}</p>
                        @else
                        <h3>About Us</h3>
                        <p>About information is not available at this time.</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============================== Main End ==============================-->
<!--==================== Content Section 3 End =======================-->
<div class="content-container footer-cta page-header-container career-header">
    <div class="container">
        <div class="row align-items-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
            <div class="col-lg-8">
                <h3>Ready to Discuss Your Needs?</h3>
                <p>Contact us today for a private chat about how our personal care services can support you or your loved one.</p>
            </div>
            <div class="col-lg-4 text-lg-end text-center">
                <a href="contact.html" class="btn btn-primary">Get In Touch <span><i class="fa-solid fa-phone-volume"></i></span></a>
            </div>
        </div>
    </div>
</div>
<!--==================== Content Section 3 End =======================-->
@endsection