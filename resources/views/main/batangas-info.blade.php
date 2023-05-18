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
          ['City/Municipality', 'Full Compliance'],
          ['Agoncillo',                            11],
          ['Alitagtag',                             2],
          ['Balayan',                               1],
          ['Balete',                                6],
          ['Batangas City',                         7],
          ['Bauan',                                 9],
          ['Calaca',                                7],
          ['Calatagan',                             8],
          ['Cuenca',                                3],
          ['Ibaan',                                 5],
          ['Laurel',                                6],
          ['Lemery',                               13],
          ['Lian',                                 10],
          ['Lipa City',                             1],
          ['Lobo',                                 15],
          ['Mabini',                                9],
          ['Malvar',                                3],
          ['MataasNaKahoy',                         7],
          ['Nasugbu',                               9],
          ['Padre Garcia',                         11],
          ['Rosario',                               9],
          ['San Jose',                             12],
          ['San Juan',                              3],
          ['San Luis',                              9],
          ['San Nicolas',                           9],
          ['San Pascual',                          15],
          ['San Teresita',                          1],
          ['Santo Tomas',                           8],
          ['Taal',                                  4],
          ['Talisay',                              10],
          ['City of Tanauan',                       9],
          ['Taysan',                                4],
          ['Tingloy',                              11],
          ['Tuy',                                   6]

         
        ]);

        var options = {
          chart: {
            title: 'Batangas Summary Report',
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