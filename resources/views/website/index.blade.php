

   @extends('website.layout.master')

   @section('content')

   @include('website.layout.header')

   <!--====== SLIDER PART START ======-->

   <section id="home" class="slider_area">
    <div id="carouselThree" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
            <li data-target="#carouselThree" data-slide-to="1"></li>
            <li data-target="#carouselThree" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-content">
                                <h1 class="title">Business is Now Digital</h1>
                                <p class="text">We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                                <ul class="slider-btn rounded-buttons">
                                    @guest
                                    <li><a class="main-btn rounded-one" href="{{route('register')}}">Sign up </a></li>
                                    <li><a class="main-btn rounded-two" href="{{route('login')}}">Log in  </a></li>
                                    @endguest
                                    @auth
                                    <li><a class="main-btn rounded-two" href="{{route('home')}}">Go to Dashbard</a></li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
                <div class="slider-image-box d-none d-lg-flex align-items-end">
                    <div class="slider-image">
                        <img src="{{asset('website')}}/assets/images/slider/1.png" alt="Hero">
                    </div> <!-- slider-imgae -->
                </div> <!-- slider-imgae box -->
            </div> <!-- carousel-item -->

            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-content">
                                <h1 class="title">Crafted for Business</h1>
                                <p class="text">We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                                <ul class="slider-btn rounded-buttons">
                                    @guest
                                    <li><a class="main-btn rounded-one" href="{{route('register')}}">Sign up </a></li>
                                    <li><a class="main-btn rounded-two" href="{{route('login')}}">Log in  </a></li>
                                    @endguest
                                    @auth
                                    <li><a class="main-btn rounded-two" href="{{route('home')}}">Go to Dashbard</a></li>
                                    @endauth
                                </ul>
                            </div> <!-- slider-content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
                <div class="slider-image-box d-none d-lg-flex align-items-end">
                    <div class="slider-image">
                        <img src="{{asset('website')}}/assets/images/slider/2.png" alt="Hero">
                    </div> <!-- slider-imgae -->
                </div> <!-- slider-imgae box -->
            </div> <!-- carousel-item -->

            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-content">
                                <h1 class="title">Based on Bootstrap 4</h1>
                                <p class="text">We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                                <ul class="slider-btn rounded-buttons">
                                    @guest
                                    <li><a class="main-btn rounded-one" href="{{route('register')}}">Sign up </a></li>
                                    <li><a class="main-btn rounded-two" href="{{route('login')}}">Log in  </a></li>
                                    @endguest
                                    @auth
                                    <li><a class="main-btn rounded-two" href="{{route('home')}}">Go to Dashbard</a></li>
                                    @endauth
                                </ul>
                            </div> <!-- slider-content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
                <div class="slider-image-box d-none d-lg-flex align-items-end">
                    <div class="slider-image">
                        <img src="{{asset('website')}}/assets/images/slider/3.png" alt="Hero">
                    </div> <!-- slider-imgae -->
                </div> <!-- slider-imgae box -->
            </div> <!-- carousel-item -->
        </div>

        <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
            <i class="lni lni-arrow-left"></i>
        </a>
        <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
            <i class="lni lni-arrow-right"></i>
        </a>
    </div>
</section>

<!--====== SLIDER PART ENDS ======-->

<!--====== FEATRES TWO PART START ======-->

<section id="services" class="features-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-10">
                    <h3 class="title">Our Services</h3>
                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Yotube Monitaization</a></h4>
                        <div class="features-icon">
                            <i class="lni lni-brush"></i>
                            <img class="shape" src="{{asset('website')}}/assets/images/f-shape-1.svg" alt="Shape">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        <a class="features-btn" href="#">LEARN MORE</a>
                    </div>
                </div> <!-- single features -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Website Devlopment</a></h4>
                        <div class="features-icon">
                            <i class="lni lni-layout"></i>
                            <img class="shape" src="{{asset('website')}}/assets/images/f-shape-1.svg" alt="Shape">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        <a class="features-btn" href="#">LEARN MORE</a>
                    </div>
                </div> <!-- single features -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Digital Marketing</a></h4>
                        <div class="features-icon">
                            <i class="lni lni-bolt"></i>
                            <img class="shape" src="{{asset('website')}}/assets/images/f-shape-1.svg" alt="Shape">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        <a class="features-btn" href="#">LEARN MORE</a>
                    </div>
                </div> <!-- single features -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== FEATRES TWO PART ENDS ======-->



<!--====== PRINICNG START ======-->

