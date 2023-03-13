@extends('index')
@section('content')

  @include('components.banner')

  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="all-blog-posts">
            <div class="row">

              <div class="col-lg-4">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <img src="lgmes/cavite.jfif" alt="" height="260">
                  </div>
                  <div class="down-content">
                    <center><a href="/lgu-reports/cm/{{ 21 }}"><h4>CAVITE</h4></a></center>
                    <ul class="post-info">
                      <li><a href="#">4,344,829</a></li>
                      <li><a href="#">1000sqm</a></li>
                      <li><a href="#">1995</a></li>
                    </ul>
                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
               <!--      <div class="post-options">
                      <div class="row">
                        <div class="col-lg-12">
                          <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#">Best Templates</a>,</li>
                            <li><a href="#">TemplateMo</a></li>
                          </ul>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <img src="lgmes/laguna.png" alt="" height="260">
                  </div>
                  <div class="down-content">
                    <center><a href="/lgu-reports/cm/{{ 34 }}"><h4>LAGUNA</h4></a></center>
                    <ul class="post-info">
                      <li><a href="#">4,344,829</a></li>
                      <li><a href="#">1000sqm</a></li>
                      <li><a href="#">1995</a></li>
                    </ul>
                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
               <!--      <div class="post-options">
                      <div class="row">
                        <div class="col-lg-12">
                          <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#">Best Templates</a>,</li>
                            <li><a href="#">TemplateMo</a></li>
                          </ul>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <img src="lgmes/batangas.JPG" alt="" height="260">
                  </div>
                  <div class="down-content">
                    <center><a href="/lgu-reports/cm/{{ 10 }}"><h4>BATANGAS</h4></a></center>
                    <ul class="post-info">
                      <li><a href="#">4,344,829</a></li>
                      <li><a href="#">1000sqm</a></li>
                      <li><a href="#">1995</a></li>
                    </ul>
                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
               <!--      <div class="post-options">
                      <div class="row">
                        <div class="col-lg-12">
                          <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#">Best Templates</a>,</li>
                            <li><a href="#">TemplateMo</a></li>
                          </ul>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <img src="lgmes/rizal.jpg" alt="" height="260">
                  </div>
                  <div class="down-content">
                    <center><a href="/lgu-reports/cm/{{ 58 }}"><h4>RIZAL</h4></a></center>
                    <ul class="post-info">
                      <li><a href="#">4,344,829</a></li>
                      <li><a href="#">1000sqm</a></li>
                      <li><a href="#">1995</a></li>
                    </ul>
                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
               <!--      <div class="post-options">
                      <div class="row">
                        <div class="col-lg-12">
                          <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#">Best Templates</a>,</li>
                            <li><a href="#">TemplateMo</a></li>
                          </ul>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <img src="lgmes/quezon1.jpg" alt="" height="260">
                  </div>
                  <div class="down-content">
                    <center><a href="/lgu-reports/cm/{{ 56 }}"><h4>QUEZON</h4></a></center>
                    <ul class="post-info">
                      <li><a href="#">4,344,829</a></li>
                      <li><a href="#">1000sqm</a></li>
                      <li><a href="#">1995</a></li>
                    </ul>
                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
               <!--      <div class="post-options">
                      <div class="row">
                        <div class="col-lg-12">
                          <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#">Best Templates</a>,</li>
                            <li><a href="#">TemplateMo</a></li>
                          </ul>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>

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