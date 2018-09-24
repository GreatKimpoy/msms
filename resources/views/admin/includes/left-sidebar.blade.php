<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset ('dist/img/midsouth.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <span class=""><b>Administrator</b></span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
       

        <!-- Optionally, you can add icons to the links -->
        <li><a href="#"><i class="fa fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

        <li class="header">MAINTENANCE</li>

             <!--Customer-->
            <li {{{ (Request::is('customer') ? 'class = active': '')}}} ><a href="{{url('customer')}}"><i class="fa fa-user-alt"></i> Customer</a></li>

            <!--Technician-->
            <li {{{ (Request::is('technician') ? 'class = active': '')}}}><a href="{{url('technician')}}"><i class="fa fa-user-alt"></i> Technician</a></li>

            <!--Vehicles-->
            <li class="treeview">
              <a href="#"><i class="fa fa-car-alt"></i> <span>Vehicles</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">

                  <!--Models-->
                 <li {{{ (Request::is('model') ? 'class=active': '')}}}><a href="{{url('model')}}"><i class="fa fa-car-alt"></i> Models</a></li>

                 <!--Inspection-->
                 <li {{{ (Request::is('inspection') ? 'class=active': '')}}}><a href="{{url('inspection')}}"><i class="fa fa-car-alt"></i> Inspection</a></li>

              </ul>
            </li>

              <!--Services-->
            <li class="treeview">
              <a href="#"><i class="fa fa-car-alt"></i> <span>Services</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">

                <!--Categories-->
                 <li {{{ (Request::is('category') ? 'class=active': '')}}}><a href="{{url('category')}}"><i class="fa fa-car-alt"></i> Categories</a></li>

                 <!--List-->
                 <li {{{ (Request::is('service') ? 'class=active': '')}}} ><a href="{{url('service')}}"><i class="fa fa-car-alt"></i> Service List</a></li>

              </ul>
            </li>
        
        <!--Transaction-->
        <li class="header">TRANSACTION</li>
        
            <li><a href="#"><i class="fa fa-calendar-alt"></i> Appointments</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-stethoscope"></i> <span>Inspection</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                 <li><a href="#"><i class="fa fa-stethoscope"></i> Check-up </a></li>
                 <li><a href="#"><i class="fa fa-stethoscope"></i> Maintenance</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-briefcase"></i> <span>Job-Order</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                 <li><a href="#"><i class="fa fa-car-alt"></i> </a></li>
                 <li><a href="#"><i class="fa fa-car-alt"></i> </a></li>
              </ul>
            </li>



      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>