<section id="pricing" class="pricing-area ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-25">
                    <h3 class="title">Pricing Plans</h3>
                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="pricing-style mt-30">
                    <div class="pricing-icon text-center">
                        <img src="{{asset('website')}}/assets/images/basic.svg" alt="">
                    </div>
                    <div class="pricing-header text-center">
                        <h5 class="sub-title">Basic</h5>
                        <p class="month"><span class="price">600</span>/month</p>
                    </div>
                    <div class="pricing-list">
                        <ul>
                            <li><i class="lni lni-check-mark-circle"></i> Carefully crafted components</li>
                            <li><i class="lni lni-check-mark-circle"></i> Amazing page examples</li>
                        </ul>
                    </div>

                </div> <!-- pricing style one -->
            </div>

            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="pricing-style mt-30">
                    <div class="pricing-icon text-center">
                        <img src="{{asset('website')}}/assets/images/pro.svg" alt="">
                    </div>
                    <div class="pricing-header text-center">
                        <h5 class="sub-title">Pro</h5>
                        <p class="month"><span class="price">2400</span>/month</p>
                    </div>
                    <div class="pricing-list">
                        <ul>
                            <li><i class="lni lni-check-mark-circle"></i> Carefully crafted components</li>
                            <li><i class="lni lni-check-mark-circle"></i> Amazing page examples</li>
                        </ul>
                    </div>

                </div> <!-- pricing style one -->
            </div>

            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="pricing-style mt-30">
                    <div class="pricing-icon text-center">
                        <img src="{{asset('website')}}/assets/images/enterprise.svg" alt="">
                    </div>
                    <div class="pricing-header text-center">
                        <h5 class="sub-title">Enterprise</h5>
                        <p class="month"><span class="price">3000</span>/month</p>
                    </div>
                    <div class="pricing-list">
                        <ul>
                            <li><i class="lni lni-check-mark-circle"></i> Carefully crafted components</li>
                            <li><i class="lni lni-check-mark-circle"></i> Amazing page examples</li>
                        </ul>
                    </div>

                </div> <!-- pricing style one -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PRINICNG ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about" class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="faq-content mt-45">
                    <div class="about-title">
                        <h6 class="sub-title">A Little More About Us</h6>
                        <h4 class="title">Frequently Asked Questions <br> About Our Site</h4>
                    </div> <!-- faq title -->
                    <div class="about-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Frequently Asked Question One</a>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Frequently Asked Question Two</a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Frequently Asked Question Three</a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingFore">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">Frequently Asked Question Four</a>
                                </div>
                                <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Frequently Asked Question Five</a>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                        </div>
                    </div> <!-- faq accordion -->
                </div> <!-- faq content -->
            </div>
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="{{asset('website')}}/assets/images/about.jpg" alt="about">
                </div> <!-- faq image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->

<section id="testimonial" class="testimonial-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-6">
                <div class="testimonial-left-content mt-45">
                    <h6 class="sub-title">Testimonials</h6>
                    <h4 class="title">What Clients Says <br> About Us</h4>
                    <ul class="testimonial-line">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p class="text">Duis et metus et massa tempus lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ultricies, orci molestie blandit interdum. <br> <br> ipsum ante pellentesque nisl, eget mollis turpis quam nec eros. ultricies, orci molestie blandit interdum.</p>
                </div> <!-- testimonial left content -->
            </div>
            <div class="col-lg-6">
                <div class="testimonial-right-content mt-50">
                    <div class="quota">
                        <i class="lni lni-quotation"></i>
                    </div>
                    <div class="testimonial-content-wrapper testimonial-active">
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                        <img src="{{asset('website')}}/assets/images/author-1.jpg" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name">Mr. Jems Bond</h5>
                                        <span class="sub-title">CEO Mbuild Firm</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                    </ul>
                                    <span class="review">( 7 Reviews )</span>
                                </div>
                            </div>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                            <img src="{{asset('website')}}/assets/images/author-2.jpg" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name">Mr. Jems Bond</h5>
                                        <span class="sub-title">CEO Mbuild Firm</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                    </ul>
                                    <span class="review">( 7 Reviews )</span>
                                </div>
                            </div>
                        </div> <!-- single testimonial -->
                        <div class="single-testimonial">
                            <div class="testimonial-text">
                                <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                            </div>
                            <div class="testimonial-author d-sm-flex justify-content-between">
                                <div class="author-info d-flex align-items-center">
                                    <div class="author-image">
                                            <img src="{{asset('website')}}/assets/images/author-3.jpg" alt="author">
                                    </div>
                                    <div class="author-name media-body">
                                        <h5 class="name">Mr. Jems Bond</h5>
                                        <span class="sub-title">CEO Mbuild Firm</span>
                                    </div>
                                </div>
                                <div class="author-review">
                                    <ul class="star">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                    </ul>
                                    <span class="review">( 7 Reviews )</span>
                                </div>
                            </div>
                        </div> <!-- single testimonial -->
                    </div> <!-- testimonial content wrapper -->
                </div> <!-- testimonial right content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TESTIMONIAL PART ENDS ======-->

