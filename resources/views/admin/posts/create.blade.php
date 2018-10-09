@extends('layouts.todo')

@section('title','Create New Post')

@section('content')

<center>
	
<div class="col-lg-4 col-lg-offset-4"><h1>Create New Post</h1>
<form class="form-horizontal" action="/admin/posts" method="POST">
{{csrf_field()}}
  <fieldset>
   <div class="form-group">
      <div class="col-lg-10">
      <input type="text" class="form-control" id="title"   name="title" placeholder="Enter Title">
       
    </div><br>
    <div class="form-group">
     
      <div class="col-lg-10">
      <textarea  name="content" class="form-control" id="exampleTextarea" rows="5"></textarea>
   <br>
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