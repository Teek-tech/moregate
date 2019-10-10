<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
        <!--====== USEFULL META ======-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Transportation & Agency Template is a simple Smooth transportation and Agency Based Template" />
        <meta name="keywords" content="Portfolio, Agency, Onepage, Html, Business, Blog, Parallax" />
    
        <!--====== TITLE TAG ======-->
        <title>MOREGATE INDUSTRY | Home</title>
        @include('layouts.header')
    </head>
    
    <body class="single-page">
    
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
        <!--- PRELOADER -->
        <div class="preeloader">
            <div class="preloader-spinner"></div>
        </div>
    
        <!--SCROLL TO TOP-->
        <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>
    
        <!--START TOP AREA-->
        <header class="top-area single-page" id="home">
            <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
            <div class="header-top-area">
                <!--MAINMENU AREA-->
                <div class="mainmenu-area" id="mainmenu-area">
                    <div class="mainmenu-area-bg"></div>
                    @include('layouts.nav')
                </div>
                <!--END MAINMENU AREA END-->
            </div>
        <!--HOME SLIDER AREA-->
        <div class="welcome-slider-area">
            <div class="welcome-single-slide slider-bg-one">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="welcome-text text-center">
                                <h1>JET SERVICES, FASTEST WAY FOR YOUR GOODS</h1>
                                <p>Nigeria's No1 shipping Company, Fastest way for your goods to reach you at exact time, no delay!!!.</p>
                                <div class="home-button">
                                    <a href="{{asset('services')}}">Our Service</a>
                                    <a href="{{asset('contact')}}">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-single-slide slider-bg-two">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="welcome-text text-center">
                                <h1>PATRONIZE THE FASTEST SHIPPING COMPANY TODAY</h1>
                                <p>Nigeria's No1 shipping Company, Fastest way for your goods to reach you at exact time, no delay!!!.</p>
                                <div class="home-button">
                                    <a href="{{asset('services')}}">Our Service</a>
                                    <a href="{{asset('contact')}}">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END HOME SLIDER AREA-->
    </header>
    <!--END TOP AREA-->

    <!--BLOG AREA-->
    <section class="blog-area gray-bg padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-index wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="moregate/images/home/blog/blog_4.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-home"></i></a></div>
                            <h3>Warehousing</h3>
                            <p>we maintain warehouses where customers’ goods are safely stored pending delivery</p>
                            <a href="{{asset('services')}}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-index wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <img src="moregate/images/home/blog/blog_1.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-ship"></i></a></div>
                            <h3>CARGO MONITORING & PLANNING SERVICES</h3>
                            <p>Keeping track of our client’s cargos from the port of loading to the discharge on to our warehouse</p>
                            <a href="{{asset('services')}}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-index wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="moregate/images/home/blog/blog_3.jpg" alt="">
                        </div>
                        <div class="blog-details text-center">
                            <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                            <h3>SPEEDY AND SAFE DELIVERY OF SHIPMENTS </h3>
                            <p>with our team of professionals, we deliver any consignments promptly and safely to meet the client’s expected arrival time. (EAT)</p>
                            <a href="{{asset('services')}}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--ABOUT AREA-->
    <section class="about-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="quote-form-area wow fadeIn">
                        <h3>Contact Us</h3>
                        <form class="quote-form" action="#">
                            <p class="width-full">
                                <input type="text" name="name" id="name" placeholder="Your Name">
                            </p>
                            <p class="width-full">
                                <input type="email" name="email" id="email" placeholder="Email">
                                <input class="pull-right" type="text" name="phone" id="phone" placeholder="Phone">
                            </p>
                            <p class="width-full">
                                <input type="text" name="company" id="company" placeholder="Company">
                            </p>
                            <p>
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Your Message..."></textarea>
                            </p>
                            <button type="submit" name="submit">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                    <div class="about-content-area wow fadeIn">
                        <div class="about-content">
                            <h2>We have 24 years experience in this passion</h2>
                            <p>Moregate Industries limited was incorporated in May 06, 1995 as a 
                                private limited liability company engaging in importation and
                                distribution of agricultural products and later diversified 
                                into cargoes and shipment, warehousing and telecommunications. <br>
                                Due to growing interest and increase in customers based, the subsidiary
                                JET SERVICES LEADS LOGISTICS CO. LTD came on board to handle the cargoes shipment and warehousing. <br> 
                                We render world class professional services supported by good working 
                                relationship with our foreign technical partners who are experienced and
                                have technical capabilities. Due to our strength of abundant experienced
                                professionals and our strong foreign technical partners, we are capable 
                                of meeting any volume of cargoes shipment to Nigeria. <br>
                                At Moregate Industries limited, highly professional standards are being maintained.
                                Efficient, timely service delivery and a formidable workforce have made us one of 
                                the fastest growing logistics company in the country.     
                            </p>
                            <a href="{{asset('about')}}">read more <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--SERVICE AREA-->
    <section class="service-area-two section-padding gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                        <div class="area-title text-center wow fadeIn">
                            <h2>Our Service</h2>
                            <p>
                                We are reputably known for fast shipment of cargoes
                                from Asia especially China to any part of Nigeria. Our services include the following
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="service-content wow fadeIn">
                            <h2>we offer quick & powerful logistics solution</h2>
                            <p> We guarantee of security of the goods entrusted on us and will be delivered intact to our clients</p>
                            <a href="{{asset('services')}}" class="read-more">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <div class="service-two-content wow fadeIn">
                            <div class="row no-margin">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                                    <div class="single-service-two border">
                                        <div class="service-icon-two"><i class="fa fa-truck"></i></div>
                                        <h4>road freight</h4>
                                        <p>Groupage shipping</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                                    <div class="single-service-two border-top border-bottom border-right">
                                        <div class="service-icon-two"><i class="fa fa-plane"></i></div>
                                        <h4>air freight</h4>
                                        <p>Coming soon</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                                    <div class="single-service-two border-left border-right border-bottom">
                                        <div class="service-icon-two"><i class="fa fa-ship"></i></div>
                                        <h4>sea freight</h4>
                                        <p>Cargo monitoring and planning services</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                                    <div class="single-service-two border-right border-bottom">
                                        <div class="service-icon-two"><i class="fa fa-dropbox"></i></div>
                                        <h4>ware house</h4>
                                        <p>Warehousing.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                                    <div class="single-service-two border-left border-right border-bottom">
                                        <div class="service-icon-two"><i class="fa fa-cog"></i></div>
                                        <h4>consulting</h4>
                                        <p>Financial advisory services</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 no-padding">
                                    <div class="single-service-two border-right border-bottom">
                                        <div class="service-icon-two"><i class="fa fa-bicycle"></i></div>
                                        <h4>fast delevary</h4>
                                        <p>speedy and safe delivery of shipment</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!--PROMO AREA-->
    <section class="promo-area">
        <div class="promo-top-area section-padding wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-anchor"></i></div>
                            <div class="promo-details">
                                <h3>Our Location</h3>
                                <p>Head office: 61 Azikiwe Road 3rd Floor, Aba, Abia state</p>
                            </div>
                        </div>
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-newspaper-o"></i></div>
                            <div class="promo-details">
                                <h3>Packaging</h3>
                                <p>Goods are all packaged well to fit into the container</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-umbrella"></i></div>
                            <div class="promo-details">
                                <h3>24/7 Support</h3>
                                <p>Always there for you.</p>
                            </div>
                        </div>
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-bicycle"></i></div>
                            <div class="promo-details">
                                <h3>Fast Delevery</h3>
                                <p>Prompt delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo-bottom-area section-padding">
            <div class="promo-botton-area-bg" data-stellar-background-ratio="0.6"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12 text-center">
                        <div class="promo-bottom-content wow fadeIn">
                            <h2 class="promo-h2">we provide international freight &amp; logistics service nationwide</h2>
                            <a href="{{asset('contact')}}" class="read-more">Contact US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PROMO AREA END-->

    <!--TESTMONIAL AREA -->
    <section class="testmonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title-test text-center wow fadeIn">
                        <h2>what client’s say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                    <div class="client-photo-list wow fadeIn">
                        <div class="client_photo">
                            <div class="item">
                                <img src="moregate/images/home/testmonial/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="moregate/images/home/testmonial/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="moregate/images/home/testmonial/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="moregate/images/home/testmonial/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="moregate/images/home/testmonial/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="client_nav">
                        <span class="fa fa-angle-left testi_prev"></span>
                        <span class="fa fa-angle-right testi_next"></span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
                    <div class="client-details-content wow fadeIn">
                        <div class="client_details">
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TESTMONIAL AREA END -->

    <section class="clients-area section-padding wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="client-list">
                            <div class="single-client">
                                <img src="moregate/images/home/client/1.jpg" alt="">
                            </div>
                            <div class="single-client">
                                <img src="moregate/images/home/client/2.jpg" alt="">
                            </div>
                            <div class="single-client">
                                <img src="moregate/images/home/client/3.jpg" alt="">
                            </div>
                            <div class="single-client">
                                <img src="moregate/images/home/client/4.jpg" alt="">
                            </div>
                            <div class="single-client">
                                <img src="moregate/images/home/client/5.jpg" alt="">
                            </div>
                            <div class="single-client">
                                <img src="moregate/images/home/client/1.jpg" alt="">
                            </div>
                            <div class="single-client">
                                <img src="moregate/images/home/client/2.jpg" alt="">
                            </div>
                            <div class="single-client">
                                <img src="moregate/images/home/client/3.jpg" alt="">
                            </div>
                            <div class="single-client">
                                <img src="moregate/images/home/client/4.jpg" alt="">
                            </div>
                            <div class="single-client">
                                <img src="moregate/images/home/client/5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 @include('layouts.footer')
</body>

</html>
