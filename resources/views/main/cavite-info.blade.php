@extends('index')
@section('content')

@include('components.banner')

  <section class="about-us">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-12">
          <!-- <img src="assets/images/about-us.jpg" alt=""> -->
          <p></p>
        </div>
      </div>
      
      <!--start-->
<center>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['City/Municipality', 'Full Compliance', 'Non-Compliance'],
          ['Alfonso',                              11,4],
          ['Amadeo',                               2,13],
          ['Bacoor City',                          1,14],
          ['Carmona',                               6,9],
          ['Cavite City',                           7,8],
          ['City of Dasmariñas',                    9,6],
          ['General Emiilio Aguinaldo',             7,8],
          ['General Trias',                         8,7],
          ['Imus City',                            3,12],
          ['Indang',                               5,10],
          ['Kawit',                                 6,9],
          ['Magallanes',                           13,2],
          ['Maragondon',                           10,5],
          ['Mendez (Mendez-Nuñez)',                1,14],
          ['Naic',                                 15,0],
          ['Noveleta',                              9,6],
          ['Rosario',                              3,12],
          ['Silang',                                7,8],
          ['Tagaytay City',                         9,6],
          ['Tanza',                                11,4],
          ['Ternate',                               9,6],
          ['Trece Martires City',                  12,3],
          ['Gen. Mariano Alvarez',                 3,12]

        ]);

        var options = {
          chart: {
            title: 'Cavite Summary Report',
            subtitle: '2nd Quarter of 2023',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 650px;"></div>
  </body>
</html>

    </center> 
@endsection