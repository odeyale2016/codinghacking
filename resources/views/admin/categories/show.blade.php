@extends('layouts.todo')


@section('content')
 

 	<h1 align="center"> <a href="{{route('admin.categories.edit',$category->id)}}">{{$category->name}}</a></h1>
 
 




@endsection