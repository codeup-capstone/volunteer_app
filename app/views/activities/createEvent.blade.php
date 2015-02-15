@extends('layouts.master')

@section('content')



<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
	      <!-- .row .sixteen-gutter --> 
	      <!-- <div class="row sixteen-gutter"> -->
	      
	       <div class="col-md-12 ">       
	       	<div class="row"> <!-- profile info bar -->           	
		     		<div class="col-md-3">
				        
			             	<div class="equal-height-title column-inner text-center">
			             		<h3>CREATE event Button</h3>
			             	</div><!-- CREATE EVENT-->
	         		</div><!-- CREATE EVENT -->
			             	
				         	
			        <div class="col-md-3 equal-height-title column-inner text-center">
			             	<h3>VOLUNTEERS</h3>
			             	<p>see past volunteers</p>
			        </div><!-- VOLUNTEERS-->	
	         		
				     
			        <div class="col-md-3">
		   	        	<nav id="nav" role="navigation">
				            <ul>
				              <li class="active has-children"><a href="#">Edit Profile</a>
				              
				                  <!-- <li class="has-children"> <a href="#">Find Events</a> -->
				                    <ul>
				                      <li>Age</li>
				                      <li>Adress</li>
				                      <li>Number</li>
				                      <li>Email</li>
				                    </ul>
				                </li>          
				              
				            </ul> <!-- summary of USER PROFILE -->
			          	</nav>
				   	</div>
	   			   
	   			   <div class="col-md-3 embed-responsive-4by3">
	   	             		<img src="/img/agency/habitat.jpg">
	   	             		<p>Welcome Habitat Admin</p>
	   	   	       </div><!--div for profile picture -->
	   	   	    
			</div><!--ADMIN INFO BAR -->
		   </div><!-- first div col-md-12 -->
		   
		   <div class="col-md-12">
		   		<div class="row">
		   			<div class="col-md-7"><!-- form for editing or creating -->
		   				<div class="row"><!-- cancel and save buttons -->
		   					<div class="col-md-6 equal-height-title column-inner text-center"><!-- cancel buttons -->
		   						<h3>Cancel Changes</h3>
		   					</div><!-- cancel buttons -->
		   					<div class="col-md-6 equal-height-title column-inner text-center"><!-- save buttons -->	
		   						<h3>Save Changes</h3>
		   					</div><!-- save buttons -->	
		   				</div><!-- row cancel and save buttons -->
		   				<div class="row"><!-- row form for edit fields -->
		   					<div class="col-md-12 ">
		   						<h3>Form Fields for editing the event information </h3>
		   					</div><!-- form for edit fields -->
		   				</div><!-- row form for edit fields -->
		   			</div><!-- form for editing or creating -->
		   			<div class="col-md-5"><!-- events table  -->
		   				<h3>Events table is populated here for some quick access to </h3>
		   				<h3>Events table is populated here for some quick access to </h3>
		   				<h3>Events table is populated here for some quick access to </h3>
		   				<h3>Events table is populated here for some quick access to </h3>
		   				<h3>Events table is populated here for some quick access to </h3>
		   			</div><!-- events table-->
		   		</div>

		   </div>             	
	   

	
	          
	    
	     
	    <!-- / .container -->
   			</div> 
  		</div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->


<!-- ================== END #page ================= --> 

@stop
