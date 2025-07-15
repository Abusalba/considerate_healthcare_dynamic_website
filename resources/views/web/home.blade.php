@extends('layouts.web')
@section('title', 'Home')
@section('content')
<!--============================== Main Start ==============================-->
        <!--============================== Content Start ==============================-->
        <div class="content-container hero-banner position-relative">
            <div class="container">
                <div class="row os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">
                    <div class="col-lg-6 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
                        <div class="hero-content">
                            <h5>Trust Considerate Healthcare Professionals Limited for</h5>
                            <h1>At-Home & <span>Complex Care Services</span></h1>
                            <p>Welcome Considerate Healthcare Professionals Limited, your trusted partner in delivering personalised and compassionate home care services in the Lambeth and London area</p>
                            <div class="hero-cta">
                                <a href="#" class="btn btn-default">Find Out More<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.5s">
                        <div class="hero-img">
                            <img src="{{ asset('web/images/img1.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="stats-container os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.7s">
                <div class="avatars">
                    <img src="{{ asset('web/images/img1.webp') }}" alt="Avatar 1">
                    <img src="{{ asset('web/images/img1.webp') }}" alt="Avatar 1">
                    <img src="{{ asset('web/images/img1.webp') }}" alt="Avatar 1">
                    <img src="{{ asset('web/images/img1.webp') }}" alt="Avatar 1">
                </div>
                <div class="stats-text">
                    <h2>150k</h2>
                    <p>Patient recovers</p>
                </div>
            </div>
            <div class="progress-card os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.9s">
                <div class="circle">
                    <div class="percentage">82%</div>
                </div>
                <div class="card-text">
                    <h3>Successfully<br>diagnosis</h3>
                    <div class="arrow-button">
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <!--============================== Content End ==============================-->
        <!--============================== Content Start ==============================-->
        <div class="content-container about-container">
            <div class="container">
                <div class="row os-animation">
                    <div class="col-lg-6 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
                        <div class="about-img-wrapper position-relative">
                            <div class="about-img1">
                                <img src="{{ asset('web/images/about-img1.jpg') }}" alt="">
                            </div>
                            <div class="about-img2">
                                <img src="{{ asset('web/images/about-img2.webp') }}" alt="">
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
                                <h3>We are a <span>Nurse–led Healthcare Agency</span></h3>
                                <p>Considerate Healthcare Professionals Limited is a nurse-led home care agency dedicated to delivering personalised, compassionate, and high-quality care to individuals in Lambeth and across London. Our mission is to empower our clients to live independently and with dignity in the comfort of their own homes.</p>
                                <p>Our experienced team of nurses and carers provide a wide range of services, from personal care and complex medical support to companionship and household help. We pride ourselves on our commitment to excellence, reliability, and a truly person-centred approach.</p>
                                <p>Whether you need short-term assistance or long-term care, we are here to support you and your loved ones every step of the way.</p>
                                <div class="about-cta mt-3">
                                    <a href="sub-service-detail.html" class="btn btn-default">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============================== Content End ==============================-->
        <!--============================== Content Start ==============================-->
        <div class="content-container grey-bg pb-0 about-container sub-service-container">
            <div class="container">
                <div class="row os-animation">
                    <div class="col-lg-5 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.7s">
                        <div class="about-text">
                            <div class="heading mb-0">
                                <h5><span>FEATURED SERVICES</span></h5>
                                <h3>OUR<span> HOME CARE</span> SERVICES</h3>
                                <p>At Considerate Healthcare Professionals Limited, our homecare services bring compassionate, personalized care to your doorstep. Our skilled caregivers provide personal care, medication management, companionship, and daily living assistance, tailored to your unique needs. From chronic condition support to post-hospital recovery, we ensure comfort and dignity at home. With 24/7 availability and rigorous staff screening, we guarantee trusted, high-quality care. Serving families across Lambeth and London area, we’re committed to enhancing lives with empathy and expertise.</p>
                                <p>Our flexible care plans adapt to your schedule, promoting independence. We also provide family support, coordinating with medical teams for seamless care.</p>
                                <div class="about-cta mt-3">
                                    <a href="sub-service-detail.html" class="btn btn-default">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-lg-7 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.5s">
                        <div class="sub-service-list sub-service-slider1 d-flex flex-wrap">
                            <div class="sub-service-item">
                                <div class="sub-service-box">
                                    <div class="sub-service-icon">
                                        <i class="fa-solid fa-stethoscope" aria-hidden="true"></i>
                                    </div>
                                    <h5>Personal Care</h5>
                                    <p>Assistance with bathing, grooming, and dressing, toileting and incontinence care</p>
                                    <div class="sub-service-hover">
                                        <h5>Personal Care</h5>
                                        <p>Assistance with bathing, grooming, and dressing, toileting and incontinence care</p>
                                        <div class="sub-service-cta">
                                            <a href="sub-service-detail.html" class="btn btn-primary btn-sm">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-service-item">
                                <div class="sub-service-box">
                                    <div class="sub-service-icon">
                                        <i class="fa-solid fa-stethoscope" aria-hidden="true"></i>
                                    </div>
                                    <h5>Companionship Support</h5>
                                    <p>Social interaction and engagement to reduce loneliness as well as Emotional support for mental well-being.</p>
                                    <div class="sub-service-hover">
                                        <h5>Companionship Support</h5>
                                        <p>Social interaction and engagement to reduce loneliness as well as Emotional support for mental well-being.</p>
                                        <div class="sub-service-cta">
                                            <a href="sub-service-detail.html" class="btn btn-primary btn-sm">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-service-item">
                                <div class="sub-service-box">
                                    <div class="sub-service-icon">
                                        <i class="fa-solid fa-stethoscope" aria-hidden="true"></i>
                                    </div>
                                    <h5>Specialized Care</h5>
                                    <p>Dementia and Alzheimer’s care with tailored support and Hospice care for end-of-life comfort</p>
                                    <div class="sub-service-hover">
                                        <h5>Specialized Care</h5>
                                        <p>Dementia and Alzheimer’s care with tailored support and Hospice care for end-of-life comfort</p>
                                        <div class="sub-service-cta">
                                            <a href="sub-service-detail.html" class="btn btn-primary btn-sm">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-service-item">
                                <div class="sub-service-box">
                                    <div class="sub-service-icon">
                                        <i class="fa-solid fa-stethoscope" aria-hidden="true"></i>
                                    </div>
                                    <h5>Medical Care</h5>
                                    <p>Medication management and administration, wound care and dressing changes</p>
                                    <div class="sub-service-hover">
                                        <h5>Medical Care</h5>
                                        <p>Medication management and administration, wound care and dressing changes</p>
                                        <div class="sub-service-cta">
                                            <a href="sub-service-detail.html" class="btn btn-primary btn-sm">Read More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============================== Content End ==============================-->
        <!--============================== Services Start ==============================-->
        <div class="content-container service-container grey-bg">
            <div class="container">
                <div class="row os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                    <div class="col-lg-12">
                        <div class="heading text-center">
                            <h5><span>What We Offer</span></h5>
                            <h3>Our Comprehensive <span>Services</span></h3>
                            <p>Providing tailored care solutions to meet your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="row service-row os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.7s">
                    <div class="col-lg-4 col-md-6 service-col">
                        <div class="service-card">
                            <div class="service-card-img">
                                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDF8fGhlYWx0aGNhcmUlMjBjYXJlfGVufDB8fHx8MTY3ODk4OTUyMQ&ixlib=rb-4.0.3&q=80&w=400" alt="Personal Care Service">
                            </div>
                            <div class="service-card-content">
                                <div class="service-card-icon">
                                    <i class="fa-solid fa-user-nurse"></i>
                                </div>
                                <h4>At Home Care</h4>
                                <p>Providing dignified and respectful assistance with daily living activities in the comfort of your own home.</p>
                                <a href="personal-care.html" class="read-more-link">Learn More <i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service-col">
                        <div class="service-card">
                            <div class="service-card-img">
                                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDJ8fGhlYWx0aGNhcmUlMjBzZXJ2aWNlfGVufDB8fHx8MTY3ODk4OTU0NQ&ixlib=rb-4.0.3&q=80&w=400" alt="Complex Care Service">
                             </div>
                             <div class="service-card-content">
                                <div class="service-card-icon">
                                    <i class="fa-solid fa-stethoscope"></i>
                                </div>
                                <h4>Complex Care</h4>
                                <p>Specialized care for individuals with complex medical conditions or disabilities.</p>
                                <a href="#!" class="read-more-link">Learn More <i class="fa-solid fa-arrow-right-long"></i></a>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service-col">
                         <div class="service-card">
                             <div class="service-card-img">
                                <img src="https://images.unsplash.com/photo-1512678080530-7760d81faba6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDN8fGhvbWUlMjBjYXJlfGVufDB8fHx8MTY3ODk4OTU2OA&ixlib=rb-4.0.3&q=80&w=400" alt="Home Help Service">
                             </div>
                             <div class="service-card-content">
                                <div class="service-card-icon">
                                     <i class="fa-solid fa-house-chimney-medical"></i>
                                </div>
                                <h4>NHS/Private Hospitals</h4>
                                <p>Support with household tasks, errands, and companionship to maintain independence.</p>
                                <a href="#!" class="read-more-link">Learn More <i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                         </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="service-cta text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                            <a href="#!" class="btn btn-default">View All Services <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <!--============================== Services End ==============================-->
        <!--============================== Stats Start ==============================-->
        <div class="content-container stats-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                        <div class="stat-item">
                            <i class="fa-solid fa-users"></i>
                            <h3 class="stat-count">1200+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">
                        <div class="stat-item">
                            <i class="fa-solid fa-user-doctor"></i>
                            <h3 class="stat-count">250+</h3>
                            <p>Qualified Staff</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                        <div class="stat-item">
                            <i class="fa-solid fa-heart-pulse"></i>
                            <h3 class="stat-count">98%</h3>
                            <p>Care Success Rate</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.7s">
                        <div class="stat-item">
                            <i class="fa-solid fa-award"></i>
                            <h3 class="stat-count">15+</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============================== Stats End ==============================-->
        <!--============================== Why Choose Us Start ==============================-->
        <div class="content-container choose-us-container grey-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 pe-lg-5 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
                        <div class="choose-us-img">
                            <img src="{{ asset('web/images/why-choose-us.jpg') }}" alt="Caregiver assisting elderly person">
                        </div>
                    </div>
                    <div class="col-lg-6 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0.7s">
                        <div class="choose-us-content">
                            <div class="heading text-lg-start text-center">
                                <h5><span>Why Choose Us</span></h5>
                                <h3>Compelling Reasons to Partner <span>With Us</span></h3>
                                <p>Discover the advantages of choosing Considerate Healthcare Professionals for your care needs.</p>
                            </div>
                            <ul class="choose-us-list">
                                <li>
                                    <div class="icon"><i class="fa-solid fa-user-nurse"></i></div>
                                    <div class="text">
                                        <h4>Experienced & Compassionate Staff</h4>
                                        <p>Our team is highly trained, vetted, and genuinely cares about providing the best support.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
                                    <div class="text">
                                        <h4>Personalised Care Plans</h4>
                                        <p>We tailor our services to meet the unique needs and preferences of each individual client.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                                    <div class="text">
                                        <h4>Reliable & Trustworthy</h4>
                                        <p>Count on us for dependable, consistent, and high-quality care you can trust.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa-solid fa-map-location-dot"></i></div>
                                    <div class="text">
                                        <h4>Local Expertise</h4>
                                        <p>Deep understanding of the Lambeth and London area, ensuring relevant and accessible care.</p>
                                    </div>
                                </li>
                            </ul>
                             <div class="choose-us-cta mt-4 text-lg-start text-center">
                                <a href="#" class="btn btn-default">Learn More About Our Approach<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============================== Why Choose Us End ==============================-->
        <!--============================== Testimonials Start ==============================-->
        <div class="content-container pb-0 testimonial-container">
            <div class="container">
                <div class="row os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                    <div class="col-lg-12">
                        <div class="heading text-center">
                            <h5><span>Client Feedback</span></h5>
                            <h3>What Our Clients <span>Say</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.7s">
                    <div class="col-lg-12">
                        <div class="testimonial-list testimonial-slider">
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                                    <p>"The care provided by Considerate Healthcare Professionals was exceptional. They treated my mother with such kindness and respect. Highly recommended!"</p>
                                    <div class="testimonial-author">
                                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=160&h=160&dpr=1" alt="Client Avatar 1">
                                        <h4>Sarah Johnson</h4>
                                        <span>Lambeth Resident</span>
                                    </div>
                                </div>
                            </div>
                              <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                                    <p>"The care provided by Considerate Healthcare Professionals was exceptional. They treated my mother with such kindness and respect. Highly recommended!"</p>
                                    <div class="testimonial-author">
                                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=160&h=160&dpr=1" alt="Client Avatar 1">
                                        <h4>Sarah Johnson</h4>
                                        <span>Lambeth Resident</span>
                                    </div>
                                </div>
                            </div>
                              <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                                    <p>"The care provided by Considerate Healthcare Professionals was exceptional. They treated my mother with such kindness and respect. Highly recommended!"</p>
                                    <div class="testimonial-author">
                                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=160&h=160&dpr=1" alt="Client Avatar 1">
                                        <h4>Sarah Johnson</h4>
                                        <span>Lambeth Resident</span>
                                    </div>
                                </div>
                            </div>
                              <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                                    <p>"The care provided by Considerate Healthcare Professionals was exceptional. They treated my mother with such kindness and respect. Highly recommended!"</p>
                                    <div class="testimonial-author">
                                        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=160&h=160&dpr=1" alt="Client Avatar 1">
                                        <h4>Sarah Johnson</h4>
                                        <span>Lambeth Resident</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============================== Testimonials End ==============================-->
        <!--============================== Content Start ==============================-->
        <div class="content-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 os-animation animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="0.5s" style="animation-delay: 0.5s;">
                        <div class="heading text-center">
                            <h5><span>OUR LATEST BLOGS</span></h5>
                            <h3>INSIGHTS ON QUALITY  <span>HOME CARE & NURSING</span></h3>
                        </div>
                        <ul class="blog-list">
                            @foreach ($blogs as $blog)
                            <li class="blog-item os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                                <div class="blog-box">
                                    <div class="blog-img">
                                        <img src="{{ asset($blog->image) }}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <p class="blog-date">{{date('d M, Y', strtotime($blog->date))}}</p>
                                        <h5>{{ $blog->title }}</h5>
                                        <p>{{ $blog->excerpt }}</p>
                                    </div>
                                    <div class="blog-cta">
                                        <a href="{{ route('web.blogs_detail', $blog->slug) }}" class="blog-btn">Know More <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="text-center mt-5">
                        <a href="{{ route('web.blogs') }}" class="btn btn-default header-btn">View All Blog Posts <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============================== Content End ==============================-->
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