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
        <meta name="csrf-token" content="{{csrf_token()}}">
    
        <!--====== TITLE TAG ======-->
        <title>MOREGATE INDUSTRY | Registration</title>
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
        <div class="top-area-bg-register" data-stellar-background-ratio="0.6"></div>
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
                            <h2>Ship with us</h2>
                            <ul class="page-location">
                                <li><a href="/">Home</a></li>
                                <li>/</li>
                                <li><a href="{{asset('register')}}">Registration</a></li>
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
                            <h1>Ship with us</h1>
                            <p style="font-size:20px;">Get to enjoy our services</p>
                        </div>
                    </div>
                </div>
                @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                   <strong>Success!</strong> {{ session()->get('message') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <form action="{{route('register.save')}}" method="post">
                                @csrf 
                                @method('post')
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="name-field">
                                                <label for="Name">Name</label>
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name.." value="{{old('name')}}" >
                                                <div class="text-danger">{{$errors->first('name')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="email-field">
                                                <label for="Email">Email</label>
                                            <div class="form-input">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email.." value="{{old('email')}}" >
                                                <div class="text-danger">{{$errors->first('email')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="phone-field">
                                                <label for="phone-field">Phone Number</label>
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone..." value="{{old('phone')}}">
                                                <div class="text-danger">{{$errors->first('phone')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="phone-field">
                                                <label for="Date of birth">Date of birth</label>
                                            <div class="form-input">
                                                <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" placeholder="date of birth.." value="{{old('dateofbirth')}}">
                                                <div class="text-danger">{{$errors->first('dateofbirth')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="message-field">
                                                <label for="Company">Company</label>
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="company" name="company" placeholder="Company name.." value="{{old('company')}}">
                                                <div class="text-danger">{{$errors->first('company')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" name="submit">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="contact-image">
                          <img src="moregate/images/register/reg_image.png" alt="" srcset="">
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
