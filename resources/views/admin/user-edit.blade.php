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
  @include('layouts.nav-admin')
   
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  @include('layouts.sidebar-admin')
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
    <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <form action="{{route('admin.update', $editPost->id)}}" method="post">
                            @csrf 
                            @method('patch')
                                <div class="row">
                                    <div class="col-md-4 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="name-field">
                                                <label for="Name">Name</label>
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name..." value="{{$editPost->name}}">
                                            </div>
                                            <div class="text-danger">{{$errors->first('name')}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="email-field">
                                                <label for="Email">Email</label>
                                            <div class="form-input">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$editPost->email}}">
                                            </div>
                                            <div class="text-danger">{{$errors->first('email')}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="phone-field">
                                                <label for="phone-field">Status</label>
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="status" name="status" placeholder="Status" value="{{$editPost->status}}">
                                            </div>
                                            <div class="text-danger">{{$errors->first('status')}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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