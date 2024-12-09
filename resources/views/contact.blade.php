<x-guest-layout>
    
    <div id="wrapper">
        
        @include('layouts.header')

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="de-subheader" class="mt-sm-60 pt20 pb20 bg-gradient-45-deg text-light">
                <div class="container relative z-index-1000">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="mb-0">Contact</h3>
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
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle wow fadeInUp mb-3">Contact Form</div>
                            <h2 class="wow fadeInUp">Get In Touch</h2>

                            <p>Whether you have a question, a suggestion, or just want to say hello, this is the place to do it. Please fill out the form below with your details and message, and we'll get back to you as soon as possible.</p>

                            <div class="spacer-single"></div>

                            <h4>Our Office</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="img-with-cap mb20">
                                        <div class="d-title">{{  date("h:i:sa")}}
                                        </div>
                                        <div class="d-overlay"></div>
                                        <img src="{{asset('asset/images/misc/5.webp')}}" class="img-fullwidth rounded-1" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="icofont-location-pin me-2 id-color-2"></i>Office Location</div>
                                    Belagavi

                                    <div class="spacer-single"></div>

                                    <div class="fw-bold text-dark"><i class="icofont-envelope me-2 id-color-2"></i>Send a Message</div>
                                    <a href="mailTo:manjunathbg@gmail.com"> manjunathbg@gmail.com</a>

                                    <div class="spacer-single"></div>

                                    <div class="fw-bold text-dark"><i class="icofont-phone me-2 id-color-2"></i>Call Us Directly</div>
                                    <a href="tel:8123147355">8123147355</a>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="p-4 bg-grey rounded-10px">
                                <form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="#">
                                    
                                    <div class="field-set">
                                        <input type="text" name="Name" id="name" class="form-control no-border" placeholder="Your Name" required>
                                    </div>

                                    <div class="field-set">
                                        <input type="text" name="Email" id="email" class="form-control no-border" placeholder="Your Email" required>
                                    </div>

                                    <div class="field-set">
                                        <input type="text" name="phone" id="phone" class="form-control no-border" placeholder="Your Phone" required>
                                    </div>

                                    <div class="field-set ">
                                            <select name="service" id="service" value="" class="form-control no-border" placeholder="Services" required>
                                                <option selected disabled>Select service</option>
                                                <option value="Individual Therapy">Individual Therapy</option>
                                                <option value="Couples Counseling">Couples Counseling</option>
                                                <option value="Career Counseling">Career Counseling</option>
                                                <option value="Stress management">Stress management</option>
                                                <option value="Anxiety Treatment">Anxiety Treatment</option>
                                                <option value="Depression Therapy">Depression Therapy</option>
                                                <option value="Love Break-Up">Love Break-Up</option>
                                                <option value="Fitness and Exercise Programs">Fitness and Exercise Programs</option>
                                                <option value="Nutrition and Wellness Counseling">Nutrition and Wellness Counseling</option>
                                                <option value="Virtual Reality">Virtual Reality</option>
                                                <option value="Sleep Therapy">Sleep Therapy</option>
                                                <option value="Leadership Coaching">Leadership Coaching</option>
                                                <option value="Music Therapy">Music Therapy</option>
                                                <option value="Cognitive-Behavioral Therapy(CBT)">Cognitive-Behavioral Therapy(CBT)</option>
                                                <option value="Trauma-Informed Care">Trauma-Informed Care</option>
                                                <option value="Eye Movement Desensitization and Reprocessing (EMDR)">Eye Movement Desensitization and Reprocessing (EMDR)</option>
                                                <option value="Counseling and Therapy">Counseling and Therapy</option>
                                                <option value="Employee Assistance Programs">Employee Assistance Programs</option>
                                                <option value="Online Therapy">Online Therapyy</option>
                                                <option value="Art Therapy">Art Therapy</option>
                                            </select>
                                    </div>
                                        
                                    
                                    <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                                    <div id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Send Message' class="btn-main">
                                    </div>

                                    <div id="success_message" class='success'>
                                        Your message has been sent successfully. Refresh this page if you want to send more messages.
                                    </div>
                                    <div id="error_message" class='error'>
                                        Sorry there was an error sending your form.
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>  

            <section class="no-top no-bottom">
                <div class="container-fluid">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-6">
                            <div class="relative p-5 text-center h-100 bg-color text-light">
                                <i class="d-block fs-40 mb-2 icofont-clock-time"></i>
                                <h3>Schedule Your Appointment Today!</h3>
                                Mon - Sat: 8AM - 9PM<br>
                                Sunday: 10AM - 8PM<br>
                                <a class="btn-main btn-light-trans text-light mt-3" href="{{url('appointment')}}">Make Appointment</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="relative p-5 text-center h-100 bg-color-2 text-light">
                                <i class="d-block fs-40 mb-2 icofont-location-pin"></i>
                                <h3>Visit Our Clinic</h3>
                                Belagavi<br>
                                <br>
                                <a class="btn-main btn-light-trans text-light mt-3" href="#">Get Direction</a>
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