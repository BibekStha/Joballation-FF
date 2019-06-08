@extends('layouts.app')

@section('page_title', 'Delete ' . $application->job_title)

@section('content')

<h2>Delete {{ $application->job_title }}</h2>
<form action="{{ url('dashboard/applications/' . $application->id) }}" method="post">
  @method('DELETE')
  @csrf
  <p>Do you really want to delete the job application '{{ $application->job_title }}'?</p>
  <input type="hidden" name="id" value="{{ $application->id }}">
  <button type="submit" class="btn btn-info">Yes</button>
  <a href="/dashboard" class="btn btn-dark">Cancel</a>
</form>
@endsection