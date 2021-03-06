@extends('admin.layouts.app')

@section('title')
  {{"Technicians"}}
@endsection

@section('styles-include')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Technician Profile</h3>
	  </div><!-- /.container-fluid -->
	</section>
@endsection


@section('content-body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="{{asset ('dist/img/avatar.png')}}" alt="User profile picture">

            <h3 class="profile-username text-center">Earnest John Gungon</h3>

            <p class="text-muted text-center">Technician</p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Specializations</b> <a class="pull-right"></a>
              </li>
            </ul>
          </div>
          <!-- /.box-body -->

           <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-birthday-cake margin-r-5"></i> Age</strong>

              <p class="text-muted">
                
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i>Address</strong>

              <p class="text-muted"></p>

              <hr>

              <strong><i class="fa fa-user-tie margin-r-5"></i> Skills</strong>

              <p class="text-muted">
                
              </p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
      </div>

      <div class="col-md-9">
          
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">History Of Work</h3>
            </div>
            <div class="box-body">
              <table id="work" class="table table-bordered table-striped table-hovered">
                <thead>
                  <tr>
                        <th>ID</th>
                        <th>Job Order Number</th>
                        <th>Service Name</th>
                        <th>Standard Time</th>
                        <th>Actual Time</th>
                        <th>Rating</th>    
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                        <th>ID</th>
                        <th>Job Order Number</th>
                        <th>Service Name</th>
                        <th>Standard Time</th>
                        <th>Actual Time</th>
                        <th>Rating</th>
                  </tr>
                  </tfoot>
              </table>
            </div>
          </div>

      </div>



    </div>
  </div>
</section>
@endsection




@section('scripts-include')
    
    <!-- DataTables -->
  <script src="{{asset ('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset ('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

  <script>
    $(function () {
      $('#work').DataTable()
     
    })
  </script>

@endsection