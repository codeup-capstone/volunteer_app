@extends('layouts.master')

@section('content')

<!-- =============== BEGIN #page ==============================-->
<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
      <div class="row sixteen-gutter big-text-banner-wrapper">
        <div class="col-lg-3">
          <h3 class="big-text-banner">
            <span class="hidden-lg">
              Serve &middot; Search
            </span>
            <span class="visible-lg">
              Different
            </span>
            <span class="visible-lg">
              Interesting
            </span>
            <span>
              Quickest Way to
              <span class="visible-xs-inline-block visible-sm-inline-block visible-md-inline-block">
                &middot; Volunteer
              </span>
            </span>
            <span class="visible-lg">
              one &middot; click
            </span>
            <span class="visible-lg">
              Many Events
            </span>
          </h3>
        </div>
        <div class="col-lg-9 visible-lg">
          <h3 class="big-text-banner big-text-main-headline">
            <span>
              Serve Search
            </span>
          </h3>
        </div>
      </div>
      <!-- .row .sixteen-gutter --> 
      
      <!-- _________ SLICK SLIDER SINGLE CAROUSEL AND COLUMN EQUAL HEIGHT ___________ -->
      <div class="row sixteen-gutter">
      
        <div class="col-sm-7 col-md-8">
          <div class="featured-carousel single-item-carousel slick-dots-left fade-hover-img loading-slick">
            <div class="slick-slider-item">
              <figure> <a href="blog-summary-masonry-layout.html"><img src="/bedifferent/theme/assets/images/purple_finger.jpg" alt=""></a>
              </figure>
            </div>
            <!--/.slick-slider-item-->
          </div>
        </div>
        <!--/.col-x-x-->
        
        <hr class="visible-xs vertical-spacer vertical-spacer-xs">
        <!-- add some vertical spacing when stacked -->
        
        <div class="col-sm-5 col-md-4">
          <div class="column-inner column-featured">
            <h3 class="h2 column-featured-headline">Quick Connect</h3>
         	
            <p> <a class="btn btn-featured btn-lg" href="{{{ action('HomeController@showRsvp') }}}">See an Event<i class="fa fa-arrow-right fa-fw"></i></a> </p>
         
            
          </div>
          <!--/.column-inner .column-featured-->
        </div>
        <!--/.col-x-x--> 

           <div class="col-sm-5 col-md-4">
          <div class="column-inner column-featured">
            <h3 class="h2 column-featured-headline">Events</h3>
         	
            <p> <a class="btn btn-featured btn-lg" href="{{{ action('ActivitiesController@index') }}}">Browse Events<i class="fa fa-arrow-right fa-fw"></i></a> </p>
         
            
          </div>
          <!--/.column-inner .column-featured-->
        </div>
        <!--/.col-x-x--> 
           <div class="col-sm-5 col-md-4">
          <div class="column-inner column-featured">
            <h3 class="h2 column-featured-headline">Non Profits</h3>
         	
            <p> <a class="btn btn-featured btn-lg" href="{{{ action('HomeController@showlistOrg') }}}">Browse Non Profits <i class="fa fa-arrow-right fa-fw"></i></a> </p>
         
            
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