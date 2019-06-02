@extends('layouts.app')

@section('page_title', 'Home')


@section('content')
@if(Auth::check())
{{ Auth::user()->name }}
<a href="/dashboard">Dashboard
</a>
<div><a href="/logout">Logout</a></div>
@else
<div class="landing_container">
    <div class="landing_page_btn">
        <a href="/login">Login/<br />Register</a>
    </div>
    <div class="text-block">
        <p>A site where you can compare, manage, and view all your job applications from different job site in an
            organized and centralized manner. You can apply rankings to interested jobs based on, for example, distance
            from home, salary, benefits etc.</p>
        <img src="./images/linkedin.png" alt="linkedin logo" title="linkedin logo">
        <img src="./images/indeed.png" alt="indeed logo" title="indeed logo">
        <img src="./images/monster.png" alt="monster logo" title="monster logo">
    </div>
    <div class="landing_sides_bg">
        <?php include "./images/landing_sides.svg"; ?>
    </div>
    <div class="landing_page_bg">
        <?php include "./images/circles_bg.svg"; ?>
    </div>
</div>
<!--<div>OR</div>
 <a href="{{ url('auth/google') }}" class="btn btn-lg btn-primary btn-block">
  <strong>Login With Google</strong>
</a> -->
@endif
@endsection
