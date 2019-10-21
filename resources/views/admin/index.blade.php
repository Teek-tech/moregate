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
      <form action="" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree" style="margin-top:10px;">
        <li class="header">MAIN NAVIGATION</li>
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{asset('/admin')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="{{asset('/admin_allcustomers')}}"><i class="fa fa-users"></i> <span>All Customers</span></a></li>
        <li><a href="{{asset('/shipmentadmin')}}"><i class="fa fa-table"></i> <span>Shipment Arrivals</span></a></li>
        <li><a href="{{asset('/users')}}"><i class="fa fa-table"></i> <span>All Administrators</span></a></li>
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

    <!-- add users Modal -->
    <div class="modal fade" id="add_customer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalCenterTitle">ADD NEW CUSTOMER</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('register.save')}}" method="post">
            @csrf 
            @method('post')
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                  <div class="form-group" id="name-field">
                    <label for="Name">Name</label>
                  <div class="form-input">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name.." value="{{old('name')}}">
                  </div>
                  <div class="text-danger">{{$errors->first('name')}}</div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="form-group" id="email-field">
                  <label for="Email">Email</label>
                  <div class="form-input">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email.." value="{{old('email')}}">
                    </div>
                    <div class="text-danger">{{$errors->first('email')}}</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                  <div class="form-group" id="phone-field">
                    <label for="phone-field">Phone Number</label>
                    <div class="form-input">
                     <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone..." value="{{old('phone')}}">
                    </div>
                    <div class="text-danger">{{$errors->first('phone')}}</div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="form-group" id="phone-field">
                  <label for="Date of birth">Date of birth</label>
                    <div class="form-input">
                      <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" placeholder="date of birth.." value="{{old('dateofbirth')}}">
                    </div>
                    <div class="text-danger">{{$errors->first('dateofbirth')}}</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                  <div class="form-group" id="message-field">
                      <label for="Company">Company</label>
                      <div class="form-input">
                       <input type="text" class="form-control" id="company" name="company" placeholder="Company name.." value="{{old('company')}}">
                      </div>
                      <div class="text-danger">{{$errors->first('company')}}</div>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Add Customer</button>
          </div>
          </form>
        </div>
      </div>
    </div>

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
    @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        <strong>Success!</strong> {{ session()->get('success') }}
      </div>
    @endif
    @if(session()->has('deletemessage'))
      <div class="alert alert-success" role="alert">
        <strong>Success!</strong> {{ session()->get('deletemessage') }}
      </div>
    @endif
    <!-- ./col -->
    <div class="col-md-6">
          <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{$allcustomer}}</h3>
          <p>Customer Registrations</p>
        </div>
        <div class="icon">
         <i class="ion ion-person-add"></i>
        </div>
        <a href="{{asset('admin_allcustomers')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$allshipment}}</h3>

              <p>All Shipment Arrivals</p>
            </div>
            <div class="icon">
              <i class="fa fa-ship"></i>
            </div>
            <a href="{{asset('shipmentadmin')}}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
    </div>
      <!-- register user btn -->
      <div class="col-md-2" style="margin-bottom:20px;">
        <button class="btn btn-success" data-toggle="modal" data-target="#add_customer" name="register_id"><i class="fa fa-user"> Register new customer</i></button>
      </div>
      <div class="col-md-2" style="margin-bottom:20px;">
       <a href="{{asset('admin_allcustomers')}}"><button class="btn btn-warning" name="register_id"><i class="fa fa-table"> View all customer's table</i></button></a> 
      </div>
      <div class="col-md-2" style="margin-bottom:20px;">
       <a href="{{url('/')}}" target="_blank"><button class="btn btn-primary" name="register_id"><i class="fa fa-internet-explorer"> Open Website</i></button></a> 
      </div>
      <div class="col-md-6" style="margin-bottom:20px;">
      <a href="{{asset('shipmentadmin')}}"><button class="btn btn-success" name="register_id"><i class="fa fa-internet-table">View all Shipments</i></button></a>
      </div>

    <!-- table -->
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="box-header">
              <h3 class="box-title">All Registered Customers</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table no-margin">
                  <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date of birth</th>
                    <th>Company</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                  @foreach($getPost as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->phone}}</td>
                      <td>{{date("jS F, Y", strtotime($item->dateofbirth))}}.</td>
                      <td>{{$item->company}}</td>
                      <td>
                        <a href="{{route('customer.edit', $item->id )}}" name="edit_id" style="display:inline-block;">
                        <button class="btn btn-primary btn-cust">Edit</button> </a>
                        
                            <form action="{{route('customer.delete', $item->id)}}" method="post" style="display:inline-block;">
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
    <strong>Copyright &copy; 2019 <a href="#">Moregate</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

@include('layouts.admin_footer')

</body>
</html>