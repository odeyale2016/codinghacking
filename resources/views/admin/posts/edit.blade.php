@extends('layouts.todo')



@section('content')
<div class="col-lg-4 col-lg-offset-4">
<h1>Edit Post </h1>
<form  class="form-horizontal" method="post" action="/admin/posts/{{$post->id}}">
	{{csrf_field()}}
	<fieldset>
   <div class="form-group">
      <div class="col-lg-10">
	<input type="hidden" name="_method" value="PUT">
	
<input type="text"  class="form-control" name="title" placeholder="Enter title" value="{{$post->title}}">
<br>
    <div class="form-group">
     
      <div class="col-lg-10">
      <textarea  name="content" class="form-control" id="exampleTextarea" rows="5">{{$post->content}}</textarea>
   <br>
	<input type="submit" name="submit" value="UPDATE" class="btn btn-success">&nbsp;<a href="./" class="btn btn-info">Back</a> 

</form>



</div>
@endsection