@extends('admin.base')


@section('admin_header')
 <!-- Page-header start -->
  <div class="page-header">
      <div class="page-block">
          <div class="row align-items-center">
              <div class="col-md-8">
                  <div class="page-header-title">
                      <h5 class="m-b-10">View Report</h5>
                      <p class="m-b-0">Welcome to DILG Local Government Monitoring and Evaluation System</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <ul class="breadcrumb-title">
                      <li class="breadcrumb-item">
                          <a href="/"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#">View Report</a>
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
                               <a href="/reports" class="btn btn-inverse"><i class="ti-angle-left"></i> Back</a>
                            </div>
                            <!-- <div class="card-header-right">
                               <button class="btn btn-success" type="submit">Upload <i class="ti-check text-white"></i></button>
                            </div> -->
                        </div>
                        <div class="card-body">
                            <div class="row">
                              <div class="col-md-5">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $report->title }}" readonly="">
                              </div>
                              <div class="col-md-7">
                                <label for="">Report <i class="text-danger">(.xls, .xlsx)</i></label>
                                <input type="text" class="form-control" name="title" value="{{ $report->report_file }}" readonly="">
                               
                              </div>
                            </div>
                            <div class="row mt-5">
                              <div class="col-md-5">
                                <label for="">Description</label>
                                <textarea name="description" id="" cols="30" rows="7" class="form-control" readonly="">{{ $report->description }}</textarea>
                              </div>
                              <div class="col-md-4">
                                <label for="">Frequency</label>
                                <input type="text" readonly="" class="form-control" value="@if($report->frequency == 1)Monthly @elseif($report->frequency == 2)Quarterly @elseif($report->frequency == 3)Semi Yearly @else Annually @endif
                                ">
                              </div>
                              <div class="col-md-3">
                                <label for="">Year</label>
                                <input type="text" class="form-control" name="title" value="{{ $report->report_year }}" readonly="">
                              </div>
                            </div>

                            <div class="row mt-5">
                              <div class="col-md-12">
                     
                                <table class="table table-hover table-bordered mt-2" id="table_header">
                                  <thead>
                                    <th>Province</th>
                                    <th>City/Municipality</th>
                                    @if($headers['report_header_1'] != '')
                                      <th>{{ $headers['report_header_1'] }}</th>
                                    @endif
                                    @if($headers['report_header_2'] != '')
                                      <th>{{ $headers['report_header_2'] }}</th>
                                    @endif
                                    @if($headers['report_header_3'] != '')
                                      <th>{{ $headers['report_header_3'] }}</th>
                                    @endif
                                    @if($headers['report_header_4'] != '')
                                      <th>{{ $headers['report_header_4'] }}</th>
                                    @endif
                                    @if($headers['report_header_5'] != '')
                                      <th>{{ $headers['report_header_5'] }}</th>
                                    @endif
                                    @if($headers['report_header_6'] != '')
                                      <th>{{ $headers['report_header_6'] }}</th>
                                    @endif
                                    @if($headers['report_header_7'] != '')
                                      <th>{{ $headers['report_header_7'] }}</th>
                                    @endif
                                    @if($headers['report_header_8'] != '')
                                      <th>{{ $headers['report_header_8'] }}</th>
                                    @endif
                                    @if($headers['report_header_9'] != '')
                                      <th>{{ $headers['report_header_9'] }}</th>
                                    @endif
                                    @if($headers['report_header_10'] != '')
                                      <th>{{ $headers['report_header_10'] }}</th>
                                    @endif
                                  </thead>
                                  <tbody>

                                    @foreach ($entries as $entry)
                                      <tr>
                                        <td>{{ $entry->lgu }}</td>
                                        <td>{{ $entry['province'] }}</td>
                                        @if($entry['input_1'] != '')
                                          <td>{{ $entry['input_1'] }}</td>
                                        @endif
                                        @if($entry['input_2'] != '')
                                          <td>{{ $entry['input_2'] }}</td>
                                        @endif
                                        @if($entry['input_3'] != '')
                                          <td>{{ $entry['input_3'] }}</td>
                                        @endif
                                        @if($entry['input_4'] != '')
                                          <td>{{ $entry['input_4'] }}</td>
                                        @endif
                                        @if($entry['input_5'] != '')
                                          <td>{{ $entry['input_5'] }}</td>
                                        @endif
                                        @if($entry['input_6'] != '')
                                          <td>{{ $entry['input_6'] }}</td>
                                        @endif
                                        @if($entry['input_7'] != '')
                                          <td>{{ $entry['input_7'] }}</td>
                                        @endif
                                        @if($entry['input_8'] != '')
                                          <td>{{ $entry['input_8'] }}</td>
                                        @endif
                                        @if($entry['input_9'] != '')
                                          <td>{{ $entry['input_9'] }}</td>
                                        @endif
                                        @if($entry['input_10'] != '')
                                          <td>{{ $entry['input_10'] }}</td>
                                        @endif
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