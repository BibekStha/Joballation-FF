@extends('layouts.app')

@section('page_title', 'New Application')

@section('content')

<h2>New Application</h2>
<form id="input_url_form" action="/dashboard/applications/url" method="post">
  @csrf
  <div class="form-group">
    <label for="job_url">Enter the link of the job posting and we will fill some parts of the form below for you</label>
    <input type="text" name="job_url" id="job_url" class="form-control" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Submit link</button>
</form>

<hr>

<?php 
if( $job !== []){
  $job_title = $job['title'];
  $job_city = $job['city'];
  $job_province = $job['province'];
  $job_description = $job['description'];
  $job_company = $job['company'];
  $job_url = $job['url'];
  $job_source = $job['source'];
} else {
  $job_title = $job_city = $job_company = $job_description = $job_url = $job_province = $job_source = "";
}
?>
<form class="mb-5" id="manual_input_form" action="/dashboard/applications" method = "post" >		
  @csrf
  <div class="form-row" >
      <p class="col-md-12">General Information:</p>
    <div class="form-group col-md-3">
      <label for="job_title" hidden >Job Title</label>							
      <input type="text"  name="job_title" class="form-control" value="{{ $job_title }}"  placeholder="Job Title *" required >
    </div>	
    <div class="form-group col-md-3">
      <label for="company" hidden>Company Name</label>
      <input type="text"  name="company" class="form-control" value="{{ $job_company }}" placeholder="Company Name" >
    </div>
    <div class="form-group col-md-3">  
        <label for="job_type" hidden>Type</label>							
        <select name="job_type" class="form-control" required>
          <option selected="true" disabled>--  Job Type  --</option>
          <?php
            $types = ['Full Time', 'Part Time', 'Contract', 'Internship','Other'];
            foreach ($types as $value) {
              ?>
                <option value="{{$value}}">{{ $value }}</option>
              <?php
            }
          ?>
        </select> 
      </div>
    <div class="form-group col-md-3">  
        <label for="status" hidden>Status</label>							
        <select name="status" class="form-control" required>
          <option selected="true" disabled>--  Application Status  --</option>
          <?php
            $statuses = ['Interested', 'Applied', 'Communicating', 'Invitation for interview', 'Interviewed', 'Hired', 'Rejected', 'Working', 'Left job','Other'];
            foreach ($statuses as $value) {
              ?>
                <option value="{{$value}}">{{ $value }}</option>
              <?php
            }
          ?>
        </select> 
      </div>
  </div>
  <div class="form-row" >
    <div class="form-group col-md-12">
      <label for="description">Description:</label>							
      <textarea type="text"  name="description" class="form-control" rows="10" >{{ $job_description }}</textarea>
    </div>
  </div>
  
  <div class="form-row" >
    <p class="col-md-12">Contact:</p>
    <div class="form-group col-md-4">
      <label for="contact_person" hidden>Contact Person</label>
      <input type="text"  name="contact_person" class="form-control" placeholder="Contact Person" >
    </div>
    <div class="form-group col-md-4">
      <label for="email" hidden>Contact Email</label>
      <input type="text"  name="email" class="form-control" placeholder="Contact Email" >
    </div>
    <div class="form-group col-md-4">
        <label for="phone" hidden>Contact Phone</label>
        <input type="text"  name="phone" class="form-control" placeholder="Contact Phone" >
    </div>
  </div>
  <div class="form-row" >
    <p class="col-md-12">Location:</p>
    <div class="form-group col-md-9">
      <label for="street_address" hidden>Street address</label>
      <input type="text"  name="street_address" class="form-control" value=""  placeholder="Street address" >
    </div>
    <div class="form-group col-md-3">  
        <label for="postal_code" hidden>Postal Code</label>							
        <input type="text"  name="postal_code" class="form-control" placeholder="Postal code" >
      </div>
  </div>	

  <div class="form-row">  
      <div class="form-group col-md-4">
          <label hidden>City</label>
          <select name="city" class="form-control" required>
            <option selected="true" disabled>--  Select a city  -- </option>
            <?php
              $cities = ['Toronto', 'Etobicoke', 'Mississauga', 'Scarborough', 'Ajax', 'Brampton', 'Markham','Kitchener','London','Other'];
              foreach ($cities as $value) {
                ?>
                  <option value="{{$value }}"
                    <?php
                      if(strtolower($job_city) == strtolower($value)) echo('selected');
                    ?>
                  >{{ $value }}</option>
                <?php
              }
            ?>
          </select>  
        </div>	

    <div class="form-group col-md-4">
      <label hidden>Province</label>								
      <select name="province" class="form-control">
      <option value="Ontario">Ontario</option>
      {{-- <option value="Quebec">Quebec</option> --}}
      </select>  
    </div>
  
    <div class="form-group col-md-4">  
      <label hidden>Country</label>								
      <select name="country" class="form-control" >
      <option value="Canada">Canada</option>
      {{-- <option value="usa">United States</option> --}}
      </select>  								
    </div>			 					
  </div>

  <div class="form-row" id="">
      <p class="col-md-12">Additional Information:</p>
      <div class="form-group col-md-4">  
          <label for="salary" hidden>Salary</label>							
          <input type="number"  name="salary" class="form-control" placeholder="$ Salary (Per Hour)" min="0" max="999">
        </div> 
      <div class="form-group col-md-4">
          <label for="source" hidden >Source</label>							
          <input type="text"  name="source" class="form-control" value="{{ $job_source }}" placeholder="Source" >
        </div>	
        <div class="form-group col-md-4">
          <label for="link" hidden >Job URL</label>						
          <input type="text"  name="link" class="form-control" value="{{ $job_url }}"  placeholder="Link" >
        </div>	
  </div>
      
  <button type="submit" class="btn btn-primary">Add new application</button>
</form>

@endsection
