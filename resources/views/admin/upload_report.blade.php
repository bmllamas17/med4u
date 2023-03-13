@extends('admin.base')


@section('admin_header')
 <!-- Page-header start -->
  <div class="page-header">
      <div class="page-block">
          <div class="row align-items-center">
              <div class="col-md-8">
                  <div class="page-header-title">
                      <h5 class="m-b-10">Upload Report</h5>
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
                               <a href="/reports" class="btn btn-inverse"><i class="ti-angle-left"></i> Back</a>
                            </div>
                            <div class="card-header-right">
                               <button class="btn btn-success" type="submit">Upload <i class="ti-check text-white"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                              <div class="col-md-5">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title">
                                @error('title')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                              <div class="col-md-7">
                                <label for="">Report <i class="text-danger">(.xls, .xlsx)</i> <a href="SampleReportEntry1.xlsx" class="text-warning"><u><i>Download Sample</i> <i class="ti-download"></i></u></a></label>
                                <input type="file" class="form-control" name="report_file" value="{{ old('report_file') }}">
                                @error('report_file')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                            </div>
                            <div class="row mt-5">
                              <div class="col-md-5">
                                <label for="">Description</label>
                                <textarea name="description" id="" cols="30" rows="7" class="form-control">{{ old('description') }}</textarea>
                                @error('description')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                              <div class="col-md-4">
                                <label for="">Frequency</label>
                                <select name="frequency" id="" class="form-control">
                                  <option value="" selected="" disabled="">-Please select frequency-</option>
                                  <option value="1">Monthly</option>
                                  <option value="2">Quarterly</option>
                                  <option value="3">Half-Yearly</option>
                                  <option value="4">Annualy</option>
                                </select>
                                @error('frequency')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                              <div class="col-md-3">
                                <label for="">Year</label>
                                <select name="report_year" id="" class="form-control">
                                  <option value="" selected="" disabled="">-Please select year-</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                </select>
                                @error('report_year')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                            </div>

                            <div class="row mt-5">
                              <div class="col-md-12">
                                <h6>Report Header Fields</h6>
                                <button type="button" class="btn btn-warning btn-sm text-secondary" onclick="add_th();">
                                  Add Header <i class="fa fa-plus"></i>
                                </button>
                                <table class="table table-hover table-bordered mt-2" id="table_header">
                                  <thead>
                                    <th>Province</th>
                                    <th>City/Municipality</th>
                                  </thead>
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