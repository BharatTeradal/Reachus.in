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
                            <h3 class="mb-0">Blog</h3>
                        </div>

                        <div class="col-lg-6 text-lg-end">
                            <ul class="crumb">
                            <li><h5><a class="menu-item" href="{{ url('Blog')}}">Back</a></h5></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section>
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-lg-8">
                            <div>

                                <h2>Understanding the Roots of Anxiety</h2>

                                <div>

                                    <img src="{{asset('asset/images/misc/4.webp')}}" class="img-fluid mb-4 rounded-20px" alt="">

                                    <p style="text-align:justify;">Anxiety often arises from a complex interplay of biological, psychological, and environmental factors. Biologically, genetics and brain chemistry play a key role, as imbalances in neurotransmitters like serotonin or an overactive amygdala can heighten fear responses. Psychological factors, such as past trauma, negative thought patterns, or perfectionism, also contribute significantly by reinforcing cycles of worry and avoidance. Environmental stressors, including high-pressure jobs, relationship issues, or financial struggles, can trigger or exacerbate anxiety symptoms. Experiences of neglect, instability, or lack of social support further deepen its impact. For some, anxiety may also be learned through observing anxious behaviors in family or peers. Understanding these root causes is essential to breaking the cycle of anxiety. It allows individuals to address both the symptoms and underlying factors effectively, paving the way for healing and resilience.</p>

                                </div>

                            </div>


                            <div id="blog-comment">
                                <h4>Comments (5)</h4>

                                <div class="spacer-half"></div>

                                <ol>
                                    <li>
                                        <div class="avatar">
                                            <img src="{{asset('asset/images/testimonial/1.jpg')}}" alt="" ></div>
                                        <div class="comment-info">
                                            <span class="c_name">Merrill Rayos</span>
                                            <span class="c_date id-color">2 days ago</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="comment" style="text-align:justify;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                        <ol>
                                            <li>
                                                <div class="avatar">
                                                    <img src="{{asset('asset/images/testimonial/2.jpg')}}" alt="" ></div>
                                                <div class="comment-info">
                                                    <span class="c_name">Jackqueline Sprang</span>
                                                    <span class="c_date id-color">2 days ago</span>
                                                    <span class="c_reply"><a href="#">Reply</a></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="comment" style="text-align:justify;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                    explicabo.</div>
                                            </li>
                                        </ol>
                                    </li>

                                    <li>
                                        <div class="avatar">
                                            <img src="{{asset('asset/images/testimonial/3.jpg')}}" alt="" ></div>
                                        <div class="comment-info">
                                            <span class="c_name">Sanford Crowley</span>
                                            <span class="c_date id-color">2 days ago</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment" style="text-align:justify;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                        <ol>
                                            <li>
                                                <div class="avatar">
                                                    <img src="{{asset('asset/images/testimonial/4.jpg')}}" alt="" ></div>
                                                <div class="comment-info">
                                                    <span class="c_name">Lyndon Pocekay</span>
                                                    <span class="c_date id-color">2 days ago</span>
                                                    <span class="c_reply"><a href="#">Reply</a></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="comment" style="text-align:justify;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                                    explicabo.</div>
                                            </li>
                                        </ol>
                                    </li>

                                    <li>
                                        <div class="avatar">
                                            <img src="{{asset('asset/images/testimonial/5.jpg')}}" alt="" ></div>
                                        <div class="comment-info">
                                            <span class="c_name">Aleen Crigger</span>
                                            <span class="c_date id-color">2 days ago</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>

                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment" style="text-align:justify;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                    </li>
                                </ol>

                            </div>

                        </div>

                        <div class="col-lg-4">
                            <div class="widget widget-post">
                                <h4>Recent Posts</h4>
                                <ul class="de-bloglist-type-1">
                                    <li>
                                        <div class="d-image">
                                            <img src="{{asset('asset/images/news-thumbnail/1.webp')}}" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>The Power of Positive Thinking</h4></a>
                                            <div class="d-date">January 15, 2023</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-image">
                                            <img src="{{asset('asset/images/news-thumbnail/2.webp')}}" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>Stress Management Techniques</h4></a>
                                            <div class="d-date">January 15, 2023</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-image">
                                            <img src="{{asset('asset/images/news-thumbnail/3.webp')}}" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>The Psychology of Resilience</h4></a>
                                            <div class="d-date">January 15, 2023</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-image">
                                            <img src="{{asset('asset/images/news-thumbnail/4.webp')}}" alt="">
                                        </div>
                                        <div class="d-content">
                                            <a href="#"><h4>The Secrets to a Fulfilling Life</h4></a>
                                            <div class="d-date">January 15, 2023</div>
                                        </div>
                                    </li>
                                </ul>
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