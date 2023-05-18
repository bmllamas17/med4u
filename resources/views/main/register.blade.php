@extends('index')
@section('content')

  <div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
	        	<div class="row">
		        	<div class="col-md-4"></div>
		        	<div class="col-md-4">
			         	<div style="border: 1px solid gray; padding: 22px; border-radius: 5px; background-color: #fff;">
			         		<form method="POST" action="/users/create">
        					@csrf
			         			<center>
			         				<h3>Account Registration</h3>
			         			</center>
			         			<label for="" class="mt-3">Fullname</label>
			         			<input type="text" class="form-control" name="name" value="{{old('name')}}">
				                @error('name')
				                	<p class="text-danger text-xs mt-1">{{ $message }}</p>
				                @enderror

			         			<label for="" class="mt-3">Username</label>
			         			<input type="text" class="form-control" name="username" value="{{old('username')}}">
				                @error('username')
				                	<p class="text-danger text-xs mt-1">{{ $message }}</p>
				                @enderror

								<label for="" class="mt-3">Email</label>
			         			<input type="text" class="form-control" name="email" value="{{old('email')}}">
				                @error('email')
				                	<p class="text-danger text-xs mt-1">{{ $message }}</p>
				                @enderror

			         			<label for="" class="mt-3">Password</label>
			         			<input type="password" class="form-control" name="password">
				                @error('password')
				                	<p class="text-danger text-xs mt-1">{{ $message }}</p>
				                @enderror
			         			<center>
			         				<button class="btn btn-primary mt-3">Register</button>
			         			</center>
			         		</form>

			         	</div>	
		        	</div>
		        	<div class="col-md-4"></div>
	        	</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection