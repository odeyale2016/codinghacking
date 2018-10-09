@extends('layouts.todo')

@section('title','Posts Records')

@section('content')

<center>
<div class="col-lg-9 col-lg-offset-9" >

<h1>ALL POSTS</h1>
<table class="table table-hover"  >
						<thead>
							<tr>
								 
								<th>ID</th>
								<th>Title</th>
								<th>Description</th>
								<th>Created</th>
								<th>Updated</th>
								<th align="pull-right">Action</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							 @if($posts)
							 @foreach($posts as $post)
							<tr>
								<td>{{$post->id}}</td>
								<td>{{$post->title}}</td>
								<td>{{$post->content}}</td>
								<td>{{$post->created_at->diffForHumans()}}</td>
								<td>{{$post->updated_at->diffForHumans()}}</td>
								<td>
									
									  <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-info">Edit</a>  </td><td>  <form class="form-group pull-right" method="post" action="/admin/posts/{{$post->id}}">
										{{csrf_field()}}
										<input type="hidden" name="_method" value="DELETE">
									<input type="submit" value="Del" class="btn btn-danger">
										</form></td>
							</tr>
							@endforeach
							 @endif
						</tbody>
					</table><br>
					{{$posts->links()}}
<a href="./posts/create" class="btn btn-info">Add New</a></div></center>
@endsection
