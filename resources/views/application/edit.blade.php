@extends('layouts.app')

@section('content')
<h2> Edit Application</h2>
<form method="post" action="{{action('ApplicationController@update','$id')}} >
	{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH" />
					 	
						<div class="form-row" >
							<div class="form-group col-md-4">
								<label for="job_title" hidden >Job Title</label>							
								<input type="text"  name="job_title" class="form-control"  
								value="{{$applications->job_title}}" placeholder="Job Title *" required >
							</div>	
							<div class="form-group col-md-4">
								<label for="company" hidden>Company Name</label>
								<input type="text"  name="company" class="form-control" 
								value="{{$applications->company}}" placeholder="Company Name" >
							</div>
							<div class="form-group col-md-4">  
								<label for="salary" hidden>Salary</label>							
								<input type="text"  name="salary" class="form-control" 
								value="{{$applications->salary}}" placeholder="Salary">
							</div>
							
						</div>	
</form>		
@endsection				