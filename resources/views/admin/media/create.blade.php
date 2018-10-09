@extends('layouts.todo')
@section('title','Media Records')
@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
@section('content')

<h1>Create Media</h1>
 
<form class="dropzone" action="/admin/media" method="POST">
 
</form>
@stop

@section('scripts')

<script  src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js" type="text/javascript"></script>
@stop