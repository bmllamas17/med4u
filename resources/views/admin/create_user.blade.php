@extends('admin.base')


@section('admin_header')
 <!-- Page-header start -->
  <div class="page-header">
      <div class="page-block">
          <div class="row align-items-center">
              <div class="col-md-8">
                  <div class="page-header-title">
                      <h5 class="m-b-10">Create New Account!!!</h5>
                      <p class="m-b-0">Welcome to DILG Local Government Monitoring and Evaluation System</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <ul class="breadcrumb-title">
                      <li class="breadcrumb-item">
                          <a href="/"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#">Upload Report</a>
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
        <form action="/insert_report" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
           
                <div class="col-xl-12 col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <div class="card-header-left">
                               <a href="/users" class="btn btn-inverse"><i class="ti-angle-left"></i> Back</a>
                            </div>
                            <div class="card-header-right">
                               <button class="btn btn-success" type="submit">Submit<i class="ti-check text-white"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-horizontal">

                              <div class="mt-3">
                                <label for="">Full Name:</label>
                                <input type="text" class="form-horizontal" name="name">
                                @error('name')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>

                              <div class="mt-3">
                                <label for="">Username:</label>
                                <input type="text" class="form-horizontal" name="username">
                                @error('username')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>

                              <div class="mt-3">
                                <label for="">Password:</label>
                                <input type="text" class="form-horizontal" name="password">
                                @error('password')
                                  <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                              
                            </div>

                            
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <!-- Page-body end -->
  </div>

@endsection

<script>
  var th_val = 1;

  function add_th()
  {
    $("#table_header>thead>tr").append('<th><input type="text" class="form-control" name="report_header_'+th_val+'" required=""></th>');

    th_val++;
  }

</script>