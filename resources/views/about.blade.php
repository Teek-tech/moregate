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
        <title>MOREGATE INDUSTRY | About</title>
    
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
            <div class="top-area-bg-about" data-stellar-background-ratio="0.6"></div>
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
                        <div class="welcome-text text-left">
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END TOP AREA-->

    <!--ABOUT AREA-->
    <section class="about-area gray-bg section-padding" style="padding-bottom: 0px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Welcome to Moregate</h2>
                        <p>We are professionals in what we do.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="about-left-content-area wow fadeIn">
                        <img src="{{asset('moregate/images/about/about/about-cargo.png')}}" alt="">
                        <h2>OUR MISSION</h2>
                        <p>
                            To promote effective, efficient and transparent shipment services to meet
                            our client’s needs and exhibit utmost integrity to the satisfaction of every stakeholder
                        </p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="about-content-area wow fadeIn">
                        <div class="about-content">
                            <h2>We have thrived for 24 years</h2>
                                <p>Moregate Industries limited was incorporated in May 06, 1995 as a 
                                        private limited liability company engaging in importation and
                                        distribution of agricultural products and later diversified 
                                        into cargoes and shipment, warehousing and telecommunications. <br><br>
                                        Due to growing interest and increase in customers based, the subsidiary
                                        JET SERVICES LEADS LOGISTICS CO. LTD came on board to handle the cargoes shipment and warehousing. <br> 
                                        We render world class professional services supported by good working 
                                        relationship with our foreign technical partners who are experienced and
                                        have technical capabilities. Due to our strength of abundant experienced
                                        professionals and our strong foreign technical partners, we are capable 
                                        of meeting any volume of cargoes shipment to Nigeria. <br><br>
                                        At Moregate Industries limited, highly professional standards are being maintained.
                                        Efficient, timely service delivery and a formidable workforce have made us one of 
                                        the fastest growing logistics company in the country.     
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-history-content">
                        <h3>Core values</h3>
                        <p>High Level Performance is Guaranteed</p>
                        <ul>
                            <li><i class="fa fa-check"></i>Cheaper shipping services as a result of experienced professionals</li>
                            <li><i class="fa fa-check"></i>Quick delivery as a result of experienced staff</li>
                            <li><i class="fa fa-check"></i>Safety of goods due to secured warehousing</li>
                            <li><i class="fa fa-check"></i>Performance guaranteed because of highly skill developed staff</li>
                            <li><i class="fa fa-check"></i>Safety of jobs as a result of the maximum safety consciousness of our operations staff</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-history-content">
                       <img src="{{asset('moregate/images/about/about/truck.png')}}" alt="truck" height="370px" width="370px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->
    
    <!--FAQS AREA-->
    <section class="faqs-area section-padding wow fadeIn" style="padding-top:0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="faqs-left-img">
                        <img src="{{asset('moregate/images/about/about/about-details.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="faqs-list">
                        <h3>Why choose <span>Morgate Industries</span></h3>
                        <div class="panel-group" id="accordion">
                            <div class="panel active">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_one"><i class="fa fa-minus"></i>FAST AND SAFE DELIVERY </a>
                                    </h4>
                                </div>
                                <div id="faqs_one" class="panel-collapse collapse in">
                                    <div class="panel-body">Fast, speed and safe delivery of shipment </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_two"><i class="fa fa-minus"></i>CONFIDENTIALITY</a>
                                    </h4>
                                </div>
                                <div id="faqs_two" class="panel-collapse collapse">
                                    <div class="panel-body">We maintain absolute confidentiality in course of information obtained in dealing with our clients</div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_three"><i class="fa fa-minus"></i>RELIABILITY & EFFICIENCY </a>
                                    </h4>
                                </div>
                                <div id="faqs_three" class="panel-collapse collapse">
                                    <div class="panel-body">We maintained a good track record of efficiency and reliability from point of packing and loading till final delivery to the customer</div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_four"><i class="fa fa-minus"></i> SECURITY OF THE CARGO </a>
                                    </h4>
                                </div>
                                <div id="faqs_four" class="panel-collapse collapse">
                                    <div class="panel-body">We guarantee of security of the goods entrusted on us and will be delivered intact to our clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="clients-area section-padding wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="client-list">
                        <div class="single-client">
                            <img src="{{asset('moregate/images/home/client/1.jpg')}}" alt="">
                        </div>
                        <div class="single-client">
                            <img src="{{asset('moregate/images/home/client/2.jpg')}}" alt="">
                        </div>
                        <div class="single-client">
                            <img src="{{asset('moregate/images/home/client/3.jpg')}}" alt="">
                        </div>
                        <div class="single-client">
                            <img src="{{asset('moregate/images/home/client/4.jpg')}}" alt="">
                        </div>
                        <div class="single-client">
                            <img src="{{asset('moregate/images/home/client/5.jpg')}}" alt="">
                        </div>
                        <div class="single-client">
                            <img src="{{asset('moregate/images/home/client/1.jpg')}}" alt="">
                        </div>
                        <div class="single-client">
                            <img src="{{asset('moregate/images/home/client/2.jpg')}}" alt="">
                        </div>
                        <div class="single-client">
                            <img src="{{asset('moregate/images/home/client/3.jpg')}}" alt="">
                        </div>
                        <div class="single-client">
                            <img src="{{asset('moregate/images/home/client/4.jpg')}}" alt="">
                        </div>
                        <div class="single-client">
                            <img src="{{asset('moregate/images/home/client/5.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CLIENTS AREA END-->
    @include('layouts.footer')
</body>

</html>
