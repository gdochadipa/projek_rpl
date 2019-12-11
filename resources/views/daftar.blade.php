@extends('master')

@section('kontent')
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					
						    
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><a href="#" class="mr-3"> </a><a href="#"> </a></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Hi.Klinik</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> 
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	         
	          <li class="nav-item cta mr-md-2"></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  

    <div class="col-md-9 d-flex" style="margin-top:10%">
	        	<div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
		        	<form action="#" class="appointment-form ftco-animate">
		        		<h3>Daftar</h3>
		    				<div class="">
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="First Name">
			    				</div>
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Last Name">
			    				</div>
		    				</div>
		    				<div class="">
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Select Your Services</option>
	                        <option value="">Neurology</option>
	                        <option value="">Cardiology</option>
	                        <option value="">Dental</option>
	                        <option value="">Ophthalmology</option>
	                        <option value="">Other Services</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
		    					<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Phone">
			    				</div>
		    				</div>
		    				<div class="">
			    				<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="ion-md-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date" placeholder="Date">
		            		</div>
			    				</div>
			    				<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="ion-ios-clock"></span></div>
			            		<input type="text" class="form-control appointment_time" placeholder="Time">
		            		</div>
			    				</div>
		    				</div>
		    				<div class="">
		    					<div class="form-group">
			              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
			            </div>
			            <div class="form-group">
			              <input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
			            </div>
		    				</div>
		    			</form>
		    		</div>
	        </div>
@endsection