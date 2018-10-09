@extends('layouts.todo')

@section('title','Create New Category')

@section('content')

<center>
	
<div class="col-lg-4 col-lg-offset-4"><h1>Create New Category</h1>
<form class="form-horizontal" action="/admin/categories" method="POST">
{{csrf_field()}}
  <fieldset>
   <div class="form-group">
      <div class="col-lg-10">
      <input type="text" class="form-control" id="name"   name="name" placeholder="Enter Category Name">
       
    </div><br>
    <div class="form-group">
     
      <div class="col-lg-10">
      
    <button type="submit" class="btn btn-success">Submit</button>&nbsp;<a href="./" class="btn btn-info">Back</a> 
</div></div>
  </fieldset>
</form>
@if(count($errors))
<div class="alert alert-danger">
@foreach($errors->all() as $error)

{{$error}}
@endforeach
</div>
@endif
</div></center>
@endsection