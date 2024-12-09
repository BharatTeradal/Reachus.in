<x-guest-layout>
    
    <div id="wrapper">
        
        @include('layouts.header')
        <!-- header close -->
        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <div id="top"></div>
            <!-- section begin -->
            <section id="de-subheader" class="mt-sm-60 pt20 pb20 bg-gradient-45-deg text-light">
                <div class="container relative z-index-1000">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="mb-0">Our Services</h3>
                        </div>

                        <div class="col-lg-6 text-lg-end">
                            <ul class="crumb">
                                <li><h5><a class="menu-item" href="/">Home</a></h5>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section class="relative overflow-hidden">
                <img src="{{ asset('asset/images/misc/flowers-crop-2.webp') }}')}}" class="w-30 absolute top-0 start-0 sw-anim" alt="">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle wow fadeInUp mb-3">Our Services</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Therapist &amp; Treatments</h2>
                        </div>
                    </div>

                    <div class="row g-5">
                        <div class="col-lg-4 col-sm-6">
                            <div class="relative p-4 pb-0 text-center bg-grey mt-5 h-100 rounded-10px">
                                <div class="alt-font absolute end-0 pe-4 fw-bold fs-24 id-color">01</div>
                                <img src="{{ asset('asset/images/services/1.webp')}}" class="img-fluid circle mb-4 w-30 mt-50 shadow-soft wow scaleIn" alt="">
                                <h4>Individual Therapy</h4>
                                <p class="no-bottom" style="text-align:justify;">Individual therapy is a personalized journey where a skilled therapist helps you explore emotions, challenges, and goals in a safe space, empowering you to heal, grow, and embrace your best self.</p>
                                <a class="btn-main btn-main btn-light-trans mt-3" href="{{url('service-individual
                                ')}}">Read More</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="relative p-4 pb-0 text-center bg-grey mt-5 h-100 rounded-10px">
                                <div class="alt-font absolute end-0 pe-4 fw-bold fs-24 id-color">02</div>
                                <img src="{{ asset('asset/images/services/2.webp') }}" class="img-fluid circle mb-4 w-30 mt-50 shadow-soft wow scaleIn" alt="">
                                <h4>Couples Counseling</h4>
                                <p class="no-bottom" style="text-align:justify;">Couples counseling helps partners reconnect, resolve conflicts, and strengthen trust, fostering deeper intimacy, improving communication, and rediscovering love and harmony in their relationship.</p>
                                <a class="btn-main btn-main btn-light-trans mt-3" href="{{url('services-couple')}}">Read More</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="relative p-4 pb-0 text-center bg-grey mt-5 h-100 rounded-10px">
                                <div class="alt-font absolute end-0 pe-4 fw-bold fs-24 id-color">03</div>
                                <img src="{{ asset('asset/images/services/3.webp') }}" class="img-fluid circle mb-4 w-30 mt-50 shadow-soft wow scaleIn" alt="">
                                <h4>Career Counseling</h4>
                                <p class="no-bottom" style="text-align:justify;">Career counseling helps you navigate professional choices, discover your passions, and align goals with opportunities, empowering you to take confident steps toward success.</p>
                                <a class="btn-main btn-main btn-light-trans mt-3" href="{{url('services-career')}}">Read More</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="relative p-4 pb-0 text-center bg-grey mt-5 h-100 rounded-10px">
                                <div class="alt-font absolute end-0 pe-4 fw-bold fs-24 id-color">04</div>
                                <img src="{{ asset('asset/images/services/4.webp') }}" class="img-fluid circle mb-4 w-30 mt-50 shadow-soft wow scaleIn" alt="">
                                <h4>Stress Management</h4>
                                <p class="no-bottom" style="text-align:justify;">Stress management lets you turn pressure into power, bringing calm to life’s chaos. Embrace balance and unlock your true potential and turn your life in positive manner.</p>
                                <a class="btn-main btn-main btn-light-trans mt-3" href="{{url('service-stress')}}">Read More</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="relative p-4 pb-0 text-center bg-grey mt-5 h-100 rounded-10px">
                                <div class="alt-font absolute end-0 pe-4 fw-bold fs-24 id-color">05</div>
                                <img src="{{ asset('asset/images/services/5.webp') }}" class="img-fluid circle mb-4 w-30 mt-50 shadow-soft wow scaleIn" alt="">
                                <h4>Anxiety Treatment</h4>
                                <p class="no-bottom" style="text-align:justify;">Anxiety treatment helps you break free from fear, restoring peace and confidence in your life. Discover the path to calm, clarity, and a brighter future.</p>
                                <a class="btn-main btn-main btn-light-trans mt-3" href="{{url('service-anxiety')}}">Read More</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="relative p-4 pb-0 text-center bg-grey mt-5 h-100 rounded-10px">
                                <div class="alt-font absolute end-0 pe-4 fw-bold fs-24 id-color">06</div>
                                <img src="{{ asset('asset/images/services/6.webp') }}" class="img-fluid circle mb-4 w-30 mt-50 shadow-soft wow scaleIn" alt="">
                                <h4>Depression Therapy</h4>
                                <p class="no-bottom" style="text-align:justify;">Depression therapy helps you navigate through challenges, find hope, and rediscover joy. With expert guidance, it leads you toward healing and inner peace.</p>
                                <a class="btn-main btn-main btn-light-trans mt-3" href="{{url('service-depression')}}">Read More</a>
                            </div>
                        </div>

                        <div class="spacer-single"></div>
                    </div>
                </div>
            </section>

            <section class="section-dark jarallax">
                <img src="{{ asset('asset/images/background/1.webp') }}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row text-light">
                        <div class="col-lg-6 offset-lg-3 text-center">                            
                            <div class="subtitle s2 wow fadeInUp mb-3">Our Package</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Pricing Plans</h2>
                            <div class="spacer-single"></div>
                        </div>
                    </div>

                    <div class="row g-4 align-items-center">
                        <div class="col-lg-4 col-sm-6">
                            <div class="relative bg-white h-100 rounded-10px overflow-hidden wow fadeInUp" data-wow-delay=".0s">
                                <h4 class="bg-color text-light p-3">Individual Therapy</h4>
                                <div class="p-3 px-4 mb-4 relative">
                                    <img src="{{ asset('asset/images/services/1.webp') }}" class="absolute circle mb-4 w-80px end-0 me-4 shadow-soft wow scaleIn" data-wow-delay=".2s" alt="">
                                    <div class="fs-14 text-dark fw-500">Start from</div>
                                    <div class="mb-3">
                                        <h2 class="d-inline id-color-2">$150</h2><span class="fs-14">/session</span>
                                    </div>
                                    <p style="text-align:justify;">Individual therapy is a personalized journey where a therapist helps you in providing a safe space for healing, growth, and self-discovery.</p>

                                    <ul class="ul-style-2 fw-600 text-dark mb-3">
                                        <li>Personalized</li>
                                        <li>Confidential</li>
                                        <li>Effective</li>
                                    </ul>

                                    <a class="btn-main btn-light-trans w-100" href="{{url('appointment')}}">
                                        Make Appointment
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="relative bg-white h-100 rounded-10px overflow-hidden wow fadeInUp" data-wow-delay=".2s">
                                <h4 class="bg-color-2 text-light p-3">Couples Counseling</h4>
                                <div class="p-3 px-4 mb-4 relative">
                                    <img src="{{ asset('asset/images/services/2.webp') }}" class="absolute circle mb-4 w-80px end-0 me-4 shadow-soft wow scaleIn" data-wow-delay=".4s" alt="">
                                    <div class="fs-14 text-dark fw-500">Start from</div>
                                    <div class="mb-3">
                                        <h2 class="d-inline id-color-2">$180</h2><span class="fs-14">/session</span>
                                    </div>
                                    <p style="text-align:justify;">Couples counseling helps partners reconnect, resolve conflicts, and build trust, fostering intimacy and rediscovering love and harmony.</p>

                                    <ul class="ul-style-2 fw-600 text-dark mb-3">
                                        <li>Personalized</li>
                                        <li>Confidential</li>
                                        <li>Effective</li>
                                    </ul>

                                    <a class="btn-main btn-light-trans w-100" href="{{url('appointment')}}">
                                        Make Appointment
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="relative bg-white h-100 rounded-10px overflow-hidden wow fadeInUp" data-wow-delay=".4s">
                                <h4 class="bg-color text-light p-3">Career Counseling</h4>
                                <div class="p-3 px-4 mb-4 relative">
                                    <img src="{{ asset('asset/images/services/3.webp') }}" class="absolute circle mb-4 w-80px end-0 me-4 shadow-soft wow scaleIn" data-wow-delay=".6s" alt="">
                                    <div class="fs-14 text-dark fw-500">Start from</div>
                                    <div class="mb-3">
                                        <h2 class="d-inline id-color-2">$190</h2><span class="fs-14">/session</span>
                                    </div>
                                    <p style="text-align:justify;">Career counseling helps you navigate professional choices, align goal opportunities, empowering you to take confident moves.</p>

                                    <ul class="ul-style-2 fw-600 text-dark mb-3">
                                        <li>Personalized</li>
                                        <li>Confidential</li>
                                        <li>Effective</li>
                                    </ul>

                                    <a class="btn-main btn-light-trans w-100" href="{{url('appointment')}}">
                                        Make Appointment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">                            
                            <div class="subtitle wow fadeInUp mb-3">Do you have</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Any Questions</h2>
                        </div>
                    </div>

                    <div class="row g-4 align-items-center">

                        <div class="col-lg-12">
                            <div class="accordion s2 wow fadeInUp">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-a1">
                                        What kind of therapy services do you offer?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a1">
                                        <p>We offer a range of therapy services, including individual therapy, couples therapy, and group therapy sessions. Each is tailored to meet the unique needs of our clients.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a2">
                                        Do you offer online therapy options?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a2">
                                        <p>Yes, we offer virtual therapy sessions for your convenience and comfort, ensuring you can access support from anywhere.</p>
                                    </div>                                        
                                    <div class="accordion-section-title" data-tab="#accordion-a3">
                                        How can I schedule an appointment?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a3">
                                        <p>You can easily schedule an appointment by contacting our office via phone or email, or by filling out our online appointment request form.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a4">
                                        Are your services covered by insurance?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a4">
                                        <p>We accept a variety of insurance plans, and our team can help you navigate the process to ensure you receive the coverage you are entitled to.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a5">
                                        Do you offer specialized therapy for specific issues?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a5">
                                        <p>Our psychologists have expertise in various areas, such as anxiety, depression, Love Break-up, Individual, couple counseling and more, offering specialized therapy tailored to your unique needs.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a6">
                                        Can I choose my therapist?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a6">
                                        <p>We strive to match you with a therapist who best fits your preferences and needs, ensuring a strong therapeutic alliance for effective treatment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-color no-top no-bottom">
                <div class="container-fluid">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-4 col-md-4">
                            <div class="relative p-4 text-light">
                                <i class="d-block fs-40 mb-2 icofont-clock-time"></i>
                                Mon - Sat: 8AM - 9PM<br>
                                Sunday: 10AM - 8PM<br>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="relative p-4 bg-color-2 text-light">
                                <i class="d-block fs-40 mb-2 icofont-location-pin"></i>
                                Belagavi
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="relative p-4 bg-color-3 text-dark">
                                <i class="d-block fs-40 mb-2 icofont-phone"></i>
                                Phone no:<a href="tel:8123147355" style="color:black">&nbsp;8123147355</a><br>
                                contact us: <a href="mailTo:manjunathbg@gmail.com" style="color:black"> manjunathbg@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->
        <!-- footer begin -->
        @include('layouts.footer')
    </div>
</x-guest-layout>
        <!-- footer close -->
    </div>


    
    