@extends('admin.base')


@section('admin_header')
 <!-- Page-header start -->
  <div class="page-header">
      <div class="page-block">
          <div class="row align-items-center">
              <div class="col-md-8">
                  <div class="page-header-title">
                      <h5 class="m-b-10">Reports</h5>
                      <p class="m-b-0">Welcome to DILG Local Government Monitoring and Evaluation System</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <ul class="breadcrumb-title">
                      <li class="breadcrumb-item">
                          <a href="/"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#">Reports</a>
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
                           <a href="/upload_report" class="btn btn-success">Upload New Report <i class="ti-plus text-white"></i></a>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Frequency</th>
                                    <th>Date & Time Created</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <!-- <th>Priority</th> -->
                                    
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                  @foreach ($reports as $report)

                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <div class="d-inline-block">
                                                    <h6>{{ $report->title }}</h6>
                                                    <p class="text-muted m-b-0">{{ $report->description }}</p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            @if($report->frequency == 1)
                                                Monthly
                                            @elseif($report->frequency == 2)
                                                Quarterly
                                            @elseif($report->frequency == 3)
                                                Semi Yearly
                                            @else
                                                Annually
                                            @endif
                                        </td> 

                                        <!-- <td>{{ $report->created_at }}</td> -->
                                        <td>{{ date('F d, Y | h:i:s a', strtotime($report->created_at)); }} </td>
                                    
                                        <!-- <td><label class="label label-danger">Low</label></td> -->
                                        <td>{{ $report->report_year }}</td>

                                        <td><label class="label label-success">Active</label></td>
                                        
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="/{{ $report->id }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View"><i class="ti-eye"></i></a>
                                                
                                                <form method="POST" action="/report/{{$report->id}}">
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
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Page-body end -->
  </div>

@endsection