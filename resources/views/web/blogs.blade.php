@extends('layouts.web')
@section('title', 'Home')
@section('content')
<!--============================== Main Start ==============================-->
<!--============================== Page Header Start ==============================-->
<div class="content-container page-header-container career-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-content os-animation" data-os-animation="fadeInDown">
                    <h1>Healthcare Blog</h1>
                    <p>Stay updated with the latest news and insights in the healthcare industry.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============================== Page Header End ==============================-->
<!-- Contact Section -->
<div class="content-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading text-center">
                    <h5><span>Healthcare News</span></h5>
                    <h3>Latest From <span>Healthcare</span></h3>
                </div>
                <ul class="blog-list">
                    @foreach ($blogs as $blog)
                    <li class="blog-item os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="{{ $blog['image'] }}" alt="">
                            </div>
                            <div class="blog-content">
                                <p class="blog-date">{{date('d M, Y', strtotime($blog->date))}}</p>
                                <h5>{{ $blog['title'] }}</h5>
                                <p>{{ Str::limit(strip_tags($blog->description), 100) }}</p>
                            </div>
                            <div class="blog-cta">
                                <a href="{{ route('web.blogs_detail', $blog->slug) }}" class="blog-btn">Know More
                                    <span><i class="fa-solid fa-arrow-right-long"></i></span>
                                </a>
                            </div>
                        </div>
                    </li>

                    @endforeach
                </ul>

                <!-- Pagination Start -->
                <!-- <nav aria-label="News Pagination" class="mt-5 d-flex justify-content-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav> -->
                <!-- Pagination End -->
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