@extends('admin.base')


@section('admin_header')
 <!-- Page-header start -->
  <div class="page-header">
      <div class="page-block">
          <div class="row align-items-center">
              <div class="col-md-8">
                  <div class="page-header-title">
                      <h5 class="m-b-10">Users</h5>
                      <p class="m-b-0">Welcome to DILG Local Government Monitoring and Evaluation System</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <ul class="breadcrumb-title">
                      <li class="breadcrumb-item">
                          <a href="/"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#">Users</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
@endsection

@section('admin_content')

  <div class="page-wrapper">
    <!-- Page-body start -->
    <div class="page-body">
        <div class="row">
           
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <!-- <h4>&nbsp;</h4> -->
                        <div class="card-header-right">
                           <!-- <a href="/upload_report" class="btn btn-success">Create New User <i class="ti-plus text-white"></i></a> -->
                        </div>
                    </div>
                    <div class="card-body">

                      <!-- <div class="row"> -->
                        <!-- <div class="col-md-2"></div> -->
                        <!-- <div class="col-md-8"> -->
                          <div id='calendar'></div>
                        <!-- </div> -->
                        <!-- <div class="col-md-2"></div> -->
                      <!-- </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Page-body end -->
  </div>

@endsection

<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth'
    });
    calendar.render();
  });

</script>