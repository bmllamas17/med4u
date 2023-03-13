@extends('index')
@section('content')
<?php $province_name = [ "10" => "Batangas", "34" => "Laguna", "21" => "Cavite", "58" => "Rizal", "56" => "Quezon" ]; ?> 
  @include('components.banner')

  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="all-blog-posts">
            <div class="row">
              @foreach ($lgus as $lgu)

                <div class="col-lg-4">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="https://drive.google.com/uc?export=view&id={{ $lgu->link_token }}" alt="" height="260">
                    </div>
                    <div class="down-content">
                      <center><a href="/lgu-profile/cm/{{ $lgu->id }}"><h4>{{ $lgu->citymun }}</h4></a></center>
                      <ul class="post-info">
                        <center>
                          <li><a href="#">{{ $province_name[$lgu->province] }}</a></li>
                          <li><a href="#">{{ $lgu->capital }}</a></li>
                          <li><a href="#">{{ $lgu->population }}</a></li>
                          <li><a href="#">{{ $lgu->zip_code }}</a></li>
                        </center>
                      </ul>
                      <!-- <p>{{ $lgu->lgu_description }}</p> -->
                    </div>
                  </div>
                </div>

              @endforeach


<!--               <div class="col-lg-12">
                <ul class="page-numbers">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
              </div> -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection