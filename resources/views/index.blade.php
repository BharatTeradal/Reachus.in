<x-guest-layout>
    
    <div id="wrapper">
        
        @include('layouts.header')
        
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="section-dark text-light no-top no-bottom position-relative overflow-hidden z-1000">
                <div class="v-center">
                    <div class="swiper">
                      <!-- Additional required wrapper -->
                      <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="swiper-inner" data-bgimage="{{asset('asset/images/slider/1.webp')}}">
                                <div class="sw-caption relative z-1000">
                                    <div class="container">
                                        <div class="row gx-5 align-items-center">

                                            <div class="spacer-double"></div>

                                            <div class="col-lg-6 offset-lg-6">     
                                                <div class="spacer-single"></div>
                                                <div class="sw-text-wrapper">
                                                    <div class="subtitle s2 mb-2">Reachus</div>
                                                    <h1 class="slider-title mb-3">Begin Your <span class="d-block alt-font fw-500 id-color-2 fs-96 fs-xs-60">Inner Peace Journey</span></h1>
                                                    <div class="col-lg-8">
                                                        <p class="slider-teaser mb-3">Embark on a journey of self-discovery and emotional healing with our expert therapists.</p>
                                                    </div>
                                                    <div class="spacer-10"></div>
                                                    <a class="btn-main bg-color-2 mb10 mb-3" href="{{url('services')}}">Our Services</a>
                                                </div>
                                            </div>

                                            <div class="spacer-single"></div>
                                        </div>

                                    </div>
                                </div>
                                <img src="{{asset('asset/images/misc/flowers-crop.webp')}}" class="w-30 absolute bottom-0 start-0 sw-anim" alt="">
                            </div>
                        </div>
                        <!-- Slides -->

                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="swiper-inner" data-bgimage="{{asset('asset/images/slider/2.webp')}}">
                                <div class="sw-caption relative z-1000">
                                    <div class="container">
                                        <div class="row gx-5 align-items-center">

                                            <div class="spacer-double"></div>

                                            <div class="col-lg-6 offset-lg-6">     
                                                <div class="spacer-single"></div>
                                                <div class="sw-text-wrapper">
                                                    <div class="subtitle s2 mb-2">Reachus</div>
                                                    <h1 class="slider-title mb-3">Begin Your <span class="d-block alt-font fw-500 id-color-2 fs-96 fs-xs-60">Inner Peace Journey</span></h1>
                                                    <div class="col-lg-8">
                                                        <p class="slider-teaser mb-3">Embark on a journey of self-discovery and emotional healing with our expert therapists.</p>
                                                    </div>
                                                    <div class="spacer-10"></div>
                                                    <a class="btn-main bg-color-2 mb10 mb-3" href="{{url('services')}}">Our Services</a>
                                                </div>
                                            </div>

                                            <div class="spacer-single"></div>
                                        </div>

                                    </div>
                                </div>
                                <img src="{{asset('asset/images/misc/flowers-crop.webp')}}" class="w-30 absolute bottom-0 start-0 sw-anim" alt="">
                            </div>
                        </div>
                        <!-- Slides -->

                        
                        

                      </div>
                      <!-- If we need pagination -->
                      <div class="swiper-pagination"></div>

                      <!-- If we need navigation buttons -->
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>

                      <!-- If we need scrollbar -->
                      <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container relative">
                    <img src="{{asset('asset/images/misc/leaf.webp')}}" class="absolute top-0 end-0 w-10 anim-up-down sm-hide" alt="">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="relative">
                                <div class="row g-4 z-1000">
                                    <div class="col-6">
                                        <div class="spacer-single sm-hide"></div>
                                        <img src="{{asset('asset/images/misc/11.webp')}}" class="img-fluid rounded-10px mb-4 w-70 ms-30 wow fadeInLeft" data-wow-delay=".0s" alt="">
                                        <img src="{{asset('asset/images/misc/3.webp')}}" class="img-fluid rounded-10px wow fadeInUp" data-wow-delay=".1s" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('asset/images/misc/10.webp')}}" class="img-fluid rounded-10px mb-4 wow fadeInDown" data-wow-delay=".2s" alt="">
                                        <img src="{{asset('asset/images/misc/8.webp')}}" class="img-fluid rounded-10px w-70 wow fadeInRight" data-wow-delay=".3s" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="subtitle wow fadeInUp mb-3">Welcome</div>
                            <h2 class="wow fadeInUp">Transform Your<span class="d-block mt-2 alt-font fw-500 fs-72 id-color-2">Mental Health</span></h2>
                            <p class="wow fadeInUp" style="text-align:justify;">Located in Belagavi, Reachus is your trusted destination for exceptional psychotherapy services. Our team of seasoned professionals is committed to guiding you on your journey to mental wellness and personal growth. Experience compassionate care and effective solutions tailored to your needs with Reachus.</p>
                            <div class="row g-4">

                                <div class="col-xl-7">
                                    <ul class="ul-style-2 text-dark fw-600">
                                        <li>Specialized in services.</li>
                                        <li>Expertise in Human Behavior.</li>
                                        <li>Problem-Solving and Guidance.</li>
                                        <li>Commitment to Confidentiality.</li>
                                    </ul>
                                </div>

                                <div class="col-xl-5">
                                    <div class="me-4">
                                        <h4 class="fw-bold mb-1">Excellent</h4>
                                        <div class="de-rating-ext fs-15">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <div class="fs-14 mb-0">Based on <span class="fw-bold">100+ reviews</span></div>
                                            <img src="{{asset('asset/images/misc/trustpilot-invert.webp')}}" class="w-100px" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="spacer-10"></div>
                            <a class="btn-main wow fadeInUp" href="{{url('about')}}">About Us</a>
                        </div>
                    </div>
                    
                </div>
            </section>

            

            <section class="text-light section-dark jarallax">
                <img src="{{asset('asset/images/background/3.webp')}}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row g-4 gx-5 relative z-index-1000">
                        <div class="col-lg-2 offset-lg-1 col-sm-4 text-center">
                            <img src="{{asset('asset/images/team/2.webp')}}" class="img-fluid circle wow scaleIn" alt="">
                            <h5 class="mt-3 mb-0">Dr. Manjunath BG</h5>
                            <p class="small mb-2">psychologist</p>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <p class="mb20 wow fadeInUp fs-32 fw-600 lh-1-3" style="text-align:justify;" data-wow-delay=".2s">Dr. Manjunath BG is a professional psychologist with expertise in helping individuals overcome mental health challenges and achieve personal growth. With a compassionate approach and in-depth knowledge of human behavior, he offers tailored therapeutic solutions to promote emotional well-being and lasting transformation.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="relative overflow-hidden pb60">
                <img src="{{asset('asset/images/misc/flowers-crop-2.webp')}}" class="w-30 absolute top-0 start-0 sw-anim" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle wow fadeInUp mb-3">Our Services</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Therapist &amp; <span class="alt-font fw-500 fs-64 id-color-2">Treatments</span></h2>
                            <p class="lead mb-0 wow fadeInUp">A therapist unlocks your inner strength, guiding you toward healing and a brighter, balanced future.</p>
                            <div class="spacer-single"></div>
                            <div class="spacer-half"></div>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="relative mb-3">
                                <a href="{{url('service-individual')}}" class="d-block hover mb-3">
                                    <div class="relative overflow-hidden rounded-20px shadow-soft">
                                        <img src="{{asset('asset/images/misc/flowers-crop-3-white.webp')}}" class="w-50 end-0 absolute hover-op-0" alt="">
                                        <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                            <span class="btn-main hover-scale-in-2">Read More</span>
                                        </div>
                                        <img src="{{asset('asset/images/services/1.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                    </div>
                                </a>
                                <h4>Individual Therapy</h4>
                                <p class="no-bottom" style="text-align:justify;">Individual therapy is a personalized journey where a skilled therapist helps you explore emotions, challenges, and goals in a safe space, empowering you to heal, grow, and embrace your best self.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="relative mb-3">
                                <a href="{{url('services-couple')}}" class="d-block hover mb-3">
                                    <div class="relative overflow-hidden rounded-20px shadow-soft">
                                        <img src="{{asset('asset/images/misc/flowers-crop-3-white.webp')}}" class="w-50 end-0 absolute hover-op-0" alt="">
                                        <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                            <span class="btn-main hover-scale-in-2">Read More</span>
                                        </div>
                                        <img src="{{asset('asset/images/services/2.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                    </div>
                                </a>
                                <h4>Couples Counseling</h4>
                                <p class="no-bottom" style="text-align:justify;">Couples counseling helps partners reconnect, resolve conflicts, and strengthen trust, fostering deeper intimacy, improving communication, and rediscovering love and harmony in their relationship.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="relative mb-3">
                                <a href="{{url('services-career')}}" class="d-block hover mb-3">
                                    <div class="relative overflow-hidden rounded-20px shadow-soft">
                                        <img src="{{asset('asset/images/misc/flowers-crop-3-white.webp')}}" class="w-50 end-0 absolute hover-op-0" alt="">
                                        <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                            <span class="btn-main hover-scale-in-2">Read More</span>
                                        </div>
                                        <img src="{{asset('asset/images/services/3.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                    </div>
                                </a>
                                <h4>Career Counseling</h4>
                                <p class="no-bottom" style="text-align:justify;">Career counseling helps you navigate professional choices, discover your passions, and align goals with opportunities, empowering you to take confident steps toward success.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="relative mb-3">
                                <a href="{{url('service-stress')}}" class="d-block hover mb-3">
                                    <div class="relative overflow-hidden rounded-20px shadow-soft">
                                        <img src="{{asset('asset/images/misc/flowers-crop-3-white.webp')}}" class="w-50 end-0 absolute hover-op-0" alt="">
                                        <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                            <span class="btn-main hover-scale-in-2">Read More</span>
                                        </div>
                                        <img src="{{asset('asset/images/services/4.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                    </div>
                                </a>
                                <h4>Stress Management</h4>
                                <p class="no-bottom" style="text-align:justify;">Stress management lets you turn pressure into power, bringing calm to life’s chaos. Embrace balance and unlock your true potential.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="relative mb-3">
                                <a href="{{url('service-anxiety')}}" class="d-block hover mb-3">
                                    <div class="relative overflow-hidden rounded-20px shadow-soft">
                                        <img src="{{asset('asset/images/misc/flowers-crop-3-white.webp')}}" class="w-50 end-0 absolute hover-op-0" alt="">
                                        <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                            <span class="btn-main hover-scale-in-2">Read More</span>
                                        </div>
                                        <img src="{{asset('asset/images/services/5.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                    </div>
                                </a>
                                <h4>Anxiety Treatment</h4>
                                <p class="no-bottom" style="text-align:justify;">Anxiety treatment helps you break free from fear, restoring peace and confidence in your life. Discover the path to calm, clarity, and a brighter future.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="relative mb-3">
                                <a href="{{url('service-depression')}}" class="d-block hover mb-3">
                                    <div class="relative overflow-hidden rounded-20px shadow-soft">
                                        <img src="{{asset('asset/images/misc/flowers-crop-3-white.webp')}}" class="w-50 end-0 absolute hover-op-0" alt="">
                                        <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                            <span class="btn-main hover-scale-in-2">Read More</span>
                                        </div>
                                        <img src="{{asset('asset/images/services/6.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                    </div>
                                </a>
                                <h4>Depression Therapy</h4>
                                <p class="no-bottom" style="text-align:justify;">Depression therapy helps you navigate through challenges, find hope, and rediscover joy. With expert guidance, it leads you toward healing and inner peace, empowering you to embrace life again.</p>
                            </div>
                        </div>
                    </div>

                    <div class="spacer-double"></div>
                </div>
            </section>

            <section class="bg-color-2 section-dark text-light text-center pt60 pb50 jarallax">
                <img src="{{asset('asset/images/background/gradient-3.webp')}}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count fs-15 wow fadeInRight" data-wow-delay=".0s">
                                <h3 class="fs-40"><span class="timer fs-40" data-to="6250" data-speed="3000">0</span>+</h3>
                                Happy Customers
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count fs-15 wow fadeInRight" data-wow-delay=".2s">
                                <h3 class="fs-40"><span class="timer fs-40" data-to="3200" data-speed="3000">0</span>+</h3>
                                Successfull Therapy
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count fs-15 wow fadeInRight" data-wow-delay=".4s">
                                <h3 class="fs-40"><span class="timer fs-40" data-to="20" data-speed="3000">0</span>+</h3>
                                Years of Exeperience
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count fs-15 wow fadeInRight" data-wow-delay=".6s">
                                <h3 class="fs-40"><span class="timer fs-40" data-to="15" data-speed="3000">0</span>+</h3>
                                Specialist
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-dark jarallax">
                <img src="{{asset('asset/images/background/1.webp')}}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row text-light">
                        <div class="col-lg-6 offset-lg-3 text-center">                            
                            <div class="subtitle s2 wow fadeInUp mb-3">Our Packages</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Pricing <span class="alt-font fw-500 fs-64 id-color-2">Plans</span></h2>
                            <p class="lead">  
