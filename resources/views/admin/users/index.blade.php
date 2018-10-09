

@extends('layouts.todo')

@section('title','User Records')


@section('content')
<center>
<div class="col-lg-12 col-lg-offset-12">
<h1>Users</h1>
<a href="./users/create" class="btn btn-info">Add New</a>
@if(Session::has('deleted_user'))
<p class="btn-danger">{{session('deleted_user')}}</p>

@endif
@if(Session::has('updated_user'))
<p class="btn-info">{{session('updated_user')}}</p>

@endif
<table class="table table-hover"  >
						<thead>
							<tr>
								 
								<th>ID</th>
								<th>Picture</th>
								<th>Name</th>
								<th>Email</th>
								<th>Role</th>
								<th>Is Active</th>
								<th>Created</th>
								<th>Updated</th>
								<th align="pull-right">Action</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							 @if($users)
							 @foreach($users as $user)
							<tr>
								<td>{{$user->id}}</td>
								<td><img height="100" width="100" src="{{$user->photo ? $user->photo->file : 'http://placeholder.it/400x400'}}" alt=""></td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->role->name}}</td>
								<td>{{$user->is_active==1 ? 'Active' : 'Not Active' }}</td>
								<td>{{$user->created_at->diffForHumans()}}</td>
								<td>{{$user->updated_at->diffForHumans()}}</td>
								<td> <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-info">Edit</a></td>
								<td>  <form class="form-group pull-right" method="post" action="/admin/users/{{$user->id}}">
										{{csrf_field()}}
										<input type="hidden" name="_method" value="DELETE">
									<input type="submit" value="Del" class="btn btn-danger">
										</form></td>
							</tr>
							@endforeach
							 @endif
						</tbody>
					</table>
					</div></center>
					 

@stop
 