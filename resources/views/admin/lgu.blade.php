@extends('admin.base')


@section('admin_header')
 <!-- Page-header start -->
  <div class="page-header">
      <div class="page-block">
          <div class="row align-items-center">
              <div class="col-md-8">
                  <div class="page-header-title">
                      <h5 class="m-b-10">Local Government Units</h5>
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
        <div class="row">
           
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h4>&nbsp;</h4>
                        <div class="card-header-right">
                           <a href="/upload_lgu" class="btn btn-success">Create New LGU <i class="ti-plus text-white"></i></a>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="bg-secondary text-white">
                                <tr>
                                    <th>PROVINCE</th>
                                    <th>LGU</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php $province_name = [ "10" => "Batangas", "34" => "Laguna", "21" => "Cavite", "58" => "Rizal", "56" => "Quezon" ]; ?> 
                                  @foreach ($lgus as $lgu)
                                    <tr>
                                        <td>{{ $province_name[$lgu->province] }}</td>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <div class="d-inline-block">
                                                    <h6>{{ $lgu->citymun }}</h6>
                                                    <!-- <p class="text-muted m-b-0">{{ $lgu->lgu_description }}</p> -->
                                                    <p class="text-muted m-b-0">{{ \Illuminate\Support\Str::limit($lgu->lgu_description, 150, $end='...') }}</p>

                                                </div>
                                            </div>
                                        </td>
                                        <td><label class="label label-success">Active</label></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Update"><i class="ti-reload"></i></button>

                                                 <form method="POST" action="/lgu/{{$lgu->id}}">
                                                      @csrf
                                                      @method('delete')
                                                        <button class="btn btn-danger btn-sm mt-2" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="ti-trash"></i></button>
                                                  </form>



                                            </div>
                                        </td>
                                    </tr>
                                  @endforeach
      
                                
                                </tbody>
                            </table>
                            <div class="text-right m-r-20">
                                <a href="#" class=" b-b-primary text-primary">View all Projects</a>
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