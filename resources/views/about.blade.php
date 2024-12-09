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
                            <h3 class="mb-0">About Us</h3>
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

            <section>
                <div class="container">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="relative rounded-20px overflow-hidden shadow-soft">
                                <a class="de-video-play-button popup-youtube" href="http://www.youtube.com/watch?v=RFTUZqXZN6M">
                                    <span></span>
                                </a>
                                <img src="{{asset('asset/images/misc/2.webp')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="subtitle wow fadeInUp mb-3">Who We Are</div>
                            <h2 class="wow fadeInUp">Meet the Experts Dedicated to Transforming Lives and Empowering Minds</h2>
                            <p class="wow fadeInUp" style="text-align: justify;">Our team of experienced psychology professionals is passionate about helping individuals achieve mental well-being and personal growth. With a deep commitment to understanding and addressing each person’s unique needs, we provide compassionate support and practical solutions. Whether you’re seeking guidance for personal challenges, emotional health, or professional development, we offer expert services to empower you on your journey to a fulfilled life.</p>
                            <div class="spacer-10"></div>
                            <a class="btn-main wow fadeInUp" href="#">About Us</a>
                        </div>
                    </div>
                    
                </div>
            </section>

            <section class="bg-color-2 section-dark text-light text-center pt60 pb50 jarallax">
                <img src="{{asset('asset/images/background/gradient-3.webp')}}')}}" class="jarallax-img" alt="">
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

            <!-- <section class="bg-color-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle bg-white wow fadeInUp mb-3">Services</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">We are specialized In</h2>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-sm-6">
                            <img src="{{asset('asset/images/team/1.webp')}}')}}" class="img-fluid rounded-10px" alt="">
                            <div class="text-center pt-4">
                                <h4 class="mb-0">Jeffery Mussman</h4>
                                <p class="mb-2">Psychologist</p>
                                <div class="social-icons">
                                    <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-x-twitter"></i></a>
                                    <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <img src="{{asset('asset/images/team/2.webp')}}')}}" class="img-fluid rounded-10px" alt="">
                            <div class="text-center pt-4">
                                <h4 class="mb-0">Sophia Jenkins</h4>
                                <p class="mb-2">Psychologist</p>
                                <div class="social-icons">
                                    <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-x-twitter"></i></a>
                                    <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <img src="{{asset('asset/images/team/3.webp')}}')}}" class="img-fluid rounded-10px" alt="">
                            <div class="text-center pt-4">
                                <h4 class="mb-0">Melissa Taylor</h4>
                                <p class="mb-2">Psychologist</p>
                                <div class="social-icons">
                                    <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-x-twitter"></i></a>
                                    <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <img src="{{asset('asset/images/team/4.webp')}}')}}" class="img-fluid rounded-10px" alt="">
                            <div class="text-center pt-4">
                                <h4 class="mb-0">Noah Anderson</h4>
                                <p class="mb-2">Psychologist</p>
                                <div class="social-icons">
                                    <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-x-twitter"></i></a>
                                    <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="relative jarallax overflow-hidden">
                <img src="{{asset('asset/images/background/gradient-2.webp')}}')}}" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-12 text-center">
                            <div class="subtitle text-dark wow fadeInUp mb-3">Vision &amp; Mission</div>
                            <h2>Vision &amp; Mission</h2>
                        </div>

                        <div class="col-lg-6">
                            <h4 class="mb-4 wow fadeInRight">Our Vision</h4>
                            <p class="fs-24 fw-600 lh-1-4 wow fadeInUp" style="text-align: justify;">
  Our vision is to create a world where mental well-being is prioritized, individuals are empowered to reach their full potential, and everyone has access to the support and resources needed for personal growth and transformation. We aim to inspire positive change, foster resilience, and promote a healthier, more connected society.
</p>
                        </div>

                        <div class="col-lg-6">
                            <h4 class="mb-4 wow fadeInRight">Our Mission</h4>
                            <ol class="ol-style-1">
                                <li class="wow fadeInUp" style="text-align: justify;" data-wow-delay=".2s"><span class="fw-bold id-color">Empower Individuals:</span>To provide expert psychological support and guidance that helps individuals overcome obstacles, build resilience, and unlock their full potential.</li>
                                <li class="wow fadeInUp" style="text-align: justify;" data-wow-delay=".4s"><span class="fw-bold id-color">Promote mental wellness:</span>To raise awareness about the importance of mental health and create accessible, effective resources for personal growth and emotional well-being.</li>
                                <li class="wow fadeInUp" style="text-align: justify;" data-wow-delay=".6s"><span class="fw-bold id-color">Foster Positive Change:</span> To inspire and lead transformative change in individuals and communities, cultivating environments that nurture mental health, personal development, and lifelong success.</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <img src="{{asset('asset/images/misc/flowers-crop-4.webp')}}')}}" class="w-20 absolute start-0 bottom-0 sw-anim" alt="">
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
                                <a href="tel:8123147355" style="color:black">8123147355</a><br>
                                contact us: <a href="mailTo:manjunathbg@gmail.com" style="color:black">manjunathbg@gmail.com</a>

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