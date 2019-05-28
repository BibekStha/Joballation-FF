@extends('layouts.app')

@section('page_title', 'Home')


@section('content')

@if(Auth::check())
  {{ Auth::user()->name }} 
  <a href="/dashboard">Dashboard
  </a>
<div><a href="/logout">Logout</a></div>
@else
<div><a href="/login">Login</a></div>
<div><a href="/register">Register</a></div>
<div>OR</div>
<a href="{{ url('auth/google') }}" class="btn btn-lg btn-primary btn-block">
  <strong>Login With Google</strong>
</a>
@endif
@endsection