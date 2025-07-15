@extends('layouts.web')
@section('title', 'Faqs')
@section('content')
<!--============ FAQ Banner Start =====================-->
        <div class="content-container page-header-container career-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header-content os-animation" data-os-animation="fadeInDown">
                            <h1>Frequently Asked Questions</h1>
                            <p>Find answers to common questions about our services and recruitment process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================ FAQ Banner End ===================-->
        <!--============================== FAQ Section Start ==============================-->
        <div class="content-container">
            <div class="container">
                <div class="row os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                    <div class="col-lg-10 mx-auto">
                        <div class="accordion" id="faqAccordion">

                            <!-- FAQ Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What areas do you provide care services in?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We primarily serve the Lambeth borough and surrounding areas within London. Please contact us to confirm if we cover your specific location.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How are your caregivers trained and vetted?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        All our caregivers undergo rigorous background checks, including DBS checks, and receive comprehensive training covering essential care skills, safeguarding, first aid, and specific conditions. We also provide ongoing training and professional development opportunities.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How do I start the process of arranging care?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        The first step is to contact us for an initial discussion about your needs. We will then arrange a free, no-obligation care assessment at your home to understand your requirements in detail and develop a personalised care plan.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 4 (Staff) -->
                             <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What are the benefits of working for Considerate Healthcare Professionals? (For Staff)
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We offer competitive pay rates, flexible working hours, ongoing training and development, supportive management, pension contributions, and the opportunity to make a real difference in people's lives. Visit our careers page for more details.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 5 (Staff) -->
                             <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        What qualifications do I need to apply for a care position? (For Staff)
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        While previous experience and qualifications like NVQ/QCF in Health and Social Care are advantageous, they are not always essential. We value compassion, reliability, and a willingness to learn. We provide comprehensive training for successful candidates. A full UK driving license and access to a vehicle may be required for some roles.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============================== FAQ Section End ==============================-->
        <!--==================== Footer CTA Start =======================-->
        <div class="content-container footer-cta page-header-container career-header">
            <div class="container">
                <div class="row align-items-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                    <div class="col-lg-8">
                        <h3>Still Have Questions?</h3>
                        <p>If you didn't find the answer you were looking for, please don't hesitate to get in touch with our friendly team.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end text-center">
                        <a href="contact.html" class="btn btn-primary">Contact Us <span><i class="fa-solid fa-phone-volume"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Footer CTA End =======================-->
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