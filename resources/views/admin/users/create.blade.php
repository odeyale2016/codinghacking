@extends('layouts.todo')

@section('title','Create New User')

@section('content')

<center>
  
<div class="col-lg-4 col-lg-offset-4"><h1>Create New User</h1>
<form class="form-horizontal" action="/admin/users" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
  <fieldset>
   <div class="form-group">
      <div class="col-lg-10">
      <input type="text" class="form-control" id="name"   name="name" placeholder="Enter Name">
       
    </div><br>
    <div class="form-group">
       <div class="col-lg-10">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
       <div class="col-lg-10">
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <br>
     <div class="form-group">
       <div class="col-lg-10">
      <input type="file" class="form-control" id="photo_id" placeholder="Upload Picture" name="photo_id">
    </div>
    <br>
    <div class="form-group">
     <div class="col-lg-10">
      <select class="form-control" id="role" name="role_id">
        <option>Select Role</option>
        @foreach($roles as $role)
        <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach
        
      </select>
    </div>
    <br>
    <div class="form-group">
     <div class="col-lg-10">
      <select class="form-control" id="is_active" name="is_active">
        <option>Select Status</option>
        <option  value="0">Not Active</option>
        <option value="1">Active</option>
        
      </select>
    </div>
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