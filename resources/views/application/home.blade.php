@extends('layouts.app')

@section('content')

<form action="" method = "#" >		
					 	
						<div class="form-row" >
							<div class="form-group col-md-6">
								<label for="job_title">Job Title</label>							
								<input type="text"  name="job_title" class="form-control"  required >
							</div>	
							<div class="form-group col-md-6">
								<label for="description">Description:</label>							
								<input type="text"  name="description" class="form-control" >
							</div>
						</div>					
							
						<div class="form-row" >
							<div class="form-group col-md-6">
								<label for="company">Company Name</label>
								<input type="text"  name="company" class="form-control" >
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
								<input type="text"  name="link" class="form-control" >
							</div>
						</div>
								
							<button type="submit" class="btn btn-default">Submit</button>
					</form>
@endsection