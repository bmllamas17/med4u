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
          ['Angono',                            11],
          ['City of Antipolo',                   2],
          ['Baras',                              1],
          ['Binangonan',                         6],
          ['Cainta',                             7],
          ['Cardona',                            9],
          ['Jala-Jala',                          7],
          ['Rodriguez (Montalban)',              8],
          ['Morong',                             3],
          ['Pililla',                            5],
          ['San Mateo',                          6],
          ['Tanay',                             13],
          ['Tayatay',                           10],
          ['Teresa',                             1],

        ]);

        var options = {
          chart: {
            title: 'Rizal Summary Report',
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
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  </body>
</html>

    </center> 
@endsection