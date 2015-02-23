@extends('layouts.master')

@section('content')



<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container no-gutters">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
	      <!-- .row .sixteen-gutter --> 
	      <!-- <div class="row sixteen-gutter"> -->
	      
	       <div class="col-md-12 ">       
	       	<div class="row no-gutters "> <!-- profile info bar -->           	
 				   	<div class="col-xs-12 col-md-3 embed-responsive-4by3">
 		             		<img src="/img/agency/habitat.jpg">
 		             		<p>Welcome Habitat Admin</p>
 		   	       	</div><!--div for profile picture -->
			        <div class="col-xs-12 col-md-3 ">
		   	        	<nav id="nav" role="navigation">
				            <ul>
				              <li class="active has-children"><a href="#">Edit Profile</a>
				              
				                  <!-- <li class="has-children"> <a href="#">Find Events</a> -->
				                    <ul>
				                      <li>Age</li>
				                      <li>Address</li>
				                      <li>Number</li>
				                      <li>Email</li>
				                    </ul>
				                </li>          
				              
				            </ul> <!-- summary of USER PROFILE -->
			          	</nav>
				   	</div>
			        <div class="col-md-3 column-inner column-featured text-center ">
			             	<h3><a class="btn btn-featured btn-lg buttonStyle raised" href="{{{ action('HomeController@showVolunteers') }}}">VOLUNTEERS</a></h3>
			             	
			        </div><!-- VOLUNTEERS-->	
		     		<div class="col-md-3 column-inner column-featured text-center">
				        <div>
		             		<h3><a class="btn btn-featured btn-lg buttonStyle raised" href="{{{ action('HomeController@showCreate') }}}">CREATE event Button</a></h3>
		             	</div><!-- CREATE EVENT-->
	         		</div><!-- CREATE EVENT -->

			</div><!--ADMIN INFO BAR -->
		   </div><!-- first div col-md-12 -->
		   
		   <div class="col-md-12">
		   		<h1>This is where the table goes with all of the Organizations events laid out and the choice to edit or delete</h1>

		   </div>             	
	   

	
	          
	    
	     
	    <!-- / .container -->
   			</div> 
  		</div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->


<!-- ================== END #page ================= --> 

@stop
