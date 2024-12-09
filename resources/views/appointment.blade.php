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
                            <h3 class="mb-0">Appointment</h3>
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

            <section class="relative overflow-hidden jarallax">
                <img src="{{asset('asset/images/background/4.webp')}}" class="jarallax-img" alt="">
                <img src="{{asset('asset/images/misc/flowers-crop-2.webp')}}" class="w-30 absolute top-0 end-0 sw-anim" alt="">
                <div class="container relative z-1">
                    <div class="row g-4 align-items-center">

                        <div class="col-lg-8 offset-lg-4">
                            <div class="p-4 bg-white rounded-10px">
                                <form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="#">
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Select Service</h5>
                                            <div class="relative">
                                                <select name="service" id="service" value="" class="form-control bg-grey no-border">
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
                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <h5>Select Date</h5>
                                            <div id="date" class="relative input-group date" data-date-format="dd-mm-yyyy">
                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-calendar"></i>
                                                <input class="form-control bg-grey no-border" type="text" readonly />
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <h5>Select Time</h5>
                                            <div class="relative">
                                                <select name="time" id="time" value="" class="form-control bg-grey no-border">
                                                    <option selected disabled>Select time</option>
                                                    <option value="10:00">10:00 AM</option>
                                                    <option value="11:00">11:00 AM</option>
                                                    <option value="12:00">12:00 PM</option>
                                                    <option value="13:00">01:00 PM</option>
                                                    <option value="14:00">02:00 PM</option>
                                                    <option value="15:00">03:00 PM</option>
                                                    <option value="16:00">04:00 PM</option>
                                                    <option value="17:00">05:00 PM</option>
                                                    <option value="18:00">06:00 PM</option>
                                                    <option value="19:00">07:00 PM</option>
                                                    <option value="20:00">08:00 PM</option>
                                                </select>
                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5>Name</h5>
                                            <input type="text" name="Name" id="name" class="form-control bg-grey no-border" placeholder="" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5>Email</h5>
                                            <input type="text" name="Email" id="email" class="form-control bg-grey no-border" placeholder="" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <h5>Phone</h5>
                                            <input type="text" name="phone" id="phone" class="form-control bg-grey no-border" placeholder="" required>
                                        </div>
                                    </div> 

                                    <div class="field-set mb20">
                                        <h5>Have Any Message?</h5>
                                        <textarea name="message" id="message" class="form-control bg-grey no-border" placeholder="Your Message"></textarea>
                                    </div>
                                        
                                    
                                    <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                                    <div id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Send Appointment' class="btn-main">
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
                                <a class="btn-main btn-light-trans text-light mt-3" href="{{url('appointment#')}}">Make Appointment</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="relative p-5 text-center h-100 bg-color-2 text-light">
                                <i class="d-block fs-40 mb-2 icofont-location-pin"></i>
                                <h3>Visit Our Clinic</h3>
                                Belagavi<br>
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

    <!-- datepicker begin -->
    <script>
        $(function () {
          $("#date").datepicker({ 
                autoclose: true, 
                todayHighlight: true
          }).datepicker('update', new Date());
        });

    </script>
    <!-- datepicker close -->
   
</body>

</html>