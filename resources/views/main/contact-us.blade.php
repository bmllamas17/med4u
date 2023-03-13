@extends('index')
@section('content')

  @include('components.banner')

  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>
            <center>
              <b>Contact Us</b>
            </center>
          </p>
          
          <div style="padding: 20px; background-color: #e5e4e4; border-radius: 5px;">
            <div class="row mt-2">
              <div class="col-md-4">
                <label for="">Name</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-8">
                <label for="">Address</label>
                <input type="text" class="form-control">
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6">
                <label for="">Email</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-6">
                <label for="">Contact Number</label>
                <input type="text" class="form-control">
              </div>
            </div>
            
            <div class="row mt-5">
              <div class="col-md-12">
                <center>
                  <button class="btn btn-primary">Submit</button>
                </center>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

@endsection