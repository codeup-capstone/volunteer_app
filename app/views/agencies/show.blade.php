@extends('layouts.master')

@section('content')

<div id="page">
  	<div class="page-content" role="main">
    	<div class="container">      
	       <div class="col-md-9 ">       
	       		<div class="row"> <!-- profile info bar -->           	
 				   	<div class="col-md-4 embed-responsive-4by3 img-size-mobile">
 		   	      		<img class="img-size" src="/img/agency/{{{ $agency->image_name }}}" alt="{{{ $agency->name }}}"><br>
 		   	      		<img class="img-size" src="/img/icons/stars.png"><br>
 		   	      		<a href="{{{ action('AgenciesController@showReviews', $agency->id)}}}">See Reviews</a>	
 		   	       	</div><!--div for profile picture -->
		     		
		     		<div class="section">
				        <div class="half-row col-md-8 equal-height-title column-inner raised">
			             	<nav id="nav" role="navigation">
					            <ul>
					              	<li class="active has-children "><a class="menuDropDown" href="#"> <h5>{{{ $agency->name }}}</h5>
					              		<figcaption class="info-text-box">
					              				<p id="moveRight">Profile</p>
					              		</figcaption></a>
					                    <ul>
						                    <li class="dropmenuItems"><span>Address:</span> {{{ $agency->city }}} &nbsp {{{ $agency->state }}} &nbsp {{{ $agency->zip }}}</li>
						                    <li class="dropmenuItems"><span>Number:</span> {{{$agency->phone}}}</li>
						                    <li class="dropmenuItems"><p> {{{ $agency->description }}}</p></li>
					                    </ul>
					                </li> 
					            </ul>
				          	</nav>
			            </div>  
	         		</div>    
				</div>
		 	<div class="col-md-12">
		     	<div class="row">
		     	  	<table class="table table-striped table-hover raised" id="clickableRow">
                        <tr>
							<th class="hidden">&nbsp</th>                        
                          	<th>Event Name</th>
                          	<th>Event Date</th>
                          	<th>Start Time</th> 
                        </tr>
                      		@foreach ($agency->activities as $activity)
		                        <tr>
		                        	<td class="hidden" ><a href="{{{ action('ActivitiesController@show', $activity->id) }}}"></a></td>
			                        <td >{{ $activity->name }}</td>
			                        <td>{{{ date('D, M d',strtotime($activity->event_date)) }}}</td>
		                          	<td>{{{ date('g:i A',strtotime($activity->start_time)) }}}</td>
		                       	</tr>
                      		@endforeach
                    </table>
		   		</div> 
		  	</div>

		  	</div>
			
			<div class="col-md-3 " >
	  		  	<div class="row">
	  		    	<div class="col-md-12">
	  		       		<div class="column-inner column-featured text-center">
	  		        		<h3> <a class="btn btn-featured btn-lg buttonStyle raised" href="{{{ action('HomeController@showHome') }}}"> Home</a></h3>      
	  		       		</div>

	  		         	<div class="column-inner column-featured text-center">
	  		         		<h1> <a class="btn btn-featured btn-lg buttonStyle raised"  href="{{ action('ActivitiesController@showRandom')}}">Quick Finder</a> </h1>      
	  		         	</div>
	  		       
	  		       		<div class="column-inner column-featured text-center">
	  		         		<h1> <a class="btn btn-featured btn-lg buttonStyle raised"  href="{{ action('ActivitiesController@create')}}">Create Event</a> </h1>      
	  		         	</div>
	  		      	</div>
	  		    </div>
	  		</div>
  		
			<div class="row">
			  	<div class="col-md-8 col-md-offset-2 ">
			      	<div class="pager">
			          	{{$activities->appends(Request::except('page'))->links()}}
			      	</div>
			    </div>
			</div>
		</div>
	</div>
</div>
@stop
