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
                        <h4>&nbsp;</h4>
                        <div class="card-header-right">
                           <a href="/register" class="btn btn-success">Create New User <i class="ti-plus text-white"></i></a>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>johndoe</td>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td><label class="label label-success">Active</label></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Update"><i class="ti-reload"></i></button>
                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="ti-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>biancamae</td>
                                    <td>Bianca</td>
                                    <td>Llamas</td>
                                    <td><label class="label label-success">Active</label></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Update"><i class="ti-reload"></i></button>
                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="ti-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="text-right m-r-20">
                                <a href="#" class=" b-b-primary text-primary">View all users</a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Page-body end -->
  </div>

@endsection

