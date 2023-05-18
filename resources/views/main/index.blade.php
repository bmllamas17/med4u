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
      
      <div class="row">

        <div class="col-md-4">
          <div class="hover hover-2 text-white rounded"><img src="lgmes/4.jpg" alt="">
            <div class="hover-overlay"></div>
            <div class="hover-2-content px-5 py-4">
              <a href="issuances" class="text-white"><h3 class="hover-2-title text-uppercase font-weight-bold mb-0">DILG ISSUANCES</h3></a>
              <p class="hover-2-description text-uppercase mb-0 text-white"></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="hover hover-2 text-white rounded"><img src="lgmes/1.jpg" alt="">
            <div class="hover-overlay"></div>
            <div class="hover-2-content px-5 py-4">
              <a href="/lgu_reports" class="text-white"><h3 class="hover-2-title text-uppercase font-weight-bold mb-0">LGU REPORTS</h3></a>
              <p class="hover-2-description text-uppercase mb-0 text-white"></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="hover hover-2 text-white rounded"><img src="lgmes/5.jpg" alt="">
            <div class="hover-overlay"></div>
            <div class="hover-2-content px-5 py-4">
              <a href="templates" class="text-white"><h3 class="hover-2-title text-uppercase font-weight-bold mb-0">TEMPLATES</h3></a>
              <p class="hover-2-description text-uppercase mb-0 text-white"></p>
            </div>
          </div>
        </div>

      </div>
      <hr>
      
      
    </div>
  </section>


@endsection