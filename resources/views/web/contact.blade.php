@extends('layouts.web')
@section('title', 'Contact Us')
@section('content')
<!--============================== Page Header Start ==============================-->
    <div class="content-container page-header-container career-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-content os-animation" data-os-animation="fadeInDown">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Page Header End ==============================-->
    <!-- Contact Section -->
    <section class="content-container grey-bg">
        <div class="container">
            <div class="contact-wrapper os-animation">
                <div class="row gx-lg-5 gy-5">
                    <div class="col-lg-5" data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
                        <div class="alert alert-success successMessage" style="display:none;"></div>
                        <div class="contact-info mb-4">
                            <h3>Get In Touch</h3>
                            <p>Feel free to contact us via phone, email, or by filling out the form. We aim to respond promptly.</p>
                            <ul class="contact-info-list mt-4">
                                <li><i class="fas fa-map-marker-alt"></i>
                                    <div class="contact-info"><strong>Address:</strong>Lorem ipsum dolor, sit amet consectetur.</div>
                                </li>
                                <li><i class="fas fa-phone-alt"></i>
                                    <div><strong>Phone:</strong><a href="tel:+442012345678">+44 20 1234 5678</a></div>
                                </li>
                                <li><i class="fas fa-envelope"></i>
                                    <div class="contact-info"><strong>Email:</strong><a href="mailto:info@chplimited.co.uk">info@chplimited.co.uk</a></div>
                                </li>
                                <li><i class="far fa-clock"></i>
                                    <div class="contact-info"><strong>Hours:</strong>Mon - Fri: 9:00 AM - 5:00 PM</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Contact Form Column -->
                    <div class="col-lg-7" data-os-animation="fadeInRight" data-os-animation-delay="0.7s">
                        <div class="contact-form-section">
                            <h3>Send Us a Message</h3>
                            <p class="mb-4">Please fill out the form below and we will get back to you as soon as possible.</p>
                            <form  id="contactForm" class="contact-form" action="{{route('web.contactStore')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Full Name<span class="required">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
                                            <div class="nameErr err"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email Address<span class="required">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="your.email@example.com">
                                            <div class="emailErr err"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="(Optional)" maxlength="12">
                                            <div class="phoneErr err"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="subject" class="form-label">Subject<span class="required">*</span></label>
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Reason for contacting">
                                            <div class="subjectErr err"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="description" class="form-label">Message<span class="required">*</span></label>
                                        <textarea class="form-control" id="description" name="description" rows="6" placeholder="Enter your message here..."></textarea>
                                        <div class="descriptionErr err"></div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default">
                                    Send Message
                                    <span><i class="fas fa-paper-plane"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="content-container p-0">
        <div class="map-container os-animation" data-os-animation="fadeInUp">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.04839124104!2d-0.1277583841948499!3d51.50735097963526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ce329d4c7b%3A0x7b4d8b3f2f5d9d9c!2sLondon%2C%20UK!5e0!3m2!1sen!2sus!4v1678886400000!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
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
    @push('after-scripts')
<script>
     $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
       $("#contactForm").submit(function(event) {
           $('.err').text('');
           $('.form-control').css('border-color','#0ea8dc');
           event.preventDefault();
           formdata = new FormData($(this)[0]);
           $.ajax({
               url: $(this).attr('action'),
               contentType: false,
               processData: false,
               cache:false,
               data: formdata,
               type: $(this).attr('method'),
               beforeSend: function() {
                   $("#overlay").fadeIn(300);
               },complete: function() {
                   $("#overlay").fadeOut(300);
                   
               },
               success: function(response){
               if(response.status){
                   $("#contactForm")[0].reset();
                   $('.successMessage')
                    .css('display', 'block')
                    .text(response.message)
                    .delay(2000)
                    .fadeOut(5000);
                   
               }else{

                    $.each(response.errors, function(key,val) {
                        var fieldElement = $('.' + key.replace(/\./g, '_')+'Err');
                        fieldElement.css('color','red').text(val[0]);
                        $('input[name="' + key + '"], select[name="' + key + '"], textarea[name="' + key + '"]').css('border-color', '#0ea8dc');
                    });   
               }
               },
   
           });
       });
   
   });
</script>
@endpush