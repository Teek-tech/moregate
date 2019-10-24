
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('../moregate/images/admin/userimg/user_image2.jpeg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- <form action="" method="get" class="sidebar-form">
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
        <li class="{{ Request::is('/admin') ? 'active' : '' }}"><a href="{{route('admin.index')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{ Request::is('/admin_allcustomers') ? 'active' : '' }}"><a href="{{route('admin.allcustomers')}}"><i class="fa fa-users"></i> <span>All Customers</span></a></li>
        <li class="{{ Request::is('/shipmentadmin') ? 'active' : '' }}"><a href="{{route('admin.shipments')}}"><i class="fa fa-table"></i> <span>Shipment Arrivals</span></a></li>
        <li class="{{ Request::is('/users') ? 'active' : '' }}"><a href="{{route('admin.users')}}"><i class="fa fa-table"></i> <span>All Administrators</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->