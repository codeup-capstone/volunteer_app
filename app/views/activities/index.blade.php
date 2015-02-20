<!-- this is the view for when a user clicks on browse by events -->
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
        
         
       
      <div class="row no gutters">
         <div class="col-md-9">
              
             <div class="row" id="tableTitle">
                <div class="col-md-12"><!-- title -->
                  <div class="row text-center ">
                    <h3>Events in Your Area</h3>
                  </div>
                </div><!-- title -->
             </div>

             <div class="row"> <!-- table -->
             
                <div class="col-md-12">
             
                    <table class="table table-striped table-hover raised" id="clickableRow">
                        <tr>
                          <th class="hidden">&nbsp</th> 
                          <th>Event Name</th>
                          <th>Organization</th>
                          <th>Event Date</th>
                          <th>Start Time</th>
                          <th class="hidden-xs hidden-sm">End Time</th>
                        </tr>
                      @foreach ($activities as $activity)
                        <tr>
                          <td class="hidden"><a href="{{{ action('ActivitiesController@show', $activity->id) }}}"></a></td>
                          <td>{{ $activity->name }}</td>
                          <td>{{{ $activity->agency->name }}}</td>
                          <td>{{{ date('D, M d',strtotime($activity->event_date)) }}}</td>
                          <td>{{{ date('g:i A',strtotime($activity->start_time)) }}}</td>
                          <td class="hidden-xs hidden-sm">{{{ date('g:i A',strtotime($activity->end_time)) }}}</td>
                        </tr>
                      @endforeach
                    </table>
                 </div>   
            </div>

                          
     
                <div class="row">
                  <div class="col-md-8 col-md-offset-2 ">
                      <div class="pager">
                          {{$activities->appends(Request::except('page'))->links()}}
                      </div><!-- pagination -->
                    </div><!-- row -->
                  </div><!-- col-md-6 -->

          </div> <!-- main section and table -->
                    <div class="col-md-3 " id="colFullheight">
                      <div class="row">
                        <div class="col-md-12">
                           <div class="column-inner column-featured text-center">
                             
                            <h3> <a class="btn btn-featured btn-lg buttonStyle raised" href="{{{ action('HomeController@showHome') }}}"> Home</a></h3>      
                           </div>

                             <div class="column-inner column-featured text-center">
                             
                               <h1> <a class="btn btn-featured btn-lg buttonStyle raised"  href="/activities/6">Quick Finder</a> </h1>      
                             </div>
                           <!--/.column-inner .column-featured-->
                          </div>
                         </div>
                      </div> <!-- sidebar buttons to go home or random event  -->
       </div>               
  
            
        
      
       
      <!-- / .container -->
      </div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->


<!-- ================== END #page ================= --> 




@stop
