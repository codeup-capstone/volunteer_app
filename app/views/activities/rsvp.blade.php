@extends('layouts.master')

@section('content')


<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container no-gutters">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
      <!-- .row .sixteen-gutter --> 
      <div class="row no-gutters">
      
        <div class="col-md-9 ">
          
            
   	         <div class="row no-gutters">
             	
	             	<div class="col-md-4 embed-responsive-4by3">
	             		<img src="/img/agency/habitat.jpg">
	   	            </div><!--div for logo -->
   	            	
         			<div class="half-row">
		             	<!-- <div class="col-md-8 equal-height-text column-inner text-center">
		             		<h3>Event Name</h3>
		             	</div> -->    <!-- event section-->  
		             	<div class="col-md-8 equal-height-title column-inner text-center">
		             		<h5>Hosted By</h5>
		             	</div><!-- hosted section-->
		             		
         			</div><!-- bottem half row section-->
   	            		
			        <div class="half-row">
		             	<div class="col-md-4  equal-height-title column-inner text-center">
		             		<h5>DATE</h5>
		             	</div><!-- date section-->
		             	 	<div class="col-md-4">
	             		<p>123 Falcon St<br>San Antonio, TX<br>75344</p><!--table data will go here with some blade sytax -->
	             	</div>	
			        </div>  <!-- top half row section-->   
         			
		       
	   	     </div><!-- top third of  section-->

	   	     <div class="row no-gutters">
	   	     	<div class="hidden-xs hidden-sm col-md-4 embed-responsive-4by3">
	             		<img src="/img/agency/map.png" height="203px" width="259px">
	   	        </div><!--div for logo -->
	   	     <div class="col-xs-12 col-md-8 no-gutters">
			   	   <nav id="nav" role="navigation">
		            <ul>
		              <li class="active has-children " ><a href="#">Event Name</a>
		              
		                  <!-- <li class="has-children"> <a href="#">Find Events</a> -->
		                    <ul>
		                      <li class="dropmenuItems">Description</li>
		                      <li class="dropmenuItems">Max Volunteers</li>
		                      <li class="dropmenuItems">Staff</li>
		                      <li class="dropmenuItems">Notes</li>
		                    </ul>
		               </li>          
		              
		            </ul> <!-- summary of event -->
		          </nav>
	   	       	</div>
	   	     </div><!-- middle third of  section-->
	             
          
          	<div class="row no-gutters">
	              	<div class="col-md-6 column-inner text-center">
	             		<p>email button</p><!--table data will go here with some blade sytax -->
	             	</div>

	             	<div class="col-md-6  column-inner text-center">
	             		<p>call button</p><!--table data will go here with some blade sytax -->
	             	</div>
          	</div> <!-- address section-->
	             
        </div><!-- primary columnsection col-md-9 -->

        <!--/.col-x-x-->
        <hr class="visible-xs vertical-spacer vertical-spacer-xs">
        <!-- add some vertical spacing when stacked -->
        <div class="col-md-3" id="sidebar">
        	<div class="blog-single-sidebar">
		        <aside class="no-gutters">
		          <div class="column-inner column-featured">
		            <h3 class="h2 column-featured-headline">RSVP</h3>
		            <p> <a class="btn btn-featured btn-md" href="{{{ action('HomeController@showRsvp') }}}"><i class="fa fa-arrow-right fa-fw"></i></a> </p>      
		          </div>
		          <!--/.column-inner .column-featured-->
		        </aside><!-- rsvp button -->
		        

		        <aside class=" no-gutters">
		          <div class="column-inner column-featured ">
		            <h3 class="h2 column-featured-headline">PASS</h3>
		         	
		            <p> <a class="btn btn-featured btn-md" href="#"><i class="fa fa-arrow-right fa-fw"></i></a> </p>
		                    
		          </div>
		          <!--/.column-inner .column-featured-->
		        </aside><!-- pass button-->
		        
		        <aside class="no-gutters">
		          <div class="column-inner column-featured ">
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
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->
</div>
</div>
<!-- ================== END #page ================= --> 


@stop
