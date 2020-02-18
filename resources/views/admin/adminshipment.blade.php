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
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <div class="form-group" id="name-field">
                                                <label for="Name">Name</label>
                                            <div class="form-input">
                                                <input type="text" class="form-control" required id="cargo_name" name="cargo_name" placeholder="Name of cargo..." value="{{old('cargo_name')}}">
                                            </div>
                                            <div class="text-danger">{{$errors->first('cargo_name')}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <div class="form-group" id="phone-field">
                                                <label for="phone-field">From</label>
                                            <div class="form-input">
                                               <select name="category" class="form-control" required>
                                               <option value="guangzhou">Guangzhou</option>
                                               <option value="shoaxing">Shoaxing</option>
                                               </select>
                                            </div>
                                            <div class="text-danger">{{$errors->first('category')}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                        <div class="form-group" id="phone-field">
                                                <label for="phone-field">Shipment Arrival date</label>
                                            <div class="form-input">
                                                <input type="date" class="form-control" required id="shipmentdate" rows="70" cols="60" name="shipmentdate" placeholder="Date of Arrival" value="{{old('shipmentdate')}}">
                                            </div>
                                            <div class="text-danger">{{$errors->first('shipmentdate')}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                        <div class="form-group" id="email-field">
                                                <label for="Email">Packing list date</label>
                                            <div class="form-input">
                                                <input type="date" class="form-control" required id="pdate" name="pdate" placeholder="Pcking list date" value="{{old('pdate')}}">
                                            </div>
                                            <div class="text-danger">{{$errors->first('pdate')}}</div>
                                        </div>
                                    </div>
                                      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
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
                    <th>From</th>
                    <th>Cargo Name</th>
                    <th>Packing list date</th>
                    <th>Date of Arrivals</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                  @foreach($shipPost as $item)
                    <tr>
                    <td>{{ucfirst($item->category)}}</td>
                      <td>{{ucfirst($item->cargo_name)}}</td>
                      <td>{{date("jS F, Y", strtotime($item->pdate))}}.</td>
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
               {{$shipPost->render()}}
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