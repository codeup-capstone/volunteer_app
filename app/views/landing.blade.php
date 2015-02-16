@extends('layouts.master')

@section('content')

<!-- =============== BEGIN #page ==============================-->
<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content no-page-gutters" role="main">
    <div class="row ">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
      
      <!-- .row .sixteen-gutter --> 
      
        <div class="wrapper">
            <img src="bedifferent/theme/assets/images/bird_hand.jpeg" class="img-responsive" alt="Responsive image">
             
        
        <div class="col-xs-12 col-md-12 container-fluid">
    
        <div class="row no-gutters" >
        
         
          <!--/.col-x-x-->
          
          <hr class="visible-xs vertical-spacer vertical-spacer-xs">
          <!-- add some vertical spacing when stacked -->
          
          <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="column-inner column-featured">
              <h3 class="h2 column-featured-headline">Quick Connect</h3>
           	
              <p> <a class="btn btn-featured btn-lg" href="{{{ action('HomeController@showRsvp') }}}">See an Event<i class="fa fa-arrow-right fa-fw"></i></a> </p>
           
              
            </div>
            <!--/.column-inner .column-featured-->
          </div>
          <!--/.col-x-x--> 

             <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="column-inner column-featured">
              <h3 class="h2 column-featured-headline">Events</h3>
           	
              <p> <a class="btn btn-featured btn-lg" href="{{{ action('ActivitiesController@index') }}}">Browse Events<i class="fa fa-arrow-right fa-fw"></i></a> </p>
           
              
            </div>
            <!--/.column-inner .column-featured-->
          </div>
          <!--/.col-x-x--> 
             <div class=" col-xs-12 col-sm-12 col-md-4">
            <div class="column-inner column-featured">
              <h3 class="h2 column-featured-headline">Non Profits</h3>
           	
              <p> <a class="btn btn-featured btn-lg" href="{{{ action('HomeController@showlistOrg') }}}">Browse Non Profits <i class="fa fa-arrow-right fa-fw"></i></a> </p>
           
              
            </div>
            <!--/.column-inner .column-featured-->
          </div>
          <!--/.col-x-x--> 

        </div>
        <!--/.row sixteen-gutter-->     
   </div>
      <!-- VERTICAL SPACING -->
      <hr class="vertical-spacer vertical-spacer-lg">
     
     </div> <!--wrapper -->
      
    </div>
    <!-- / .container -->
  </div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->
</div>
<!-- ================== END #page ================= --> 
<!-- ================== FOOTER ================= -->
<footer class="footer">
  <div class="footer-column-wrapper">
    <div class="container">
      <div class="row footer-row equal-height-col">
        <div class="col-sm-5 col-md-3 footer-col">
          <h4 class="footer-title">Socialfy</h4>
          <ul class="social-icon-list">
            <li><a href="#"><i class="fa fa-fw fa-2x fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-fw fa-2x fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-fw fa-2x fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-fw fa-2x fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-fw fa-2x fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-fw fa-2x fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fa fa-fw fa-2x fa-instagram"></i></a></li>
          </ul>
        </div>
        <!-- /.col-sm-5 .col-md-3 footer-col -->
        <div class="col-sm-7 col-md-9 footer-col">
          <h4 class="footer-title">About Us</h4>
          <p>We're a team of like minded guys with diverse backgrounds. We love changing our team name every 4 hours. We've consumed 20 gallons of milk and cupcakes in 3 days. So far no one has managed to crack but we probably will the closer to the deadline we get. </p>
        </div>
        <!-- /.col-sm-7 col-md-9 footer-col-->
      </div>
      <!--/.row .footer-row-->
   
    </div>
    <!--/.container -->
  </div>
  <!--/.footer-column-wrapper -->
  <div class="footer-copyright">
    <div class="container">
      <p class="no-margin">© Copyright 2015 
        All rights reserved.<a class="link-underline" href="site-map.html">Site Map</a> </p>
    </div>
  </div>
  <!--/.footer-copyright--> 
</footer>
<!-- ================== /.END footer ================= --> 




@stop