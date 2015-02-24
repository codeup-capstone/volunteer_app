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
		     	  	<table class="table table-striped table-hover raised">
                        <tr>
                          	<th>Reviewed By</th>
                          	<th>Review Date</th>
                          	<th>Review</th> 
                        </tr>
                      		@foreach ($agency->reviews as $review)
		                        <tr>
			                        <td >{{ $review->user->first_name }}</td>
			                        <td>{{{ date('F d, Y',strtotime($review->review_date)) }}}</td>
		                          	<td>{{{ $review->headline }}}</td>
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
	  		         		<h1> <a class="btn btn-featured btn-lg buttonStyle raised"  href="{{ action('ActivitiesController@showRandom')}}">Fast Finder</a> </h1>      
	  		         	</div>
	  		       		@if ($agency->users->contains(Auth::user()))
	  		       		<div class="column-inner column-featured text-center">
	  		         		<h1> <a class="btn btn-featured btn-lg buttonStyle raised"  href="{{ action('ActivitiesController@create')}}">Create Event</a> </h1>      
	  		         	</div>
						@endif
	  		      	</div>
	  		    </div>
	  		</div>
  		
			<div class="row">
			  	<div class="col-md-8 col-md-offset-2 ">
			      	<div class="pager">
			          	{{$reviews->links()}}
			      	</div>
			    </div>
			</div>
		</div>
	</div>
</div>
@stop
