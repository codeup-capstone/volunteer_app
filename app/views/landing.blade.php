@extends('layouts.master')

@section('content')

<!-- =============== BEGIN #page ==============================-->
<div id="page" class="landingBackground">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content no-page-gutters" role="main">
    <div class="row ">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
      
      <!-- .row .sixteen-gutter --> 
      
        <div class=" hidden-md hidden-lg wrapper">
            <img src="bedifferent/theme/assets/images/bird_hand.jpeg" class="img-responsive" alt="Responsive image">
             
        
        <div class="col-xs-12 col-md-12 container-fluid">
    
        <div class="row no-gutters" >
        
         
          <!--/.col-x-x-->
          
          <hr class="visible-xs vertical-spacer vertical-spacer-xs">
          <!-- add some vertical spacing when stacked -->
          
          <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-8">
            <div class="column-inner column-featured">
              <!-- <h3 class="h2 column-featured-headline">Quick Connect</h3> -->

           	
              <p> <a class="btn btn-featured btn-lg shadow-1 btn-width" id="calltoAction" href="/activities/6">Quick Filter</a></p>
              
            </div>
            <!--/.column-inner .column-featured-->
          </div>
          <!--/.col-x-x--> 

             <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-8">
            <div class="column-inner column-featured">
             <!--  <h3 class="h2 column-featured-headline">Events</h3> -->
           	
              <p> <a class="btn btn-featured btn-lg transparent shadow-1 btn-width" href="{{{ action('ActivitiesController@index') }}}">Browse Events</a> </p>
           
              
            </div>
            <!--/.column-inner .column-featured-->
          </div>
          <!--/.col-x-x--> 
             <div class=" col-xs-12 col-sm-12 col-md-4  col-md-offset-8">
            <div class="column-inner column-featured">
             <!--  <h3 class="h2 column-featured-headline">Non Profits</h3> -->
           	
              <p> <a class="btn btn-featured btn-lg transparent shadow-1" href="{{{ action('AgenciesController@index') }}}">Browse Organizations </a> </p>
           
              
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
        <div class="hidden-xs hidden-sm"> <!-- hidden on small screens -->

           <div class="col-xs-12 col-md-12 container-fluid">
       
           <div class="row no-gutters" >
         
             <hr class="visible-xs vertical-spacer vertical-spacer-xs">
             <!-- add some vertical spacing when stacked -->
             
                 <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-9">
                   <div class="column-inner column-featured transparent btn-height ">
                     <!-- <h3 class="h2 column-featured-headline">Quick Connect</h3> -->

                      <p> <a class="btn btn-featured btn-lg shadow-1 btn-width" id="calltoAction" href="/activities/6">Quick Filter</a> </p>

                   </div>
                   <!--/.column-inner .column-featured-->
                 </div>
                 <!--/.col-x-x--> 
                 <!-- VERTICAL SPACING -->
                 <hr class="vertical-spacer vertical-spacer-lg">

                  <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-9">
                   <div class="column-inner column-featured transparent btn-height ">
                     <!-- <h3 class="h2 column-featured-headline">Events</h3> -->
                    
                     <p> <a class="btn btn-featured btn-lg transparent shadow-1 btn-width" href="{{{ action('ActivitiesController@index') }}}">Browse Events</a> </p>
                   </div>
                   <!--/.column-inner .column-featured-->
                  </div>
                 <!--/.col-x-x--> 
                 <!-- VERTICAL SPACING -->
                 <hr class="vertical-spacer vertical-spacer-lg">

                <div class=" col-xs-12 col-sm-12 col-md-4 col-md-offset-9">
                   <div class="column-inner column-featured transparent btn-height">
                     <!-- h3 class="h2 column-featured-headline">Non Profits</h3> -->
                        <p> <a class="btn btn-featured btn-lg transparent shadow-1" href="{{{ action('AgenciesController@index') }}}">Browse Organizations </a> </p>
                   </div>
                   <!--/.column-inner .column-featured-->
                </div>
             <!--/.col-x-x--> 

           </div>
           <!--no sixteen-gutter-->     
      </div><!-- container fluid -->
     </div><!-- hidden on small screens-->   

    </div>
    <!-- / .container -->
  </div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->
</div>
<!-- ================== END #page ================= --> 





@stop