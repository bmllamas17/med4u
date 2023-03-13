@extends('index')
@section('content')

  @include('components.banner')

  <section class="blog-posts grid-system">
      <div class="container">
        @foreach ($lgus as $lgu)
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="https://drive.google.com/uc?export=view&id={{ $lgu->link_token }}" alt="" height="350" width="300">
                    </div>
                    <div class="down-content">
                      <!-- <span>Lifestyle</span> -->
                     <h4>{{ $lgu->citymun }}</h4>
                      <ul class="post-info">
                        <li>{{ $lgu->capital }}</a></li>
                        <li>{{ $lgu->population }}</li>
                        <li>{{ $lgu->zip_code }}</li>
                      </ul>
                      <p>{{ $lgu->lgu_description }}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="content">
                      <ul>
                        <li><a href="#">
                          <h5>Reports</h5>
                        </a></li>
                        <li><a href="#">
                          <h5>Barangays</h5>
                        </a></li>
                        <li><a href="#">
                          <h5>Contacts</h5>
                        </a></li>
                        <li><a href="#">
                          <h5>List of Elected Officials</h5>
                        </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </section>

@endsection