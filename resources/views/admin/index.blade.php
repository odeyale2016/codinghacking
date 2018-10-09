@extends('layouts.todo')

@section('title','Admin Dashboard')

@section('content')

<h1 align="center">Admin Dashboard</h1>
<p class="btn-info"" align="center"><marquee behavior="scroll" scrollamount=5>{{ Auth::user()->name }} - You are Welcome to Alphatech Blog with Laravel</marquee> </p>
<img src="/images/education.jpg">


@stop