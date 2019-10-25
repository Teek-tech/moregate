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
        <title>MOREGATE INDUSTRY | Shipment Arrivals</title>
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
        <div class="top-area-bg-contact" data-stellar-background-ratio="0.6"></div>
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
                            <h2>Shipments Arrivals</h2>
                            <ul class="page-location">
                                <li><a href="/">Home</a></li>
                                <li>/</li>
                                <li><a href="{{asset('shipments')}}">Arrivals</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END TOP AREA-->

    <!--CONTACT US AREA-->
    <section>
       <div class="section-padding">
          <div class="container">
        <div class="col-xs-12">
          <div class="">
            <div class="">
                <!-- <div class="input-group input-group-sm" style="margin-bottom:20px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div> -->
            </div>
            <!-- /.box-header -->
            <div class="">
                <table class="table no-margin">
                  <thead>
                    <th>Container name</th>
                    <th>P-month</th>
                    <th>Packing list date</th>
                    <th>Date of Arrivals</th>
                  </thead>
                  <tbody>
                  @foreach($shipPost as $item)
                    <tr>
                      <td>{{$item->name}}</td>
                      <td>{{$item->pmonth}}</td>
                      <td>{{date("jS F, Y", strtotime($item->pdate))}}</td>
                      <td>{{date("jS F, Y", strtotime($item->shipmentdate))}}</td>
                    </tr>
                  @endforeach  
                </tbody>
               </table>
             </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
                </div>
          </div>      
       </div>
    </section>
    <!--CONTACT US AREA END-->
    @include('layouts.footer')
</body>

</html>
