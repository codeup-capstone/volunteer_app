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
		     		<div class="section">
				        <div class="half-row col-md-6">
			             	<div class="equal-height-title column-inner text-center">
			             		<h3>USER NAME</h3>
			             	</div><!-- USER NAME-->
				         	<div class="half-row">
					            <div class="col-md-6 equal-height-text column-inner text-center">
					             	<h3>PAST EVENTS</h3>
					             </div> <!-- PAST EVENTS-->     
					             <div class="col-md-6 equal-height-title column-inner text-center">
					             	<h3>FUTURE EVENTS</h3>
					             </div><!-- RSVP COUNT-->	
			         		</div><!-- usr rsvps data -->
				        </div>  <!-- top half row section-->   
	         		</div><!-- left third of profile infobar -->
			        		
		     	
			        
			        <div class="col-md-4">
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
	   			   
	   			   <div class="col-md-2 embed-responsive-4by3">
	   	             		<img src="/bedifferent/theme/assets/images/people/kathy.jpg">
	   	   	       </div><!--div for profile picture -->
	   	   	    
			</div><!--TOP SECTION OF USER PROFILE BREAKDOWN-->
		   </div>             	
	   

	    	<div class="col-md-12">
		     <div class="row">

	    		<div class="col-md-9">	
			     	<h1>USERS RSVP EVENTS GO IN HERE</h1>
			     	<h1>USERS RSVP EVENTS GO IN HERE</h1>
			     	<h1>USERS RSVP EVENTS GO IN HERE</h1>
			     	<h1>USERS RSVP EVENTS GO IN HERE</h1>
		     	</div><!-- table of events -->
		     

	        <!--/.col-x-x-->
	        <hr class="visible-xs vertical-spacer vertical-spacer-xs">
	        <!-- add some vertical spacing when stacked -->
	        <div class="col-md-3" id="sidebar">
	        	<div class="blog-single-sidebar">
			        <aside class="col-md-12 ">
			          <div class="column-inner column-featured">
			            <h3 class="h2 column-featured-headline">serve search Tagline here</h3>    	
			          </div>
			          <!--/.column-inner .column-featured-->
			        </aside><!-- pass button-->
			        
			        <aside class="col-md-12 ">
			          <div class="column-inner column-featured">
			            <h3 class="h2 column-featured-headline">Fast Finder</h3>
			            <p> <a class="btn btn-featured btn-md" href="{{{ action('HomeController@showRsvp') }}}"><i class="fa fa-arrow-right fa-fw"></i></a> </p>      
			          </div>
			          <!--/.column-inner .column-featured-->
			        </aside><!-- rsvp button -->
			        
			        
			        <aside class="col-md-12">
			          <div class="column-inner column-featured">
			            <h3 class="h2 column-featured-headline">HOME</h3>
			         	<p> <a class="btn btn-featured btn-md" href="{{{ action('HomeController@showHome') }}}"> <i class="fa fa-arrow-right fa-fw"></i></a> </p>      
			          </div>
			          <!--/.column-inner .column-featured-->
			        </aside> <!-- back to home button -->
	        	</div><!-- single sidebar section-->
		        
		     </div><!-- id sidebar section-->

	      </div><!-- row that contains rsvp and all data -->
	          
	    
	      <!-- VERTICAL SPACING -->
	      <hr class="vertical-spacer vertical-spacer-lg"> 
	    <!-- / .container -->
   			</div> 
  		</div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->
	</div>
</div>
<!-- ================== END #page ================= --> 

@stop
