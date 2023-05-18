@extends('admin.base')


@section('admin_header')
 <!-- Page-header start -->
  <div class="page-header">
      <div class="page-block">
          <div class="row align-items-center">
              <div class="col-md-8">
                  <div class="page-header-title">
                      <h5 class="m-b-10">Upload LGU</h5>
                      <p class="m-b-0">Welcome to DILG Local Government Monitoring and Evaluation System</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <ul class="breadcrumb-title">
                      <li class="breadcrumb-item">
                          <a href="/"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#">Upload LGU</a>
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
        <form action="/insert_lgu" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
           
                <div class="col-xl-12 col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <div class="card-header-left">
                               <a href="/lgu" class="btn btn-inverse"><i class="ti-angle-left"></i> Back</a>
                            </div>
                            <div class="card-header-right">
                               <button class="btn btn-success" type="submit">Upload <i class="ti-check text-white"></i></button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row">
                              <div class="col-md-3">
                                <input type="hidden" id="province_id" name="province_id">
                                <label for="">PROVINCE</label>
                                <select name="province" class="form-control" id="select_province">
                                  <option value="" disabled="" selected=""><i>-Select Province-</i></option>
                                  <option value="10">Batangas</option>
                                  <option value="34">Laguna</option>
                                  <option value="21">Cavite</option>
                                  <option value="58">Rizal</option>
                                  <option value="56">Quezon</option>
                                </select>
                                @error('province')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                              <div class="col-md-3">
                                <label for="">LGU</label>
                                <select name="citymun" id="select_lgu" class="form-control">
                                  <option value="" disabled="" selected=""><i>-Select City/Municipality-</i></option>
                                  <!-- @foreach ($lgus as $lgu)
                                    <option value="">{{ $lgu->citymun_m }}</option>
                                  @endforeach -->
                                </select>
                                @error('citymun')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                              <div class="col-md-6">
                                <label for="">LGU Image Google Drive Link Token</label> <i><u><a class="text-primary" target="_blank" href="https://stackoverflow.com/questions/15557392/how-do-i-display-images-from-google-drive-on-a-website">Guide</a></u></i>
                                <input type="text" class="form-control" name="link_token" value="{{ old('link_token') }}" placeholder="1dZjEDerfEU3fHvCfSample">
                                @error('link_token')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                            </div>
                            <div class="row mt-4">
                              <div class="col-md-2">
                                <label for="">Capital</label>
                                <input type="text" class="form-control" name="capital" value="{{ old('capital') }}">
                                @error('capital')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                              <div class="col-md-2">
                                <label for="">Population</label>
                                <input type="text" class="form-control" name="population" value="{{ old('population') }}">
                                @error('population')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                              <div class="col-md-2">
                                <label for="">Zip Code</label>
                                <input type="text" class="form-control" name="zip_code" value="{{ old('zip_code') }}">
                                @error('zip_code')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                              <div class="col-md-6">
                                <label for="">LGU Description</label>
                                <textarea name="lgu_description" id="" cols="20" rows="5" class="form-control">{{ old('lgu_description') }}</textarea>
                                @error('lgu_description')
                                  <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                              </div>
                            </div>
                            <hr>
                            
                       <!--      <div class="row mt-5">
                              <div class="col-lg-3">
                                <div style="background-color: #f3f7f9; padding: 10px; border-radius: 8px">
                                  <button type="button" id="button_barangay" class="btn btn-primary btn-sm float-right mb-2">Add Barangay <i class="fa fa-plus"></i></button>
                                  <table class="table table-hover table-bordered">
                                    <thead>
                                      <th><center>Barangay</center></th>
                                      <th><center>Delete</center></th>
                                    </thead>
                                    <tbody id="tbody_barangay">
                                      <tr>
                                        <td><center>Malvar</center></td>
                                        <td><center><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></center></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="col-lg-5">
                                <div style="background-color: #f2f2f1; padding: 10px; border-radius: 8px">
                                  <button type="button" id="button_contact" class="btn btn-primary btn-sm float-right mb-2">Add Contact Person <i class="fa fa-plus"></i></button>
                                  <table class="table table-hover table-bordered">
                                    <thead>
                                      <th><center>Name</center></th>
                                      <th><center>Position</center></th>
                                      <th><center>Contact</center></th>
                                      <th><center>Delete</center></th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><center>John Doe</center></td>
                                        <td><center>Mayor</center></td>
                                        <td><center>1234</center></td>
                                        <td><center><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></center></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div style="background-color: #f3fef7; padding: 10px; border-radius: 8px">
                                  <button type="button" id="button_official" class="btn btn-primary btn-sm float-right mb-2">Add Official <i class="fa fa-plus"></i></button>
                                  <table class="table table-hover table-bordered">
                                    <thead>
                                      <th><center>Rank</center></th>
                                      <th><center>Position</center></th>
                                      <th><center>Name</center></th>
                                      <th><center>Delete</center></th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><center>1</center></td>
                                        <td><center>Mayor</center></td>
                                        <td><center>John Doe</center></td>
                                        <td><center><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></center></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div> -->


                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <!-- Page-body end -->
  </div>

@endsection

<script type="text/javascript" src="admin/js/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    APP_URL = '{{url('/')}}' ;

    $("#select_province").change(function(){

      var province_id = $(this).val();
      $('#province_id').val(province_id);
      $.ajax({
        type: "GET",
        url: APP_URL + '/get_lgu',
        data: {
            'province_id': province_id
        },
        cache: false,
        contentType: "application/x-www-form-urlencoded;charset=UTF-8",
        success: function(data) {
            
            $("#select_lgu").empty();
            let lgus = JSON.stringify(data);

            var result = [];


            for(var i in data)
            result.push([i,data[i]]);


            for (var i = result.length - 1; i >= 0; i--) {

              // --------------------------------------------
              var split_val = JSON.stringify(result[i][1]);
              const myArray = split_val.split(",");
              // --------------------------------------------
              const lgu_id_x = JSON.stringify(myArray[3])
              const lgu_id_y = lgu_id_x.split(":");

              lgu_id = lgu_id_y[1].replace('\\\"','');
              lgu_id = lgu_id.replace('\\\"\"','');
              // --------------------------------------------
              const lgu_name_x = JSON.stringify(myArray[4])
              const lgu_name_y = lgu_name_x.split(":");

              lgu_name = lgu_name_y[1].replace('\\\"','');
              lgu_name = lgu_name.replace('\\\"\"','');
              // --------------------------------------------

              $("#select_lgu").append("<option value='"+lgu_name+"'>"+lgu_name+"</option>");

            }


        }
      });

    });

    //--------------------------------------------------------------------------------------
    var counter = 0;
    $("#button_barangay").click(function(){

      $("#tbody_barangay").append('<tr id="brgy_row'+counter+'"><td><center><input type="text" class="form-control" name="barangay_name['+counter+']" value="barangay_name['+counter+']"></center></td><td><center><button type="button" onclick="remove_barangay('+counter+')" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button></center></td></tr>');

      counter++;
    });

    // $("#remove_barangay").click(function() {
    //   // $(this).closest("tr").remove();
    // });

  });

  function remove_barangay(row_id)
  {
      $('#brgy_row'+row_id).remove();
  }

</script>