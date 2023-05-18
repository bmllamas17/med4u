@extends('admin.base')



@section('admin_header')
 <!-- Page-header start -->
  <div class="page-header">
      <div class="page-block">
          <div class="row align-items-center">
              <div class="col-md-8">
                  <div class="page-header-title">
                      <h5 class="m-b-10">Sample Template Report</h5>
                      <p class="m-b-0">Welcome to DILG Local Government Monitoring and Evaluation System</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <ul class="breadcrumb-title">
                      <li class="breadcrumb-item">
                          <a href="/"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#">Sample</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>

  
@endsection

@section('admin_content')

    <h2>BFDP 2023-Region IV-A Summary Report</h2>

 
<ul class="nav nav-tabs">

  <li class="nav-tabs">
    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1"role="tab">Regional Summary</a>
  
  </li>

  <li class="nav-tabs">
    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab">Batangas</a>
  </li>

  <li class="nav-tabs">
    <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab">Cavite</a>
  </li>

  <li class="nav-tabs">
    <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab">Laguna</a>
  </li>

  <li class="nav-tabs">
    <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab5" role="tab">Quezon</a>
  </li>

  <li class="nav-tabs">
    <a class="nav-link" id="tab6-tab" data-toggle="tab" href="#tab6" role="tab">Rizal</a>
  </li>

  <li class="nav-tabs">
    <a class="nav-link" id="tab7-tab" data-toggle="tab" href="#tab7" role="tab">Lucena City</a>
  </li>

</ul>



<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="tab1"></div>
  <div class="page-wrapper">
    <!-- Page-body start -->
    <div class="page-body">
        <div class="row">
           
            <div class="col-md-12 col-xl-8">
                <div class="card table-card">
                    <div class="card-header">
                        <h4>&nbsp;</h4>
                        <div class="card-header-right">
                           <a href="" class="btn btn-success">Save</a>
                        </div>
                    </div>
                <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                
                                <thead> 
                                <tr>
                                    <th>PSGC</th>
                                    <th>REGION</th>
                                    <th>PROVINCE</th>
                                    <th>CITY/MUNICIPALITY</th>
                                    <th>BARANGAY</th>
                                    <th>BFR</th>
                                    <th>BARANGAY BUDGET</th>
                                    <th>SUMMARY OF INCOME AND EXPENDITURES</th>
                                    <th>20% COMPONENT OF IRA UTILIZATION</th>
                                    <th>ANNUAL PROCUREMENT PLAN</th>
                                    <th>LIST OF NOTICE OF AWARD</th>
                                    <th>ITEMIZED MONTHLY COLLECTIONS AND DISBURSEMENTS</th>
                                    <th>NO. OF DOCUMENTS POSTED (OUT OF 8)</th>
                                    <th>FULL (9 documents posted)</th>
                                    <th>PARTIAL (1-8 documents posted)</th>
                                    <th>NC (0 documents posted)</th>
                                </tr>
                                <tr>
                                    <td>41001001</td>
                                    <td>REGION IV-A</td>
                                    <td>BATANGAS</td>
                                    <td>AGONCILLO</td>
                                    <td>ADIA</td>
                                    <td><center><input type="text" name="name1" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name2" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name3" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name4" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name5" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name6" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name7" style="width: 25px; height: 25px";></center></td>
                                    <td><center>5</td>
                                    <td><center>5</td>
                                    <td><center>3</td>
                                    <td><center>0</td>
                                </tr>
                                <tr>
                                    <td>41001002</td>
                                    <td>REGION IV-A</td>
                                    <td>BATANGAS</td>
                                    <td>AGONCILLO</td>
                                    <td>BAGONG SIKAT</td>
                                    <td><center><input type="text" name="name1" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name2" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name3" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name4" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name5" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name6" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name7" style="width: 25px; height: 25px";></center></td>
                                    <td><center>4</td>
                                    <td><center>4</td>
                                    <td><center>2</td>
                                    <td><center>0</td>
                                </tr>
                                <tr>
                                    <td>41001004</td>
                                    <td>REGION IV-A</td>
                                    <td>BATANGAS</td>
                                    <td>AGONCILLO</td>
                                    <td>BALANGON</td>
                                    <td><center><input type="text" name="name1" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name2" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name3" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name4" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name5" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name6" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name7" style="width: 25px; height: 25px";></center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                </tr>
                                <tr>
                                    <td>41001005</td>
                                    <td>REGION IV-A</td>
                                    <td>BATANGAS</td>
                                    <td>AGONCILLO</td>
                                    <td>BILIBINWANG</td>
                                    <td><center><input type="text" name="name1" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name2" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name3" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name4" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name5" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name6" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name7" style="width: 25px; height: 25px";></center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                </tr>
                                <tr>
                                    <td>41001006</td>
                                    <td>REGION IV-A</td>
                                    <td>BATANGAS</td>
                                    <td>AGONCILLO</td>
                                    <td>BANGIN</td>
                                    <td><center><input type="text" name="name1" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name2" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name3" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name4" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name5" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name6" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name7" style="width: 25px; height: 25px";></center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                </tr>
                                <tr>
                                    <td>41001007</td>
                                    <td>REGION IV-A</td>
                                    <td>BATANGAS</td>
                                    <td>AGONCILLO</td>
                                    <td>BARIGON</td>
                                    <td><center><input type="text" name="name1" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name2" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name3" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name4" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name5" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name6" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name7" style="width: 25px; height: 25px";></center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                </tr>
                                <tr>
                                    <td>41001008</td>
                                    <td>REGION IV-A</td>
                                    <td>BATANGAS</td>
                                    <td>AGONCILLO</td>
                                    <td>CORAL NA MUNTI</td>
                                    <td><center><input type="text" name="name1" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name2" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name3" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name4" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name5" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name6" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name7" style="width: 25px; height: 25px";></center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                </tr>
                                <tr>
                                    <td>41001009</td>
                                    <td>REGION IV-A</td>
                                    <td>BATANGAS</td>
                                    <td>AGONCILLO</td>
                                    <td>GUITNA</td>
                                    <td><center><input type="text" name="name1" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name2" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name3" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name4" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name5" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name6" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name7" style="width: 25px; height: 25px";></center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                </tr>
                                <tr>
                                    <td>41001010</td>
                                    <td>REGION IV-A</td>
                                    <td>BATANGAS</td>
                                    <td>AGONCILLO</td>
                                    <td>MABINI</td>
                                    <td><center><input type="text" name="name1" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name2" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name3" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name4" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name5" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name6" style="width: 25px; height: 25px";></center></td>
                                    <td><center><input type="text" name="name7" style="width: 25px; height: 25px";></center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                    <td><center></td>
                                </tr>
                                
                                
                                </thead>
                               
</div>

  <div class="tab-pane fade" id="tab2"></div> 
 

</div>
  
  <script>
  $('.nav-tabs a').click(function(){
    $(this).tab('show');
  })
</script>

@endsection



 


