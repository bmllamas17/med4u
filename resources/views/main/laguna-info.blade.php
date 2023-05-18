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
          ['Alaminos',                            11],
          ['Bay',                                  2],
          ['City of Biñan',                        1],
          ['Cabuyao City',                         6],
          ['City of Calamba',                      7],
          ['Calauan',                              9],
          ['Cavinti',                              7],
          ['Famy',                                 8],
          ['Kalayaan',                             3],
          ['Liliw',                                5],
          ['Los Baños',                            6],
          ['Luisiana',                            13],
          ['Lumban',                              10],
          ['Mabitac',                              1],
          ['Magdalena',                           15],
          ['Majayjay',                             9],
          ['Nagcarlan',                            3],
          ['Paeta',                                7],
          ['Pagsanjan',                            9],
          ['Pakil',                               11],
          ['Pangil',                               9],
          ['Pila',                                12],
          ['Rizal',                                3],
          ['San Pablo City',                       3],
          ['Sa Pedro',                             8],
          ['Santa Cruz',                          14],
          ['Santa Maria',                          3],
          ['City of Santa Rosa',                   7],
          ['Siniloan',                            10],
          ['Victoria',                             4]
         
        ]);

        var options = {
          chart: {
            title: 'Laguna Summary Report',
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
    <div id="barchart_material" style="width: 900px; height: 600px;"></div>
  </body>
</html>

    </center> 
@endsection