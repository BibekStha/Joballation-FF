@extends('layouts.app')

@section('content')

<form action="" method = "#" >		
					 	
						<div class="form-row" >
							<div class="form-group col-md-4">
								<label for="job_title" hidden >Job Title</label>							
								<input type="text"  name="job_title" class="form-control"  placeholder="Job Title *" required >
							</div>	
							<div class="form-group col-md-4">
								<label for="company" hidden>Company Name</label>
								<input type="text"  name="company" class="form-control" placeholder="Company Name" >
							</div>
							<div class="form-group col-md-4">  
								<label for="salary" hidden>Salary</label>							
								<input type="text"  name="salary" class="form-control" placeholder="Salary">
							</div>
							
						</div>					
							
						<div class="form-row" >					
							
							<div class="form-group col-md-4">
								<label for="contact_person" hidden>Contact Person</label>
								<input type="text"  name="contact_person" class="form-control" placeholder="Contact Person">
							</div>
							<div class="form-group col-md-8">
								<label for="street_address" hidden>Address</label>
								<input type="text"  name="street_address" class="form-control" placeholder="Address">								
							</div>									
							
						</div>						

					
						<div class="form-row" >
							<div class="form-group" style="display: flex">
								<label>City: </label>
								<input type="text"  name="city" class="form-control" >	
							</div>
							
							
							<div class="form-group" style="display: flex">
								<label>Province:</label>								
								<input type="text"  name="province" class="form-control" >
								
							</div>
							<div class="form-group" style="display: flex">
								<label>Country:</label>		
								<input type="text"  name="country" class="form-control" >	
																				
							</div>	
							
							
						</div>	

						<div class="form-row" ">  	
							<div class="form-group col-md-3">  
								<label for="phone" hidden>Phone </label>							
								<input type="text"  name="phone" class="form-control" placeholder="Phone">
							</div>	
							<div class="form-group col-md-3">  
								<label for="email" hidden>Email </label>							
								<input type="text"  name="email" class="form-control" placeholder="Email" >
							</div>	
							<div class="form-group col-md-3">  
								<label for="source" hidden>Source</label>							
								<input type="text"  name="source" class="form-control" placeholder="Source" >
							</div>
					
							<div class="form-group col-md-3">  
								<label for="link" hidden>Link</label>
								<input type="text"  name="link" class="form-control" placeholder="Link">
							</div>
						</div>
						<div class="form-group">
							<label for="status" class="col-sm-2 control-label" >Status</label>		
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

						
						<div class="form-group">
								<label for="description" hidden>Description:</label>							
								<textarea type="text"  name="description" class="form-control" placeholder="Description" rows="5"></textarea>
						</div>
								
							<button type="submit" class="btn btn-default">Submit</button>
					</form>
					
@endsection