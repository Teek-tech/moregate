<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Moregate | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{csrf_token()}}">

  @include('layouts.admin_header')

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>AD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Moregate</b>Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../moregate/images/admin/userimg/user_image2.jpeg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../moregate/images/admin/userimg/user_image2.jpeg" class="img-circle" alt="User Image">

                <p>
                {{Auth::user()->name}} - Moregate Staff
                <small>Moregate Admin Platform</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-center">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" 
                    class="btn btn-default btn-flat">{{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../moregate/images/admin/userimg/user_image2.jpeg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree" style="margin-top:10px;">
        <li class="header">MAIN NAVIGATION</li>
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{asset('/admin')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="{{asset('/admin_allcustomers')}}"><i class="fa fa-users"></i> <span>All Customers</span></a></li>
        <li  class="active"><a href="{{asset('/shipmentadmin')}}"><i class="fa fa-table"></i> <span>Shipment Arrivals</span></a></li>
        <li><a href="{{url('/users')}}"><i class="fa fa-table"></i> <span>All Administrators</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DASHBOARD
        <small>Admin Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    @if(session()->has('message'))
      <div class="alert alert-success" role="alert">
        <strong>Success!</strong> {{ session()->get('message') }}
      </div>
    @endif
    @if(session()->has('editmessage'))
      <div class="alert alert-success" role="alert">
        <strong>Success!</strong> {{ session()->get('editmessage') }}
      </div>
    @endif
    @if(session()->has('deletemessage'))
      <div class="alert alert-success" role="alert">
        <strong>Success!</strong> {{ session()->get('deletemessage') }}
      </div>
    @endif
  
    <!-- EDIT CUSTOMER DETAIL -->
    <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <form action="{{route('shipment.insert')}}" method="post">
                            @csrf 
                            @method('post')
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="name-field">
                                                <label for="Name">Name</label>
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name of shipment..." value="{{old('name')}}">
                                            </div>
                                            <div class="text-danger">{{$errors->first('name')}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="phone-field">
                                                <label for="phone-field">Shipment Arrival date</label>
                                            <div class="form-input">
                                                <input type="date" class="form-control" id="shipmentdate" rows="70" cols="60" name="shipmentdate" placeholder="Date of Arrival" value="{{old('shipmentdate')}}">
                                            </div>
                                            <div class="text-danger">{{$errors->first('shipmentdate')}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="email-field">
                                                <label for="Email">Details</label>
                                            <div class="form-input">
                                                <textarea class="form-control" id="details" name="details" placeholder="Details of Shipment">{{old('details')}}</textarea>
                                            </div>
                                            <div class="text-danger">{{$errors->first('details')}}</div>
                                        </div>
                                        <button type="submit" name="update" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    

                <br><br>
        <!-- table -->
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="box-header">
              <h3 class="box-title">All Shipment Arrivals</h3>

              <!-- <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table no-margin">
                  <thead>
                    <th>Name</th>
                    <th>details</th>
                    <th>Date of Arrivals</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                  @foreach($shipPost as $item)
                    <tr>
                      <td>{{ucfirst($item->name)}}</td>
                      <td>{{ucfirst($item->details)}}</td>
                      <td>{{date("jS F, Y", strtotime($item->shipmentdate))}}.</td>
                      <td>
                        <a class="btn btn-primary btn-cust" href="{{route('shipment.edit', $item->id )}}" name="edit_id" style="display:inline-block;">Edit</a>
                            <form action="{{route('shipment.delete', $item->id)}}" method="post" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                              <button class="btn btn-danger btn-cust" type="submit">Delete</button>
                            </form>
                      </td>
                    </tr>
                  @endforeach  
                </tbody>
               </table>
             </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Moregate Adminstration Platform
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019  <a href="#">Moregate</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

@include('layouts.admin_footer')

</body>
</html>