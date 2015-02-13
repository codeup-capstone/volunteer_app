@extends('layouts.master')

@section('content')


<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
      
      <div class="row sixteen-gutter">
      
        <div class="col-sm-7 col-md-8">
          <div class="featured-carousel single-item-carousel">
            
             	<div class="col-sm-5 col-md-8" >
	             	<div class="col-md-4">
	             		<iframe src="/img/agency/habitat.jpg" width="259px" height="203px"></iframe>
	   	            </div><!--div for logo -->
	             	<div class="col-sm-5 col-md-4 column-inner text-center">
	             			<p>DATE</p>
	             	</div>

	             	<!-- <div class="col-md-4">
	             		<iframe src="https://mapsengine.google.com/00788290253781242191-09052745394509652502-4/widget/in_iframe" width="259" height="203px"></iframe>
	             	</div><!-- map div --> 
	             </div><!--left group of main section -->
            
            <!--/.slick-slider-item-->
	             	<div>
	             		<p>123 Falcon St<br>San Antonio, TX<br>75344</p><!--table data will go here with some blade sytax -->
	             	</div>
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
        </div>
        <!--/.col-x-x--> 

        <div class="col-sm-5 col-md-4">
          <div class="column-inner column-featured">
            <h3 class="h2 column-featured-headline">PASS</h3>
         	
            <p> <a class="btn btn-featured btn-lg" href="#"><i class="fa fa-arrow-right fa-fw"></i></a> </p>
         
            
          </div>
          <!--/.column-inner .column-featured-->
        </div>
        <!--/.col-x-x--> 
        <div class="col-sm-5 col-md-4">
          <div class="column-inner column-featured">
            <h3 class="h2 column-featured-headline">HOME</h3>
         	
            <p> <a class="btn btn-featured btn-lg" href="{{{ action('HomeController@showHome') }}}"> <i class="fa fa-arrow-right fa-fw"></i></a> </p>      
            
          </div>
          <!--/.column-inner .column-featured-->
        </div>
        <!--/.col-x-x--> 

      </div>
      <!--/.row sixteen-gutter-->     
   
      <!-- VERTICAL SPACING -->
      <hr class="vertical-spacer vertical-spacer-lg"> 
    </div>
    <!-- / .container -->
  </div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->
</div>
<!-- ================== END #page ================= --> 


@stop
