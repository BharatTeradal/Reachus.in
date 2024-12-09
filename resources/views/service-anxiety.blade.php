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
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Anxiety Treatment</h2>
                            <p class="lead" style="text-align:justify;">Anxiety treatment helps you break free from fear, restoring peace and confidence in your life. Discover the path to calm, clarity, and a brighter future. It combines therapeutic techniques, practical tools, and lifestyle changes to improve overall mental well-being.
                            </p>

                            <div class="fs-14 text-dark fw-500">Start from</div>
                            <div class="mb-3">
                                <h2 class="d-inline id-color-2">$150</h2><span class="fs-14">/session</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('asset/images/services/5.webp')}}" class="img-fluid rounded-20px" alt="">
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
                                <p style="text-align:justify;">The first session focuses on understanding your anxiety, its triggers, and how it affects your daily life. The counselor explores your symptoms, thoughts, and coping patterns. Together, you’ll discuss your personal history and current stressors to identify contributing factors. This session builds trust and sets the foundation for treatment. Goals for reducing anxiety and improving emotional well-being are established. A tailored treatment plan is then created to suit your needs.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Identifying Triggers and Patterns</h4>
                                <p style="text-align:justify;">You’ll work with the counselor to pinpoint situations or thoughts that trigger anxiety. This includes exploring physical sensations, recurring fears, or behavioral patterns. Understanding these triggers helps you anticipate and manage anxiety more effectively. The counselor helps you recognize negative thought patterns that intensify worry. Awareness of triggers is key to breaking the cycle of anxiety. This step empowers you to gain control over your reactions.

</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Cognitive Restructuring</h4>
                                <p style="text-align:justify;">Cognitive-behavioral techniques help you reframe negative or irrational thoughts. The counselor teaches you to challenge unhelpful beliefs and replace them with more balanced perspectives. This reduces the intensity of anxious feelings and promotes a healthier mindset. You’ll learn to approach fears logically and with confidence. Cognitive restructuring is a powerful tool for breaking free from anxiety’s grip. It builds mental strength and clarity over time.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Relaxation and Mindfulness Techniques</h4>
                                <p style="text-align:justify;">You’ll practice stress-reducing methods like deep breathing, progressive muscle relaxation, and mindfulness exercises. These techniques help calm the mind and reduce physical symptoms of anxiety, such as rapid heart rate or muscle tension. Mindfulness teaches you to stay grounded in the present moment, reducing worry about the past or future. Regular practice helps you respond to stress with calm rather than panic. These skills provide immediate and long-term relief from anxiety.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Exposure Therapy</h4>
                                <p style="text-align:justify;">For anxiety related to specific fears or situations, exposure therapy may be introduced. The counselor helps you gradually face these fears in a safe and controlled manner. Step by step, you’ll build tolerance and reduce avoidance behaviors. This approach teaches you that anxiety can be managed, even in challenging scenarios. Over time, exposure therapy helps diminish the power of your fears. It’s a key step toward regaining confidence and freedom.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="rounded-10px padding30 h-100" data-bgcolor="rgba(32, 32, 32, .75)">
                                <h4 class="id-color-2">Monitoring Progress</h4>
                                <p style="text-align:justify;">Throughout treatment, the counselor helps track your improvements and adjust strategies as needed. You’ll reflect on how your anxiety has decreased and celebrate small victories. If certain techniques need refinement, they’ll be tailored to suit your progress. Regular check-ins ensure treatment stays effective and relevant. Monitoring builds motivation and keeps you focused on your goals. This phase ensures lasting results and continued growth.</p>
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