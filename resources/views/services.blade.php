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
    <title>MOREGATE INDUSTRY | Services</title>
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
            <div class="top-area-bg-service" data-stellar-background-ratio="0.6"></div>
            <div class="header-top-area">
                <!--MAINMENU AREA-->
                <div class="mainmenu-area" id="mainmenu-area">
                    <div class="mainmenu-area-bg"></div>
                    @include('layouts.nav')
                </div>
                <!--END MAINMENU AREA END-->
        </div>
        <div class="welcome-area">
            <div class="area-bg"></div>
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="welcome-service text-left">
                            <h2>What we do</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END TOP AREA-->

    <!--BLOG AREA-->
    <section class="blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-image">
                                <img src="moregate/images/services/blog/blog_4.jpg" alt="">
                            </div>
                            <div class="blog-details text-center">
                                <div class="blog-meta"><a href="#"><i class="fa fa-home"></i></a></div>
                                <h3>Warehousing</h3>
                                <p>
                               Your goods are always safe with us. We provide and maintain warehousing services to our customers
                                 in order to ensure goods are safely stored pending to delivery.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                            <div class="blog-image">
                                <img src="moregate/images/services/blog/blog_1.jpg" alt="">
                            </div>
                            <div class="blog-details text-center">
                                <div class="blog-meta"><a href="#"><i class="fa fa-ship"></i></a></div>
                                <h3>CARGO MONITORING & PLANNING SERVICES</h3>
                                <p>Our team of professionals ensure we keep track of our client’s 
                                cargos from port of loading to place of discharge and to our warehouse afterwards.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                            <div class="blog-image">
                                <img src="moregate/images/services/blog/blog_3.jpg" alt="">
                            </div>
                            <div class="blog-details text-center">
                                <div class="blog-meta"><a href="#"><i class="fa fa-truck"></i></a></div>
                                <h3>SPEEDY AND SAFE DELIVERY OF SHIPMENTS </h3>
                                <p>We thrive on prompt delivery and therefore ensure that all consignments 
                                promptly and safely meet the client’s objective - Expected Arrival Time. (EAT)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BLOG AREA END-->
    <!--SERVICE AREA-->
    <section class="service-area-three section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                        <div class="area-title text-center wow fadeIn">
                            <h2>Our Service</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-service-three wow fadeInUp" data-wow-delay=".2s">
                            <div class="service-icon-three"><i class="fa fa-truck"></i></div>
                            <h4>Cargo Monitoring & Planning service</h4>
                            <p>Let us plan and manage how your goods are transported from one destination to another.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-service-three wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-icon-three"><i class="fa fa-male"></i></div>
                            <h4>Personal Container</h4>
                            <p>We understand how special your business means to and we are ready to give you some personal services.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-icon-three"><i class="fa fa-ship"></i></div>
                            <h4>Group Shipping</h4>
                            <p>You do not have to deep a hole in your pocket, we provide services that support group shipping.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-service-three wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-icon-three"><i class="fa fa-dropbox"></i></div>
                            <h4>Warehousing</h4>
                            <p>Our warehouse shelter your goods pending to the delivery time.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-service-three wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-icon-three"><i class="fa fa-cog"></i></div>
                            <h4>FINANCIAL ADVISORY SERVICES </h4>
                            <p>Our financial experts offer advisory services on foreign exchange to our clients.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-service-three wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-icon-three"><i class="fa fa-bicycle"></i></div>
                            <h4>SPEEDY AND SAFE DELIVERY OF SHIPMENTS </h4>
                            <p>Our team professionals ensure we deliver all consignments promptly and safely to meet 
                            the client’s goods expected arrival time. (EAT)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--SERVICE AREA END-->

    <!--PROMO AREA-->
    <section class="promo-area">
        <div class="promo-bottom-area section-padding">
            <div class="promo-botton-area-bg" data-stellar-background-ratio="0.6"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12 text-center">
                        <div class="promo-bottom-content wow fadeIn">
                            <h2>we provide international freight &amp; logistics service nationwide</h2>
                            <a href="{{asset('contact')}}" class="read-more">Contact US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PROMO AREA END-->
    @include('layouts.footer')
</body>

</html>
