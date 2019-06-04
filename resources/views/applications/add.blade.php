@extends('layouts.app')

@section('page_title', 'New Application')

@section('content')

<h2>New Application</h2>
<form action="/dashboard/applications" method="post">
  @csrf
  <div class="form-group">
    <label for="job_url">Enter the url of the job posting</label>
    <input type="text" name="job_url" id="job_url" class="form-control" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@if( $msg !== null )
{{ $msg }}
@endif

@endsection
