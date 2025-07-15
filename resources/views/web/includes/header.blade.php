  <!--============================== Header Start ==============================-->
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="top-bar_list">
                    <ul class="top-bar-content-left">
                        <li><span><i class="fas fa-phone-alt"></i></span><a href="tel:+442080000000">+44 20 8000 0000</a></li>
                        <li><span><i class="fas fa-envelope"></i></span><a href="mailto:info@chhealthcare.com">help@chc-limited.co.uk</a></li>
                    </ul>
                    <ul class="social-icon-top-bar">
                        <li><a href="https://facebook.com/chhealthcareuk" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/chhealthcareuk" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://instagram.com/chhealthcareuk" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://linkedin.com/company/chhealthcareuk" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <div class="nav-inside d-flex align-items-center justify-content-between">
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('web/images/logo.png') }}" alt="" /></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNav">
                        <div class="navbar-inside ms-auto">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="{{ route('web.home') }}">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="company" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Company</a>
                                    <ul class="dropdown-menu" aria-labelledby="company">
                                        <li><a class="dropdown-item" href="{{ route('web.aboutUs') }}">About Us</a></li>
                                        <li><a class="dropdown-item" href="{{ route('web.whyChooseUs') }}">Why Choose Us</a></li>
                                        <li><a class="dropdown-item" href="{{ route('web.faq') }}">FAQs</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="staff" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Staff</a>
                                    <ul class="dropdown-menu" aria-labelledby="staff">
                                        <li><a href="why-register-with-us.html" class="dropdown-item">Why Register With Us</a></li>
                                        <li><a class="dropdown-item" href="#">Training & Development</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="clients" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clients</a>
                                    <ul class="dropdown-menu" aria-labelledby="clients">
                                        <li><a class="dropdown-item" href="at-home-care.html">At Home Care</a></li>
                                        <li><a class="dropdown-item" href="#">Complex Care</a></li>
                                        <li><a class="dropdown-item" href="#">NHS/Private Hospitals</a></li>
                                        <li><a class="dropdown-item" href="#">Nursing/Residentail Homes</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('web.blogs') }}">News</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('web.contactUs') }}">Contact</a></li>
                            </ul>
                            <div class="nav-inside-content d-block d-md-none text-center">
                                <a href="{{ route('web.career') }}" class="btn btn-default header-btn">Join Us <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-none d-md-block">
                        <a href="{{ route('web.career') }}" class="btn btn-default header-btn">Join Us <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--============================== Header End ==============================-->
