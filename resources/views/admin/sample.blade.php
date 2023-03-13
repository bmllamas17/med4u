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
                      <li class="breadcrumb-item"><a href="#">Users</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>

  
@endsection

@section('admin_content')

    <h2>BFDP 2023-Region IV-A Summary Report</h2>

 
<ul class="nav nav-tabs" id="myTab" role="tablist">

  <li class="nav-tabs">
    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Regional Summary</a>
  </li>

  <li class="nav-tabs">
    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Batangas</a>
  </li>

  <li class="nav-tabs">
    <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Cavite</a>
  </li>

  <li class="nav-tabs">
    <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Laguna</a>
  </li>

  <li class="nav-tabs">
    <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Quezon</a>
  </li>

  <li class="nav-tabs">
    <a class="nav-link" id="tab6-tab" data-toggle="tab" href="#tab6" role="tab" aria-controls="tab6" aria-selected="false">Rizal</a>
  </li>

  <li class="nav-tabs">
    <a class="nav-link" id="tab7-tab" data-toggle="tab" href="#tab7" role="tab" aria-controls="tab7" aria-selected="false">Lucena City</a>
  </li>

</ul>


<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab"></div>     
  <table class="table">
    <thead>
        <tr>
            <th>Region</th>
            <th>Province</th>
            <th>Total No. of Barangays</th>
            <th>Full Compliance</th>
            <th>Partial Compliance</th>
            <th>Non-Compliance</th>
            
        </tr>
    </thead>  
    
    <tbody>

            <tr>
            <td>IV-A</td>
            <td>Batangas</td>
            <td>1,078</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            </tr>

            <tr>
            <td></td>
            <td>Cavite</td>
            <td>829</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            </tr>

            <tr>
            <td></td>
            <td>Laguna</td>
            <td>681</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            </tr>

            <tr>
            <td></td>
            <td>Quezon</td>
            <td>1,209</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            </tr>

            <tr>
            <td></td>
            <td>Lucena City</td>
            <td>33</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            </tr>

            <tr>
            <td></td>
            <td>Rizal</td>
            <td>189</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            </tr>

            
            <tr>
            <td></td>
            <td><span style="font-weight: bold;"> SUB-TOTAL</span></td>
            <td><span style="font-weight: bold;"> 4,019</span></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            </tr>

            <tr>
            <td></td>
            <td><span style="font-weight: bold;">PERCENTAGE</span></td>
            <td></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            </tr>

    </tbody>
</div>


  <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">Batangas</div>
  <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">Cavite</div>
  <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">Laguna</div>
  <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">Quezon</div>
  <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">Rizal</div>
  <div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">Lucena City</div>
</div>



@endsection