We offer flexible pricing plans to fit your needs, offering expert guidance and personalized care. Choose the right option for your journey towards growth and well-being.</p>
                            <div class="spacer-single"></div>
                        </div>
                    </div>

                    <div class="row g-4 align-items-center">
                        <div class="col-lg-4 col-sm-6">
                            <div class="relative bg-white h-100 rounded-10px overflow-hidden wow fadeInUp" data-wow-delay=".0s">
                                <h4 class="bg-color text-light p-3">Individual Therapy</h4>
                                <div class="p-3 px-4 mb-4 relative">
                                    <img src="{{asset('asset/images/services/1.webp')}}" class="absolute circle mb-4 w-80px end-0 me-4 shadow-soft wow scaleIn" data-wow-delay=".2s" alt="">
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
                                    <img src="{{asset('asset/images/services/2.webp')}}" class="absolute circle mb-4 w-80px end-0 me-4 shadow-soft wow scaleIn" data-wow-delay=".4s" alt="">
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
                                    <img src="{{asset('asset/images/services/3.webp')}}" class="absolute circle mb-4 w-80px end-0 me-4 shadow-soft wow scaleIn" data-wow-delay=".6s" alt="">
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
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Any <span class="alt-font fw-500 fs-64 id-color-2">Questions</span></h2>
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

            <section class="bg-color text-light pt40 pb40">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-3">
                            <div class="relative">
                                <i class="d-block fs-40 mb-2 icofont-clock-time"></i>
                                Mon - Sat: 8AM - 9PM<br>
                                Sunday: 10AM - 8PM<br>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="relative">
                                <i class="d-block fs-40 mb-2 icofont-location-pin"></i>
                                Belagavi
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="relative">
                                <i class="d-block fs-40 mb-2 icofont-phone"></i>
                                <a href="tel:8123147355" style="color:white">8123147355</a><br>
                                contact us: <a href="mailTo:manjunathbg@gmail.com" style="color:white"> manjunathbg@gmail.com</a>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <a class="btn-main bg-color-2" href="{{url('appointment')}}">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top no-bottom">
                <div class="container-fluid">
                    <div class="row g-0">
                        <div class="col-lg-2 text-center">
                            <a href="{{url('case-details')}}" class="d-block hover">
                                <div class="relative overflow-hidden">
                                    <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                        <i class="icofont-plus hover-scale-in-3"></i>
                                    </div>
                                    <img src="{{asset('asset/images/gallery/1.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-2 text-center">
                            <a href="{{url('case-details')}}" class="d-block hover">
                                <div class="relative overflow-hidden">
                                    <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                        <i class="icofont-plus hover-scale-in-3"></i>
                                    </div>
                                    <img src="{{asset('asset/images/gallery/2.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-2 text-center">
                            <a href="{{url('case-details')}}" class="d-block hover">
                                <div class="relative overflow-hidden">
                                    <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                        <i class="icofont-plus hover-scale-in-3"></i>
                                    </div>
                                    <img src="{{asset('asset/images/gallery/3.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-2 text-center">
                            <a href="{{url('case-details')}}" class="d-block hover">
                                <div class="relative overflow-hidden">
                                    <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                        <i class="icofont-plus hover-scale-in-3"></i>
                                    </div>
                                    <img src="{{asset('asset/images/gallery/4.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-2 text-center">
                            <a href="{{url('case-details')}}" class="d-block hover">
                                <div class="relative overflow-hidden">
                                    <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                        <i class="icofont-plus hover-scale-in-3"></i>
                                    </div>
                                    <img src="{{asset('asset/images/gallery/5.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-2 text-center">
                            <a href="{{url('case-details')}}" class="d-block hover">
                                <div class="relative overflow-hidden">
                                    <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                        <i class="icofont-plus hover-scale-in-3"></i>
                                    </div>
                                    <img src="{{asset('asset/images/gallery/6.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        @include('layouts.footer')
    </div>
</x-guest-layout>