<!--====== TEAM START ======-->

<section id="team" class="team-area pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-30">
                    <h3 class="title">Meet The Team</h3>
                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="team-image">
                        <img src="{{asset('website')}}/assets/images/team-1.jpg" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">Jeffery Riley</a></h4>
                        <span class="sub-title">Art Director</span>
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="team-image">
                        <img src="{{asset('website')}}/assets/images/team-2.jpg" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">Riley Beata</a></h4>
                        <span class="sub-title">Web Developer</span>
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="team-image">
                        <img src="{{asset('website')}}/assets/images/team-3.jpg" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">Mark A. Parker</a></h4>
                        <span class="sub-title">UX Designer</span>
                    </div>
                </div> <!-- single team -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEAM  ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact" class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-30">
                    <h3 class="title">Contact</h3>
                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-map mt-30">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
        <div class="contact-info pt-30">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                        <div class="contact-info-icon">
                            <i class="lni lni-map-marker"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text"> Elizabeth St, Melbourne<br>1202 Australia.</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                        <div class="contact-info-icon">
                            <i class="lni lni-envelope"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">hello@ayroui.com</p>
                            <p class="text">support@uideck.com</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                        <div class="contact-info-icon">
                            <i class="lni lni-phone"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">+333 789-321-654</p>
                            <p class="text">+333 985-458-609</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
            </div> <!-- row -->
        </div> <!-- contact info -->
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-wrapper form-style-two pt-115">
                    <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Leave <span>A Message.</span></h4>
                    <x-alert />
                    <form action="{{route('contact.index')}}" method="POST">

                        @csrf
                        <div class="row">
                            <div class="col-md-6 mt-2 ">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" class="form-control" name="name" @error('name')
                                style="border: 1px solid red"
                               @enderror >
                               @error('name')
                               <div style="color:red">
                                   {{$message}}
                               </div>
                               @enderror
                            </div>
                            <div class="col-md-6 mt-2 ">
                                <label for="email">Your Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                @error('email')
                                 style="border: 1px solid red"
                                @enderror>
                                @error('email')
                                <div style="color:red">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-2 input-items default">
                                <label for="message">Your Massage</label>
                                <textarea type="message" id="message" class="form-control" name="message" @error('message')
                                 style="border: 1px solid red"
                                @enderror ></textarea>
                                @error('message')
                                <div style="color:red">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-2  ">
                                <button class="btn badge-primary light-rounded-two mt-2" type="submit"  >Send Message</button>
                            </div>
                        </div>
                    </form>
                    {{-- <form id="contact-form" action="{{route('contact.index')}}" method="POST">

                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-input mt-25">
                                    <label>Name</label>
                                    <div class="input-items default">
                                        <input name="name" type="text" placeholder="Name" required>
                                        <i class="lni lni-user"></i>
                                    </div>
                                </div> <!-- form input -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-input mt-25">
                                    <label>Email</label>
                                    <div class="input-items default">
                                        <input type="email" name="email" placeholder="Email" required>
                                        <i class="lni lni-envelope"></i>
                                    </div>
                                </div> <!-- form input -->
                            </div>
                            <div class="col-md-12">
                                <div class="form-input mt-25">
                                    <label>Massage</label>
                                    <div class="input-items default">
                                        <textarea name="massage" placeholder="Massage" required></textarea>
                                        <i class="lni lni-pencil-alt"></i>
                                    </div>
                                </div> <!-- form input -->
                            </div>
                            <p class="form-message"></p>
                            <div class="col-md-12">
                                <div class="form-input light-rounded-buttons mt-30">
                                    <button class="main-btn light-rounded-two" type="submit">Send Message</button>
                                </div> <!-- form input -->
                            </div>
                        </div> <!-- row -->
                    </form> --}}
                </div> <!-- contact wrapper form -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->


   @include('website.layout.footer')

   @endsection
