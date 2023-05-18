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
          ['Agdangan',                            11],
          ['Alabat',                               2],
          ['Atimonan',                             1],
          ['Buenavista',                           6],
          ['Burdeos',                              7],
          ['Calauag',                              9],
          ['Candelaria',                           7],
          ['Catanauan',                            8],
          ['Dolores',                              3],
          ['General Luna',                         5],
          ['General Nakar',                        6],
          ['Guinayangan',                         13],
          ['Gumaca',                              10],
          ['Infanta',                              1],
          ['Jomalig',                             15],
          ['Lopez',                                9],
          ['Lucban',                               3],
          ['Macalelon',                            7],
          ['Mauban',                               9],
          ['Mulanay',                             11],
          ['Padre Burgos',                         9],
          ['Pagbilao',                            12],
          ['Panukulan',                            3],
          ['Patnanungan',                          9],
          ['Perez',                                1],
          ['Pitogo',                               5],
          ['Plaridel',                             6],
          ['Polillo',                             12],
          ['Quezon',                               4],
          ['Real',                                 3],
          ['Sampaloc',                            14],
          ['San Andres',                          12],
          ['San Antonio',                         10],
          ['San Francisco (Aurora)',               7],
          ['San Narciso',                          5],
          ['Sariaya',                             15],
          ['Tagkawayan',                           6],
          ['Tayabas City',                         7],
          ['Tiaong',                               2],
          ['Unisan',                              10]
         



        ]);

        var options = {
          chart: {
            title: 'Quezon Summary Report',
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
    <div id="barchart_material" style="width: 900px; height: 700px;"></div>
  </body>
</html>

    </center> 
@endsection