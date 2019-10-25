<!--NAV MENU AREA-->
<nav class="navbar">
    <div class="container">
        <div class="navbar-header">
            <a href="#home" class="navbar-brand"><img src="../moregate/images/morefavicon.png" alt="logo"></a>
        </div>
        <div id="main-nav" class="stellarnav">
            <ul id="nav" class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                  <a href="/">home</a>
                </li>
                <li class="{{ Request::is('about') ? 'active' : '' }}">
                  <a href="{{asset('about')}}">about</a>
                </li>
                <li class="{{ Request::is('services') ? 'active' : '' }}">
                  <a href="{{asset('services')}}">Service</a>
                </li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}">
                  <a href="{{route('contact')}}">Contact</a>
                </li>
                <li class="{{ Request::is('shipwithus') ? 'active' : '' }}">
                  <a href="{{route('shipwithus')}}">Ship with us</a>
                </li>
                <li class="{{ Request::is('shipments') ? 'active' : '' }}">
                  <a href="{{route('shipments')}}">Arrivals</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--END NAV MENU AREA END-->