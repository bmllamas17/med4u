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
            ['Barangay', 'Full Compliance'],
          ['Barangay 1 (POB.)',                            11],
          ['Barangay 10 (POB.)',                              2],
          ['Barangay 11 (POB.)',                         1],
          ['Barangay 2 (POB.)',                                6],
          ['Barangay 3 (POB.)',                            7],
          ['Barangay 4 (POB.)',                     9],
          ['Barangay 5 (POB.)',             7],
          ['Barangay 6 (POB.)',                           8],
          ['Barangay 7 (POB.)',                              3],
          ['Barangay 8 (POB.)',                                 5],
          ['Barangay 9 (POB.)',                                 6],
          ['Barra',                            13],
          ['Bocohan',                             10],
          ['Mayao Castillo',                  1],
          ['Cotta',                                  15],
          ['Gulang-Gulang',                              9],
          ['Dalahican',                               3],
          ['Domoit',                                7],
          ['Ibabang Dupay',                         9],
          ['Ibabang Iyam',                                 11],
          ['Ibabang Talim',                               9],
          ['Ilayang Dupay',                    12],
          ['Ilayang Iyam',                    3],
          ['Ilayang Talim',                 6],
          ['Isabang',                 6],
          ['Mayao Crossing',                 3],
          ['Mayao Kanluran',                 6],
          ['Mayao Parada',                 1],
          ['Mayao Silangan',                 13],
          ['Ransohan',                 12],
          ['Salinas',                 4],
          ['Talao-Talao',                 8],
          ['Market View',                 14]
        

        ]);

        var options = {
          chart: {
            title: 'Lucena Summary Report',
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