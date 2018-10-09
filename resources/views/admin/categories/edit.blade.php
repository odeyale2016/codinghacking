@extends('layouts.todo')



@section('content')
<div class="col-lg-4 col-lg-offset-4">
<h1>Edit Category </h1>
<form  class="form-horizontal" method="post" action="/admin/categories/{{$category->id}}">
	{{csrf_field()}}
	<fieldset>
   <div class="form-group">
      <div class="col-lg-10">
	<input type="hidden" name="_method" value="PUT">
	
<input type="text"  class="form-control" name="name" placeholder="Enter Category Name" value="{{$category->name}}">
<br>
     
	<input type="submit" name="submit" value="UPDATE" class="btn btn-success">&nbsp;<a href="./" class="btn btn-info">Back</a> 

</form>



</div>
@endsection