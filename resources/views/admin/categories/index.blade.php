@extends('layouts.todo')

@section('title','Categories Records')

@section('content')

<center>
<div class="col-lg-9 col-lg-offset-9" >

<h1>ALL CATEGORIES</h1>
<table class="table table-hover"  >
						<thead>
							<tr>
								 
								<th>ID</th>
								<th>CategoryName</th>
								 
								<th>Created</th>
								<th>Updated</th>
								<th align="pull-right">Action</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							 @if($categories)
							 @foreach($categories as $category)
							<tr>
								<td>{{$category->id}}</td>
								<td>{{$category->name}}</td>
								 
								<td>{{$category->created_at->diffForHumans()}}</td>
								<td>{{$category->updated_at->diffForHumans()}}</td>
								<td>
									
									  <a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-info">Edit</a>  </td><td>  <form class="form-group pull-right" method="post" action="/admin/categories/{{$category->id}}">
										{{csrf_field()}}
										<input type="hidden" name="_method" value="DELETE">
									<input type="submit" value="Del" class="btn btn-danger">
										</form></td>
							</tr>
							@endforeach
							 @endif
						</tbody>
					</table><br>
					{{$categories->links()}}
<a href="./categories/create" class="btn btn-info">Add New</a></div></center>
@endsection
