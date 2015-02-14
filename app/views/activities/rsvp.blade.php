@extends('layouts.master')

@section('content')


<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
      <!-- .row .sixteen-gutter --> 
      <div class="row sixteen-gutter">
      
        <div class="form">
          
            
   	         <div class="row">
             	
	             	<div class="col-md-3 embed-responsive embed-responsive-4by3">
	             		<iframe class="embed-responsive-item" src="/img/agency/habitat.jpg" ></iframe>
	   	            </div><!--div for logo -->
   	            	
   	            		
			        <div class="half-row">
		             	<div class="col-md-3  equal-height-title column-inner text-center">
		             		<h3>DATE</h3>
		             	</div>
		             		
		             	<div class="col-md-3 equal-height-title column-inner text-center">
		             		<h3>Hosted By</h3>
		             	</div>
			        </div>     
         			<div class="half-row">
		             	<div class="col-md-6 equal-height-text column-inner text-center">
		             		<h3>Event Name</h3>
		             	</div>          
         			</div>
		       
	   	     </div>


	             
          
          	<div class="col-md-4">
	             	<div>
	             		<p>123 Falcon St<br>San Antonio, TX<br>75344</p><!--table data will go here with some blade sytax -->
	             	</div>
          	</div>
	             
        

        <!--/.col-x-x-->
        
        <hr class="visible-xs vertical-spacer vertical-spacer-xs">
        <!-- add some vertical spacing when stacked -->
        
	        <div class="col-sm-5 col-md-4">
	          <div class="column-inner column-featured">
	            <h3 class="h2 column-featured-headline">RSVP</h3>
	            <p> <a class="btn btn-featured btn-lg" href="{{{ action('HomeController@showRsvp') }}}"><i class="fa fa-arrow-right fa-fw"></i></a> </p>      
	          </div>
	          <!--/.column-inner .column-featured-->
	        </div><!-- rsvp button -->
	        <!--/.col-x-x--> 

	        <div class="col-sm-5 col-md-4">
	          <div class="column-inner column-featured">
	            <h3 class="h2 column-featured-headline">PASS</h3>
	         	
	            <p> <a class="btn btn-featured btn-lg" href="#"><i class="fa fa-arrow-right fa-fw"></i></a> </p>
	                    
	          </div>
	          <!--/.column-inner .column-featured-->
	        </div><!-- pass button-->
	        <!--/.col-x-x--> 
	        <div class="col-sm-5 col-md-4">
	          <div class="column-inner column-featured">
	            <h3 class="h2 column-featured-headline">HOME</h3>
	         	<p> <a class="btn btn-featured btn-lg" href="{{{ action('HomeController@showHome') }}}"> <i class="fa fa-arrow-right fa-fw"></i></a> </p>      
	          </div>
	          <!--/.column-inner .column-featured-->
	        </div> <!-- back to home button -->
        <!--/.col-x-x--> 

      </div><!-- row that contains rsvp and all data -->
          
   
    </div>
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
