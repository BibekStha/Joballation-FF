@extends('layouts.app')

@section('page_title', 'Home')


@section('content')

@if(Auth::check())
  {{ Auth::user()->name }}
<div><a href="/logout">Logout</a></div>
@else
<div><a href="/login">Login</a></div>
<div><a href="/register">Register</a></div>
@endif
@endsection