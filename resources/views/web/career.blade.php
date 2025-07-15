@extends('layouts.web')
@section('title', 'Home')
@section('content')
<!--============================== Page Header Start ==============================-->
        <div class="content-container page-header-container career-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header-content os-animation" data-os-animation="fadeInDown">
                            <h1>Join Our Team</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============================== Page Header End ==============================-->
        <!--============================== Career Form Start ==============================-->
        <div class="content-container career-form-container">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12">
                        <div class="career-form-wrapper os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                            <div class="heading text-center">
                                <h5><span>Apply Now</span></h5>
                                <h3>Nursing Staff <span>Application</span></h3>
                                <p>We are always looking for compassionate and skilled nursing professionals. Fill out the form below to apply.</p>
                            </div>
                            <form action="#" method="post" enctype="multipart/form-data" class="career-form">
                                <div class="row">
                                    <!-- Personal Information -->
                                    <div class="col-md-6 mb-3">
                                        <label for="fullName" class="form-label">Full Name <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email Address <span class="required">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">Phone Number <span class="required">*</span></label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="address" class="form-label">Full Address <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="address" name="address" required>
                                    </div>
                                    <!-- Professional Information -->
                                    <div class="col-md-6 mb-3">
                                        <label for="position" class="form-label">Position Applying For <span class="required">*</span></label>
                                        <div class="form-group position-relative">    
                                            <select class="form-select" id="position" name="" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option value="Registered Nurse (RGN)">Registered Nurse (RGN)</option>
                                                <option value="Healthcare Assistant (HCA)">Healthcare Assistant (HCA)</option>
                                                <option value="Support Worker">Support Worker</option>
                                                <option value="Other">Other (Please Specify)</option>
                                            </select>
                                            <div class="form-icon"> 
                                                <img src="include/images/arrow-down.svg" alt="">
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="nmcPin" class="form-label">NMC PIN (if applicable)</label>
                                        <input type="text" class="form-control" id="nmcPin" name="nmcPin">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="experience" class="form-label">Relevant Experience (Years) <span class="required">*</span></label>
                                        <input type="number" class="form-control" id="experience" name="experience" min="0" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="qualifications" class="form-label">Briefly Describe Qualifications/Skills <span class="required">*</span></label>
                                        <textarea class="form-control" id="qualifications" name="qualifications" rows="4" required></textarea>
                                    </div>
                                    <!-- Eligibility & CV -->
                                    <div class="col-md-6">
                                        <div class="custom-radio-container">
                                            <p>Right to Work</p>
                                            <label class="custom-radio">
                                                Yes
                                                <input type="radio" name="rightToWork" id="rightToWorkYes" value="Yes" required>
                                                <span class="radio-checkmark"></span>
                                            </label>
                                            <label class="custom-radio">
                                                No
                                                <input type="radio" name="rightToWork" id="rightToWorkNo" value="No">
                                                <span class="radio-checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="cvUpload" class="form-label">Upload CV (PDF, DOC, DOCX) <span class="required">*</span></label>
                                        <input type="file" class="form-control" id="cvUpload" name="cvUpload" accept=".pdf,.doc,.docx" required>
                                    </div>
                                    <!-- Submission -->
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-default">Submit Application <span><i class="fa-solid fa-paper-plane"></i></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============================== Career Form End ======================-->
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