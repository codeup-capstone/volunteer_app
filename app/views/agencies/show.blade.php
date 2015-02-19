@extends('layouts.master')

@section('content')

<div>
	<div class='main-container'>
		<div class='col-md-12' id='agencies'>
			
				
			
			@if (Auth::check())
		
			<a href="{{{ action('AgenciesController@edit', $agency->id) }}}"><button class='btn btn-info' id='edit-button'>Edit agency</button></a>

			{{ Form::open(array('action' => array('AgenciesController@destroy', $agency->id), 'method' => 'delete')) }}
				{{ Form::submit('Delete Organization', array('class' => 'btn btn-danger', 'id' => 'delete-button')) }}
			{{ Form::close() }}

			</div>
</div>
	@endif

	
</div>
	

<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
	      <!-- .row .sixteen-gutter --> 
	      <!-- <div class="row sixteen-gutter"> -->
	      
	       <div class="col-md-9 ">       
	       	<div class="row"> <!-- profile info bar -->           	
 				   <div class="col-md-4 embed-responsive-4by3">
 		   	      		<img class="img-size" src="/img/agency/{{{ $agency->image_name }}}" alt="{{{ $agency->name }}}">
 		   	       </div><!--div for profile picture -->
		     		<div class="section">
				        <div class="half-row col-md-8">
			             	
			             		
			   	        	<nav class="headerStyle" id="nav" role="navigation">
					            <ul class="raised">
					              <li class="active equal-height-title column-inner text-center has-children "><a href="#"> <h5>{{{ $agency->name }}}</h5>
					              		<figcaption class="info-text-box">
					              				<p>Click to see Profile</p>
					              		</figcaption></a>
					                  <!-- <li class="has-children"> <a href="#">Find Events</a> -->
					                    <ul class="text-left">
					                      
					                     <li><span>Address:</span> {{{ $agency->city }}} &nbsp {{{ $agency->state }}} &nbsp {{{ $agency->zip }}}</li>
					                     <li><span>Number:</span> {{{$agency->phone}}}</li>
					                     
					                     <li><p class="summary"> {{{ $agency->description }}}</p></li>
					                    </ul>
					                </li>           
					              
					            </ul> <!-- summary of AGENCY PROFILE -->
				          	</nav>
			             	
				         	
				        </div>  <!-- top half row section-->   
	         		</div><!-- left third of profile infobar -->
			        		
		     	
			        
			        
				   	
	   			   
	   			  
	   	   	    
			</div><!--TOP SECTION OF AGENCY PROFILE BREAKDOWN-->
		               	
	   

	    	<div class="col-md-12">
		     <div class="row">
		     	  <table class="table table-striped table-hover raised" id="clickableRow">
                        <tr>
							<th class="hidden">&nbsp</th>                        
                          	<th>Event Name</th>
                          	<th>Event Date</th>
                          	<th>Start Time</th>
                          
                        </tr>
                      @foreach ($activities as $activity)
                        <tr>
                        	<td class="hidden" ><a href="{{{ action('ActivitiesController@show', $activity->id) }}}"></a></td>
	                        <td >{{ $activity->name }}</td>
	                        <td>{{ $activity->event_date }}</td>
	                        <td>{{ $activity->start_time }}</td>
                        </tr>
                      @endforeach
                    </table>

	   
	    <!-- / .container -->
		   			</div> 
		  		</div>
		  	</div>


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
  		
			<div class="row">
			  <div class="col-md-8 col-md-offset-2 ">
			      <div class="pager">
			          {{$activities->appends(Request::except('page'))->links()}}
			      </div><!-- pagination -->
			    </div><!-- row -->
			  </div><!-- col-md-6 -->
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->
	</div>
</div>
<!-- ================== END #page ================= --> 

@stop
