@extends('layouts.app')

@section('page_title', 'New Application')

@section('content')

<h2>New Application</h2>
<form id="input_url_form" action="/dashboard/applications/url" method="post">
  @csrf
  <div class="form-group">
    <label for="job_url">Enter the url of the job posting</label>
    <input type="text" name="job_url" id="job_url" class="form-control" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

{{-- @if( $job !== null )
  {{ $job['title'] }}
@endif --}}

<hr>

<?php 
if( $job !== []){
  // print_r($job);
  // exit();
  $job_title = $job['title'];
  $job_city = $job['city'];
  $job_province = $job['province'];
  $job_description = $job['description'];
  $job_company = $job['company'];
  $job_url = $job['url'];
} else {
  $job_title = $job_city = $job_company = $job_description = $job_url = $job_province = "";
}
?>
<form id="manual_input_form" action="/dashboard/applications" method = "post" >		
  @csrf
  <div class="form-row" >
    <div class="form-group col-md-12">
      <label for="job_title">Job Title</label>							
      <input type="text"  name="job_title" class="form-control" value="{{ $job_title }}"  required >
    </div>	
    <div class="form-group col-md-12">
      <label for="description">Description:</label>							
      <textarea type="text"  name="description" class="form-control" >{{ $job_description }}</textarea>
    </div>
  </div>					
    
  <div class="form-row" >
    <div class="form-group col-md-6">
      <label for="company">Company Name</label>
      <input type="text"  name="company" class="form-control" value="{{ $job_company }}"  >
    </div>
          
    <div class="form-group col-md-6">
      <label for="contact_person">Contact Person:</label>
      <input type="text"  name="contact_person" class="form-control" >
    </div>
  </div>						


  <div class="form-row" >
    <div class="form-group col-md-6">
      <label for="street_address">Address</label>
      <input type="text"  name="street_address" class="form-control" >
      
    </div>
    <div class="form-group col-md-6">
      <label for="secondary_street_address">Address 2:</label>
      <input type="text"  name="secondary_street_address" class="form-control" >
    </div>
  </div>	

  <div class="form-row" id="ak_city">  
    <div class="form-group col-md-3">
      <label>City: </label>
      <select name="city" class="form-control">
      <option value="toronto">Toronto</option>
      <option value="etobicoke">Etobicoke</option>
      <option value="mississauga">Mississauga</option>
      <option value="scarborough">Scarborough</option>
      <option value="ajax">Ajax</option>
      <option value="brampton">Brampton </option>
      <option value="montreal">Montreal</option>
      <option value="laval">Laval </option>
      </select>  
    </div>						
    <div class="form-group col-md-3">
      <label>Province:</label>								
      <select name="province" class="form-control">
      <option value="Ontario">Ontario</option>
      <option value="Quebec">Quebec</option>
      </select>  
    </div>
  
    <div class="form-group col-md-3">  
      <label>Country:</label>								
      <select name="country" class="form-control" >
      <option value="Canada">Canada</option>
      <option value="usa">United States</option>
      </select>  								
    </div>	

    <div class="form-group col-md-3">  
      <label for="postal_code">Postal Code:</label>							
      <input type="text"  name="postal_code" class="form-control" >
    </div>		 					
  </div>

  <div class="form-row">						
  
    <div class="form-group col-md-3">  
      <label for="salary">Salary:</label>							
      <input type="text"  name="salary" class="form-control" >
    </div>
            
    <div class="form-group col-md-3">  
      <label for="status">Status:</label>							
      <input type="text"  name="status" class="form-control" >
    </div>
    
    <div class="form-group col-md-3">  
      <label for="source">Source:</label>							
      <input type="text"  name="source" class="form-control" >
    </div>

    <div class="form-group col-md-3">  
      <label for="link">Link</label>
      <input type="text"  name="link" class="form-control" value="{{ $job_url }}"  >
    </div>
  </div>
      
    <button type="submit" class="btn btn-default">Submit</button>
</form>

@endsection
