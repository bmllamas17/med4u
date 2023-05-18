@extends('admin.base')

@section('admin_header')

<div class="page-header">
<div class="page-block">
<div class="row align-items-center">
<div class="col-md-8">
<div class="page-header-title">
<h5 class="m-b-10"></h5>
<p class="m-b-0"></p>

</div>
</div>

<div class="col-md-4">

<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="/"><i class="fa fa-home"></i></a></li>

<li class="breadcrumb-item"><a href="#"></a></li>
</ul>
</div></div></div></div>

@endsection


@return void

public function _ construct()
{
    $input = $request->all();
    $this->validate([
        'email'=>'required email'
        'password'=>'required'
    ]);
    if(aut()->attempt(array('email'=>input['email'],'password'=>$input['password']))){

    }else
}   

<div class="col-xl-12 cold-md-12">
    <div class="col-md-3">
        <input type="hidden" id="province_id" name="province_id">
        