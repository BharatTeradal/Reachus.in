<x-guest-layout>
    
    <div id="wrapper">
        
        @include('layouts.header')
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
                            <li><h5><a class="menu-item" href="{{ url('services')}}">Back</a></h5></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section class="relative overflow-hidden">
                <img src="images/misc/flowers-crop-2.webp" class="w-40 absolute top-0 end-10 sw-anim" alt="">

                <div class="container">
                    <div class="row align-items-center g-4 gx-5">
                        <div class="col-lg-6">
                            <div class="subtitle wow fadeInUp mb-3">Our Services</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Couples Counseling</h2>
                            <p class="lead" style="text-align:justify;">Couples counseling helps partners reconnect, resolve conflicts, and strengthen trust, fostering deeper intimacy, improving communication, and rediscovering love and harmony in their relationship.
                            </p>

                            <div class="fs-14 text-dark fw-500">Start from</div>
                            <div class="mb-3">
                                <h2 class="d-inline id-color-2">$180</h2><span class="fs-14">/session</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('asset/images/services/2.webp')}}" class="img-fluid rounded-20px" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-dark text-light jarallax">
                <img src="{{asset('asset/images/background/3.webp')}}" class="jarallax-img" alt="">
                <div class="container">

                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Initial Assessment</h4>
                                <p style="text-align:justify;">In the first session, both partners share their concerns and the issues they want to address. The therapist listens attentively to each person’s perspective and background. This helps the therapist understand the dynamics of the relationship. Together, you’ll discuss patterns of communication, conflict, and emotional needs. The therapist will gather information to create a tailored plan. This session sets the foundation for productive, open dialogue.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Establishing Goals</h4>
                                <p style="text-align:justify;">Couples set specific, realistic goals that both partners agree on. These goals address key issues, such as communication, trust, or intimacy. The therapist helps you align your expectations and create a roadmap for healing. SMART goals guide the therapy, ensuring they’re measurable and achievable. As you work together, these goals help improve understanding and connection. Clear goals focus the therapy on what’s most important for both of you.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Exploration and Insight</h4>
                                <p style="text-align:justify;">In this phase, you’ll explore the underlying emotions and beliefs behind conflicts. The therapist facilitates conversations that encourage open, honest communication. You’ll uncover patterns that may contribute to misunderstandings or resentment. This process helps both partners gain insight into each other’s perspectives. It’s a space to express needs, fears, and desires without judgment. Understanding these dynamics is key to healing and growth.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Skill Building</h4>
                                <p style="text-align:justify;">The therapist teaches practical tools to improve communication and resolve conflicts. You’ll learn how to actively listen, express feelings, and work through disagreements in a healthy way. Skills such as conflict resolution, emotional regulation, and empathy are central. Both partners will practice techniques to build a deeper emotional connection. These tools help strengthen the relationship and prevent future conflicts. Skill-building empowers you both to handle challenges with understanding and respect.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Building Trust and Intimacy</h4>
                                <p style="text-align:justify;">A significant part of couples counseling is rebuilding trust and enhancing emotional intimacy. You’ll work together to identify and address trust issues, such as infidelity or emotional distance. The therapist provides exercises to promote vulnerability, understanding, and deeper connection. Both partners learn how to nurture the relationship and create a safe space for honesty. Rebuilding trust takes time, but it strengthens the foundation of your bond. Emotional intimacy and trust are vital for long-term relationship success.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Monitoring Progress</h4>
                                <p style="text-align:justify;">Throughout therapy, you’ll regularly check in on your progress toward your goals. The therapist will assess how well you’re applying new skills and resolving issues. You’ll celebrate the positive changes in your relationship and identify areas for improvement. Progress monitoring ensures the therapy remains relevant and focused on your needs. The therapist may adjust the approach based on how the relationship is evolving. This phase helps ensure your connection continues to grow and strengthen.</p>
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
                                <a href="tel:8123147355" style="color:black">8123147355</a><br>
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