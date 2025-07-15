@extends('layouts.web')
@section('title', 'Home')
@section('content')
<!--============ News Detail Banner Start =====================-->
<div class="content-container page-header-container career-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-content os-animation" data-os-animation="fadeInDown">
                    <h1>{{ $blog->title }}</h1>
                    <p>{{date('d M, Y', strtotime($blog->date))}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================ News Detail Banner End ===================-->
<!--================ Content Section Start ===================-->
<div class="content-container news-detail-container">
    <div class="container">
        <div class="row">
            <!-- Main News Content Column -->
            <div class="col-lg-8 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                <article class="news-article">
                    <div class="news-image-container mb-4">
                        <img src="{{ asset($blog->image) }}" alt="Placeholder news image" class="img-fluid rounded">
                    </div>
                    <header class="news-header mb-3">
                        <h2 class="news-title">{{ $blog->title }}</h2>
                        <p class="news-meta">
                            <span class="news-date"><i class="far fa-calendar-alt me-1"></i> {{ date('F d, Y', strtotime($blog->date)) }}</span>
                            <!-- <span class="news-author ms-3"><i class="far fa-user me-1"></i> Admin</span> -->
                            <!-- <span class="news-category ms-3"><i class="far fa-folder me-1"></i> Healthcare</span> -->
                        </p>
                    </header>
                    <div class="news-content">
                        <p>{!! $blog->description !!}</p>
                    </div>
                </article>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.7s">
                <aside class="news-sidebar ps-lg-4">
                    <div class="sidebar-widget latest-news-widget">
                        <h4 class="widget-title">Latest News</h4>
                        <ul class="latest-news-list list-unstyled">
                            @foreach ($latestBlogs as $latestBlog)
                            <li class="latest-news-item">
                                <a href="{{ route('web.blogs_detail', $latestBlog->slug) }}" class="d-flex align-items-start">
                                    <img src="{{ asset($latestBlog->image) }}" alt="Thumbnail 1" class="latest-news-img me-3">
                                    <div class="latest-news-content">
                                        <h5 class="latest-news-title">{{ $latestBlog->title }}</h5>
                                        <span class="latest-news-date">{{ date('F d, Y', strtotime($latestBlog->date)) }}</span>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                            <li class="latest-news-item mt-4">
                                <a href="{{ route('web.blogs') }}" class="btn btn-primary btn-sm w-100">View All Articles</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Add other widgets like categories or archives here if needed -->
                </aside>
            </div>
        </div>
    </div>
</div>
<!--=============== Content Section End =========================-->
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