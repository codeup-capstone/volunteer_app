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
        
         
       
       <div class="col-md-12">
          <div class="row">
              
             
              <div class="row"><!-- row form for edit fields -->
                <div class="col-md-12 text-center ">
                  <h3>Events in Your Area</h3>
                </div><!-- form for edit fields -->
             
            <table class="table table-striped table-hover">
                <tr>
                  <th>Event Name</th>
                  <th>Organization</th>
                  <th>Event Date</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                </tr>
              @foreach ($activities as $activity)
                <tr>
                <td><a href="{{{ action('ActivitiesController@show', $activity->id) }}}">{{ $activity->name }}</a></td>
                <td>
                  {{ $activity->agency->name }}
                </td>
                <td>{{ $activity->event_date }}</td>
                <td>{{ $activity->start_time }}</td>
                <td>{{ $activity->end_time }}</td>
                </tr>
              @endforeach
            </table>
          </div>
            <div class="pagination col-md-offset-4">
                {{$activities->links()}}
            </div><!-- pagination -->

       </div>               
     

  
            
      
       
      <!-- / .container -->
        </div> 
      </div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->


<!-- ================== END #page ================= --> 




@stop
