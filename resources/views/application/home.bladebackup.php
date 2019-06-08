@extends('layouts.app')

@section('content')

<form action="" method = "#" >		
					 	
						<div class="form-row" >
							<div class="form-group col-md-4">
								<label for="job_title">Job Title</label>							
								<input type="text"  name="job_title" class="form-control"  placeholder="Job Title *" required >
							</div>	
							<div class="form-group col-md-4">
								<label for="company">Company Name</label>
								<input type="text"  name="company" class="form-control" >
							</div>
							<div class="form-group col-md-4">  
								<label for="salary">Salary</label>							
								<input type="text"  name="salary" class="form-control" >
							</div>
							
						</div>					
							
						<div class="form-row" >					
							
							<div class="form-group col-md-4">
								<label for="contact_person">Contact Person</label>
								<input type="text"  name="contact_person" class="form-control" >
							</div>
							<div class="form-group col-md-8">
								<label for="street_address">Address</label>
								<input type="text"  name="street_address" class="form-control" >								
							</div>									
							
						</div>						

					
						<div class="form-row" >
							
							<div class="form-group col-md-4">
								<label>City </label>
								<input type="text"  name="city" class="form-control" >							
								
							</div>	
							<div class="form-group col-md-4">
								<label>Province</label>								
								<input type="text"  name="province" class="form-control" >
								
							</div>
							<div class="form-group col-md-4">  
								<label>Country</label>		
								<input type="text"  name="country" class="form-control" >	
																				
							</div>	
							
							
						</div>	

						<div class="form-row" id="ak_city">  	
							<div class="form-group col-md-3">  
								<label for="phone">Phone </label>							
								<input type="text"  name="phone" class="form-control" >
							</div>	
							<div class="form-group col-md-3">  
								<label for="email">Email </label>							
								<input type="text"  name="email" class="form-control" >
							</div>	
							<div class="form-group col-md-3">  
								<label for="source">Source</label>							
								<input type="text"  name="source" class="form-control" >
							</div>
					
							<div class="form-group col-md-3">  
								<label for="link">Link</label>
								<input type="text"  name="link" class="form-control" >
							</div>
						</div>
						<div class="form-group">
							<label for="status" class="col-sm-2 control-label">Status</label>		
							<div class="col-sm-5">
							<div class="radio radio-danger">
							<input type="radio" name="status" id="status" value="applied">
								<label>Applied</label>
								<input type="radio" name="status" id="status" value="interviewed">
								<label>Interviewed</label>
								<input type="radio" name="status" id="status" value="interested">
								<label>Interested</label>
							    <input type="radio" name="status" id="status" value="hired">
								<label>Hired</label>
							  </div>
							  </div>
						</div>

						
						<div class="form-group>
								<label for="description">Description:</label>							
								<textarea type="text"  name="description" class="form-control"  rows="5"></textarea>
						</div>
								
							<button type="submit" class="btn btn-default">Submit</button>
					</form>
@endsection