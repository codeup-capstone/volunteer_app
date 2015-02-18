@extends('layouts.master')

@section('content')


<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container no-gutters">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
      <!-- .row .sixteen-gutter --> 
      
      		<div class="col-md-12">
      		
		      
		        <div class="col-md-3">	            
		   	         <div class="row no-gutters" id="sidebar">
		             	
			             	<div class=" embed-responsive-4by3">
			             		<img src="/img/agency/habitat.jpg">
			   	            </div><!--div for logo -->
		            	    
		        	     	<div class="hidden-xs hidden-sm embed-responsive-4by3">
		                  		<img src="/img/agency/map.png" height="203px" width="259px">
		        	        </div><!--div for logo -->
		            	    
		          	</div>  
		   	   </div>
		     
   	           
	      
   	          	
	      	<div class="col-md-7">
         			<div class="row">
		             	<!-- <div class="col-md-8 equal-height-text column-inner text-center">
		             		<h3>Event Name</h3>
		             	</div> -->    <!-- event section-->  
		             	<div class="col-md-12 equal-height-title column-inner ">
		             			   	   <nav id="nav" role="navigation">
		             		            <ul>
		             		              <li class="active has-children " ><a href="/agencies/{{ $activity->agency->id }}"><h3>{{ $activity->name }}</h3></a>
		             		              
		             		                  <!-- <li class="has-children"> <a href="#">Find Events</a> -->
		             		                    <ul>
		             		                      <li class="dropmenuItems"><span>Description:</span> {{ $activity->description }}</li>
		             		                      <li class="dropmenuItems"><span>Max Volunteers:</span> {{ $activity->max_volunteers }}</li>
		             		                      <li class="dropmenuItems"><span>Staff:</span> {{ $activity->contact_name }}</li>
		             		                      <li class="dropmenuItems"><span>Contact Number:</span> {{ preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $activity->contact_phone) }}</li>
		             		                      <li class="dropmenuItems"><span>Min Age:</span> {{ $activity->min_age }}</li>
		             		                    </ul>
		             		               </li>          
		             		              
		             		            </ul> <!-- summary of event -->
		             		          </nav>
		             	</div><!-- hosted section-->
		             		
         			</div><!-- bottem half row section-->
        	   	     
        	   	     <div class="row">
        	   	     	<div class="col-xs-12 col-md-12 no-gutters">
        			   	   <div>
        		           
        		             <h3 class="column-inner text-center"> <a  href="#">{{ $activity->agency->name }}</a><h3>
        		              
        			   	   </div>

        	   	     	</div>
        	   	       	
        	   	     </div><!-- middle third of  section-->
			        
			        <div class="half-row no-gutters">
		             	<div class="col-md-6  equal-height-title column-inner text-center ">
		             		<h5>When</h5>
		             		<p>{{{ $activity->event_date}}} at {{{ $activity->start_time}}}</p>
		             	</div><!-- date section-->
		             	<div class="col-md-6 equal-height-title column-inner text-center ">
		             		<h5>Where</h5>
	             				<p>{{ $activity->location->address }}<br>
				             		{{ $activity->location->city }}, 
				             		{{ $activity->location->state }} 
				             		{{ $activity->location->zip }}</p>	<!--table data will go here with some blade sytax -->
	             		</div>	
			        </div>  <!-- top half row section-->   
         			
		       

	   	      
          
	          	<div class="half-row no-gutters">
		              	<div class="col-md-6 column-inner text-center">
		             		<p>email button</p><!--table data will go here with some blade sytax -->
		             	</div>

		             	<div class="col-md-6  column-inner text-center">
		             		<p>call button</p><!--table data will go here with some blade sytax -->
		             	</div>
	          	</div> <!-- address section-->
	             
	   	     </div><!-- top third of  section-->
        <!-- primary columnsection col-md-9 -->
	
 
        <!--/.col-x-x-->
        <hr class="visible-xs vertical-spacer vertical-spacer-xs">
        <!-- add some vertical spacing when stacked -->
        
        	<div class="col-md-2" id="sidebar">
        	
		        
		          <div class="col-md-12 column-inner column-featured">
		            <h3 class="h2 column-featured-headline">RSVP</h3>
		            <p> <a class="btn btn-featured btn-md" href="{{{ action('HomeController@showRsvp') }}}"></a> </p>      
		          </div>
		          <!--/.column-inner .column-featured-->
		      
		        

		       
		          <div class="col-md-12 column-inner column-featured ">
		            <h3 class="h2 column-featured-headline">PASS</h3>
		         	
		            <p> <a class="btn btn-featured btn-md" href="#"></a> </p>
		                    
		          </div>
		          <!--/.column-inner .column-featured-->
		       
		        
		       
		          <div class="col-md-12 column-inner column-featured ">
		            <h3 class="h2 column-featured-headline">HOME</h3>
		         	<p> <a class="btn btn-featured btn-md" href="{{{ action('HomeController@showHome') }}}"></a> </p>      
		          </div>
		          <!--/.column-inner .column-featured-->
		        
        	</div><!-- single sidebar section-->
	        
        	
	     </div><!-- id sidebar section-->
	    
      </div><!-- row that contains rsvp and all data -->
          
    
      <!-- VERTICAL SPACING -->
      <hr class="vertical-spacer vertical-spacer-lg"> 
    <!-- / .container -->
   
  </div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->
</div>
</div>
<!-- ================== END #page ================= --> 


@stop