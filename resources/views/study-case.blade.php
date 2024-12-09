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
                            <h3 class="mb-0">Study Case</h3>
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
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <ul id="filters" class="s2">
                                <li><a href="#" data-filter="*" class="selected">All services</a></li>
                                <li><a href="#" data-filter=".service-1">Individual Therapy</a></li>
                                <li><a href="#" data-filter=".service-2">Couples Counseling</a></li>
                                <li><a href="#" data-filter=".service-3">Career Counseling</a></li>
                                <li><a href="#" data-filter=".service-4">Stress management</a></li>
                                <li><a href="#" data-filter=".service-5">Anxiety Treatment</a></li>
                                <li><a href="#" data-filter=".service-6">Depression Therapy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-9">
                            <div id="gallery" class="row g-4">
                                <div class="item service-5 col-lg-4 text-center">
                                    <a href="{{url('case-details')}}" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-20px">
                                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                                <span class="btn-main hover-scale-in-2">Read More</span>
                                            </div>
                                            <img src="{{asset('asset/images/study-case/1.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                        </div>
                                    </a>
                                    <h4 class="mt-3 mb-0">Navigating Identity</h4>
                                    <p class="mb-2">Anxiety Treatment</p>
                                </div>

                                <div class="item service-1 col-lg-4 text-center">
                                    <a href="{{url('case-details')}}" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-20px">
                                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                                <span class="btn-main hover-scale-in-2">Read More</span>
                                            </div>
                                            <img src="{{asset('asset/images/study-case/2.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                        </div>
                                    </a>
                                    <h4 class="mt-3 mb-0">From Trauma to Resilience</h4>
                                    <p class="mb-2">Individual Therapy</p>
                                </div>

                                <div class="item service-2 col-lg-4 text-center">
                                    <a href="{{url('case-details')}}" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-20px">
                                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                                <span class="btn-main hover-scale-in-2">Read More</span>
                                            </div>
                                            <img src="{{asset('asset/images/study-case/3.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                        </div>
                                    </a>
                                    <h4 class="mt-3 mb-0">Breaking the Cycle</h4>
                                    <p class="mb-2">Couples Counseling</p>
                                </div>

                                <div class="item service-4 col-lg-4 text-center">
                                    <a href="{{url('case-details')}}" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-20px">
                                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                                <span class="btn-main hover-scale-in-2">Read More</span>
                                            </div>
                                            <img src="{{asset('asset/images/study-case/4.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                        </div>
                                    </a>
                                    <h4 class="mt-3 mb-0">Lost in Translation</h4>
                                    <p class="mb-2">Stress Management</p>
                                </div>

                                <div class="item service-6 col-lg-4 text-center">
                                    <a href="{{url('case-details')}}" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-20px">
                                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                                <span class="btn-main hover-scale-in-2">Read More</span>
                                            </div>
                                            <img src="{{asset('asset/images/study-case/5.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                        </div>
                                    </a>
                                    <h4 class="mt-3 mb-0">Unraveling Anxiety</h4>
                                    <p class="mb-2">Depression Therapy</p>
                                </div>

                                <div class="item service-3 col-lg-4 text-center">
                                    <a href="{{url('case-details')}}" class="d-block hover">
                                        <div class="relative overflow-hidden rounded-20px">
                                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                                <span class="btn-main hover-scale-in-2">Read More</span>
                                            </div>
                                            <img src="{{asset('asset/images/study-case/6.webp')}}" class="img-fluid hover-scale-1-2" alt="">
                                        </div>
                                    </a>
                                    <h4 class="mt-3 mb-0">Beyond the Surface</h4>
                                    <p class="mb-2">Career Couseling</p>
                                </div>
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