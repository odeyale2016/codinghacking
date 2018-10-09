@extends('layouts.todo')


@section('content')
 

 	<h1 align="center"> <a href="{{route('admin.posts.edit',$post->id)}}">{{$post->title}}</a></h1>
 
 




@endsection