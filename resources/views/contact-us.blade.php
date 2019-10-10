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
        <title>MOREGATE INDUSTRY | Contact</title>
        @include('layout.header')
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
        <div class="top-area-bg-contact" data-stellar-background-ratio="0.6"></div>
            <div class="header-top-area">
                <!--MAINMENU AREA-->
                <div class="mainmenu-area" id="mainmenu-area">
                    <div class="mainmenu-area-bg"></div>
                    @include('layout.nav')
                </div>
                <!--END MAINMENU AREA END-->
        </div>
        <div class="welcome-area">
            <div class="area-bg"></div>
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="welcome-text text-left">
                            <h2>Contact Us</h2>
                            <ul class="page-location">
                                <li><a href="/">Home</a></li>
                                <li>/</li>
                                <li><a href="{{asset('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END TOP AREA-->

    <!--CONTACT US AREA-->
    <section class="contact-area" id="contact">
        <div class="contact-form-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="area-title text-center">
                            <h3>GET IN TOUCH</h3>
                            <p>Need any help just send a message via our email address</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="contact-image">
                                <div class="contact-address">
                                    <h4>Nigeria Address</h4>
                                    <p>Phone: <a href="callto:+234 803 572 5626">+234 803 572 5626, 09069621717, 08035478858</a></p>
                                    <p>Email: <a href="mailto:leadsjetservice@yahoo.com">chrispak24@yahoo.com, leadsjetservice@yahoo.com </a></p>
                                    <address>
                                        Office:No 61 Azikiwe Road, 3rd Floor Aba, Abia State                                        
                                    </address>
                                </div>
                                <div class="contact-address">
                                    <h4>China Address</h4>
                                    <p>Phone: <a href="callto:+8613570263293">Enquiries- Emeka +8613570263293</a></p>
                                    <p>Email: <a href="mailto:leadsjetservice">leadsjetservice@gmail.com</a></p>
                                    <address>
                                        GUANGZHOU : Room Dr, 8# BingFang street GuangHua Road, Guangzhou China
                                    </address>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <form action="process.php" id="contact-form" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="name-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name.." >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="email-field">
                                            <div class="form-input">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email.." >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="phone-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="phone-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="company" name="company" placeholder="Company..">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="message-field">
                                            <div class="form-input">
                                                <textarea class="form-control" rows="6" id="message" name="message" placeholder="Your Message Here..." ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" name="submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT US AREA END-->
    @include('layout.footer')
</body>

</html>
