@extends('index')
@section('content')

  @include('components.banner')

  <section class="blog-posts grid-system">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
          <p>
            <center>
              <h5><b>Send Us Email</b></h5>
            </center>
          </p>
          <br>
          <div style="padding: 20px; background-color: #e5e4e4; border-radius: 10px;">
          <br>
          
              <div class="col-lg-6">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
              </div>
              <br>
              <div class="col-lg-6">
                <label for="">Email Address</label>
                <input type="text" class="form-control" name="email">
              </div>
            
            <br>
           
              <div class="col-lg-6">
                <label for="">Subject</label>
                <input type="text" class="form-control" name="subject">
              </div> 
              <br>
              <div class="col-lg-6">
                <label for="">Message</label>
                <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                <p class="text-danger mt-1"></p>
              </div>
        
            <br>
              <div class="col-lg-6">
                  <button class="btn btn-primary">Send Message</button>
              </div>
                <br>
                <div class="row">
                <div class="col-lg-12">
                  
            <img src="dilg-map.png" alt="user image" class="img-radius img-40 align-middle m-r-15" width:"1%" height: "1%" >
            </div>
            </div>
              </div>
            </div>
          </div>
    
   
  </section>

@endsection