@extends('index')
@section('content')

  @include('components.banner')

  <section class="about-us">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-12">
          <!-- <img src="assets/images/about-us.jpg" alt=""> -->
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas venenatis velit in enim volutpat, ac congue neque rhoncus. Quisque turpis nisl, interdum id arcu sed, blandit varius nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur porta, sapien eget bibendum malesuada, libero elit ornare magna, nec rutrum odio nulla eget erat. Aenean non justo vitae nisl lacinia tempor in eu lorem. Nulla ligula mauris, tincidunt vitae vestibulum eget, cursus eget sapien. Mauris semper tempus mi, nec egestas purus elementum eget. Donec facilisis, sapien in facilisis rutrum, sem purus gravida velit, nec fermentum mi lorem sed elit. Curabitur nec pharetra nibh. Donec lorem nisi, auctor a iaculis sit amet, finibus et dui. Aliquam ut pellentesque urna. Morbi vulputate purus vel arcu lobortis dapibus.</p>
        </div>
      </div>
      
      <div class="row">

        <div class="col-md-4">
          <div class="hover hover-2 text-white rounded"><img src="lgmes/4.jpg" alt="">
            <div class="hover-overlay"></div>
            <div class="hover-2-content px-5 py-4">
              <a href="lgu-reports" class="text-white"><h3 class="hover-2-title text-uppercase font-weight-bold mb-0">DILG ISSUANCES</h3></a>
              <p class="hover-2-description text-uppercase mb-0 text-white">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="hover hover-2 text-white rounded"><img src="lgmes/1.jpg" alt="">
            <div class="hover-overlay"></div>
            <div class="hover-2-content px-5 py-4">
              <a href="/lgu-reports" class="text-white"><h3 class="hover-2-title text-uppercase font-weight-bold mb-0">LGU REPORTS</h3></a>
              <p class="hover-2-description text-uppercase mb-0 text-white">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="hover hover-2 text-white rounded"><img src="lgmes/5.jpg" alt="">
            <div class="hover-overlay"></div>
            <div class="hover-2-content px-5 py-4">
              <a href="lgu-reports" class="text-white"><h3 class="hover-2-title text-uppercase font-weight-bold mb-0">TEMPLATES</h3></a>
              <p class="hover-2-description text-uppercase mb-0 text-white">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit.</p>
            </div>
          </div>
        </div>

      </div>
      <hr>
      
      
    </div>
  </section>


@endsection