<x-guest-layout>
    
    <div id="wrapper">
        
        @include('layouts.header')
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="de-subheader" class="mt-sm-60 pt20 pb20 bg-gradient-45-deg text-light">
                <div class="container relative z-index-1000">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="mb-0">Case Details</h3>
                        </div>

                        <div class="col-lg-6 text-lg-end">
                            <ul class="crumb">
                            <li><h5><a class="menu-item" href="{{ url('study-case')}}">Back</a></h5></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section id="">
                <div class="container">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-8">
                            <div class="p-4 bg-grey rounded-10px">
                                <div class="row g-4">
                                    <div class="col-lg-12">                                        
                                        <h3 class="fs-32 id-color">Client Case</h3>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5>Presenting Issues</h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>Raju reported feeling overwhelmed by work pressure, cultural expectations, and emotional exhaustion. He experienced low energy, difficulty concentrating, and a loss of interest in his hobbies.</p>
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <h5>Background Information</h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>Raju, a 32-year-old software engineer from Bengaluru, sought therapy to address persistent sadness, lack of motivation, and work-related stress, compounded by family expectations and a recent breakup.</p>
                                    </div>
                                </div>

                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <h5>Assessment</h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>Raju showed signs of depression and stress, exacerbated by work pressure, perfectionism, and a recent breakup. His struggles with isolation and self-doubt were key focus areas for therapy.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="spacer-double"></div>

                            <div class="p-4 bg-grey rounded-10px">
                                <div class="row g-4">
                                    <div class="col-lg-12">                                        
                                        <h3 class="fs-32 id-color">Treatment Plan</h3>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5>Goals</h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <ol class="ul-style-2">
                                            <li>Reduce depressive symptoms, manage stress, and find personal fulfillment.</li>
                                            <li>Enhance coping skills for managing work-related stressors and life transitions.</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <h5>Intervention Strategies</h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <ol class="ul-style-2">
                                            <li>Cognitive-behavioral therapy (CBT) to challenge negative thought patterns and develop adaptive coping strategies.</li>
                                            <li>Values-Based Counseling: Encouraged hobbies like photography for joy outside work.
                                            </li>
                                        </ol>
                                    </div>
                                </div>

                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <h5>Frequency and Duration</h5>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>Weekly sessions for 12 weeks, transitioning to bi-weekly</p>
                                    </div>
                                </div>
                            </div>

                            <div class="spacer-double"></div>

                            <div class="p-4 bg-grey rounded-10px">
                                <div class="row g-4">
                                    <div class="col-lg-12">                                        
                                        <h3 class="fs-32 id-color mb-4">Results</h3>

                                        <ol class="ol-style-1">
                                            <li>Raju significantly reduced depressive symptoms and learned to manage work-related stress effectively.</li>
                                            <li>He established healthier boundaries, improved communication with his family, and rediscovered joy in hobbies like photography.</li>
                                            <li>Raju regained confidence and balance, fostering a renewed sense of purpose and overall well-being.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="spacer-double"></div>

                        </div>

                        <div class="col-lg-4">
                            <div class="relative rounded-10px overflow-hidden shadow-soft">
                                <a class="de-video-play-button popup-youtube" href="http://www.youtube.com/watch?v=RFTUZqXZN6M">
                                    <span></span>
                                </a>
                                <img src="images/misc/2.webp" class="img-fluid" alt="">
                            </div>

                            <div class="spacer-double"></div>

                            <div class="padding30 rounded-10px bg-color-3">
                                <h4>Case Details</h4>
                                <div class="mb-3">
                                    <div class="">Name</div>
                                    <div class="fw-bold">Raju</div>
                                </div>
                                <div class="mb-3">
                                    <div class="">Counseler</div>
                                    <div class="fw-bold">Dr. Manjunath BG</div>
                                </div>
                                <div class="mb-3">
                                    <div class="">Symptomps Encountered</div>
                                    <div class="fw-bold">sadness, lack of motivation, and burnout at work</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
        <!-- content close -->
        @include('layouts.footer')
    </div>
</x-guest-layout>
        