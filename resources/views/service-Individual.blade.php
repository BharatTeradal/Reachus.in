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
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Individual Therapy</h2>
                            <p class="lead" style="text-align:justify;">Individual therapy is a personalized journey where a skilled therapist helps you explore emotions, challenges, and goals in a safe space, empowering you to heal, grow, and embrace your best self.
                            </p>

                            <div class="fs-14 text-dark fw-500">Start from</div>
                            <div class="mb-3">
                                <h2 class="d-inline id-color-2">$150</h2><span class="fs-14">/session</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('asset/images/misc/6.webp')}}" class="img-fluid rounded-20px" alt="">
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
                                <p style="text-align:justify;">The first session helps your therapist understand your unique concerns and background. Together, you’ll discuss your current challenges, past experiences, and life circumstances. This session builds trust and lays the groundwork for therapy. Your goals for treatment are explored and tailored to your needs. The therapist creates a personalized plan for your journey. It’s a collaborative start to the therapeutic process.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Establishing Goals</h4>
                                <p style="text-align:justify;">Together, you’ll set clear and achievable goals that guide your therapy. These goals follow the SMART framework to ensure they’re focused and measurable. They give both you and the therapist a clear direction. As therapy progresses, you’ll adjust them to fit your evolving needs. This step turns your aspirations into actionable plans. It’s your roadmap to personal growth and healing.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Exploration and Insight</h4>
                                <p style="text-align:justify;">In this phase, you’ll dive deep into your thoughts and emotions. Your therapist listens empathetically and helps you uncover hidden beliefs and patterns. This insight leads to a better understanding of yourself and your relationships. The goal is to bring clarity and healing to unresolved issues. You explore your past and present to improve your emotional well-being. It’s a journey toward self-awareness and growth.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Skill Building</h4>
                                <p style="text-align:justify;">Here, you’ll learn practical tools to cope with life’s challenges, like stress, anxiety, or relationship issues. Techniques such as mindfulness, relaxation, and problem-solving help you manage emotions effectively. These skills empower you to handle obstacles with confidence. The therapist supports you in practicing and refining these techniques. By building these tools, you gain emotional resilience. You’ll leave therapy feeling equipped to face life’s ups and downs.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Building Self Confidence</h4>
                                <p style="text-align:justify;">Therapy helps you recognize your worth and challenge negative self-beliefs. Through self-compassion and encouragement, you’ll learn to build a positive self-image. Your therapist helps you embrace your strengths and develop healthy self-esteem. As you grow more confident, you approach challenges with a renewed sense of empowerment. Self-acceptance and validation lead to greater happiness. This step builds a strong foundation for lasting change.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Monitoring Progress</h4>
                                <p style="text-align:justify;">Regular check-ins allow you and your therapist to review how you’re progressing toward your goals. These moments help you celebrate victories, big or small. If challenges arise, your plan is adjusted to stay on track. Progress monitoring ensures therapy stays relevant and impactful. It’s a chance to reflect, adjust, and stay motivated. This phase keeps your therapeutic journey focused and dynamic.</p>
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