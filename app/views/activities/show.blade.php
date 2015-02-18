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
      
        <div class="col-md-9 ">
          
            
   	         <div class="row">
             	
	             	<div class="col-md-4 embed-responsive-4by3">
	             		<img class="img-size" src="/img/agency/{{ $activity->agency->image_name }}">

	   	            </div><!--div for logo -->
   	            	
         			<div class="half-row">
		             	<div class="col-md-8 equal-height-text column-inner text-center">
		             		<h1>{{ $activity->name }}</h1>
		             	</div> <!-- event section-->     
   	            		
			        <div class="half-row">
		             	<div class="col-md-4  equal-height-title column-inner text-center">
		             		<h4>Event Date:<br>{{ date("l, F d",strtotime($activity->event_date)) }}</h4>
		             	</div><!-- date section-->
		             		
		             	<div class="col-md-4 equal-height-title column-inner text-center">
		             		<h4>Hosted By:<br><a href="/agencies/{{ $activity->agency->id }}">{{ $activity->agency->name }}</a></h4>
		             	</div><!-- hosted section-->
			        </div>  <!-- top half row section-->   
         			
		             		
         			</div><!-- bottem half row section-->
		       
	   	     </div><!-- top third of  section-->

	   	     <div class="row">
	   	     	<div class="col-md-4 embed-responsive-4by3 ">
	   	     			<img class="img-size" src="/img/agency/map.png"><br>
	             		{{ $activity->location->address }}<br>
	             		{{ $activity->location->city }}, 
	             		{{ $activity->location->state }} 
	             		{{ $activity->location->zip }}
	   	            </div><!-- old div for map and address -->
	   	        <div class="col-md-8">
	   	        	  <nav id="nav" role="navigation">
            <ul>
              <li class="active has-children"><a href="#">Summary</a>
                    <ul>
                      <li>{{ $activity->description }}</li>
                    </ul>
                </li>          
              
            </ul> <!-- summary of event -->
          </nav>
	   	       	</div>
	   	     </div><!-- middle third of  section-->
	             
          
          	<div class="row">
	             	<div class="col-md-4">
	             		<p>
	             		</p><!--table data will go here with some blade sytax -->
	             	</div>
	             	<div class="col-md-8">
	             		<p><strong>For more information, contact {{ $activity->contact_name }} through email at {{ $activity->contact_email }} or by phone at {{ preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $activity->contact_phone) }}.</strong></p>
	             	</div>
          	</div> <!-- address section-->
	             
        </div><!-- primary columnsection-->

        <!--/.col-x-x-->
        <hr class="visible-xs vertical-spacer vertical-spacer-xs">
        <!-- add some vertical spacing when stacked -->
        <div class="col-md-3" id="sidebar">
        	<div class="blog-single-sidebar">
		        <aside class="col-md-12 ">
		          <div class="column-inner column-featured">
		            <h3 class="h2 column-featured-headline">RSVP</h3>
		            <p> <a class="btn btn-featured btn-md" href="{{{ action('HomeController@showRsvp') }}}"><i class="fa fa-arrow-right fa-fw"></i></a> </p>      
		          </div>
		          <!--/.column-inner .column-featured-->
		        </aside><!-- rsvp button -->
		        

		        <aside class="col-md-12 ">
		          <div class="column-inner column-featured">
		            <h3 class="h2 column-featured-headline">PASS</h3>
		         	
		            <p> <a class="btn btn-featured btn-md" href="#"><i class="fa fa-arrow-right fa-fw"></i></a> </p>
		                    
		          </div>
		          <!--/.column-inner .column-featured-->
		        </aside><!-- pass button-->
		        
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
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->
</div>
</div>
<!-- ================== END #page ================= --> 


@stop
