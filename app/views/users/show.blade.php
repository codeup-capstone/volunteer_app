@extends('layouts.master')

@section('content')

	

<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container no-gutters">
      
      <!-- .container for entire page --> 

	       <div class="col-md-9 ">       
	       		<div class="post person"> <!-- profile info bar -->           	
 				   <div class="col-md-3 embed-responsive-4by3 img-size img-size-mobile">
 				   		<div class="image">
							@if(!empty($user->image_url))
 		             			<a  href="{{{ action('UsersController@edit', $user->id) }}}" ><img class="img-size" src="{{{ $user->image_url }}}" data-hover="tooltip" data-placement="left" title="Click to Edit Profile"></a>
 		             			
     		             	@else 
     		             		<a href="{{{ action('UsersController@edit', $user->id) }}}"><img class="img-size" src="/img/user/placeholder.jpg"></a>
     		             	@endif 
 				   		</div>
 		   	       </div><!--div for profile picture -->


		     		<div class="section">
				        <div class="half-row col-md-9 no-gutters">
			             	<div class="equal-height-title column-inner raised ">
			             		<h3 class="text-center">{{{$user->first_name." ".$user->last_name}}}</h3>
			             		
					   	        	<nav id="nav" class="fix-left-indent" role="navigation">
							            <ul>
							              <li class="active has-children raised"><a href="#"> Profile Summary</a>
							              
							                  <!-- <li class="has-children"> <a href="#">Find Events</a> -->
							                    <ul class="dropmenuItems">
							                      
							                      <li><span>Address:</span> {{{$user->city}}}</li>
							                      <li><span>Number:</span> {{{ preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $user->phone) }}}</li>
							                      <li><span>Email:</span> {{$user->email}}</li>
							                      <li><span>Tagline:</span> {{$user->profile}}</li>
							                      <li>{{{ $user->first_name }}} joined {{{ $user->created_at->diffForHumans() }}}</li>
							                    </ul>
							               </li>          
							              
							            </ul> <!-- summary of USER PROFILE -->
						          	</nav>
							   	</div>
				         
			             	</div><!-- USER NAME-->
				        </div>  <!-- top half row section-->   
	         		</div><!-- left third of profile infobar --> 
	   

	    	<div class="col-md-12 no-gutters">
		     <div class="row no-gutters">

	    		<div class="col-md-12 ">	
			     		<table class="table table-striped table-hover raised" id="clickableRow">
	             		    <tr class="text-center">
	             		    	<th class="hidden">&nbsp</th> 
	             		    	<th>Agency</th>
	             		    	<th>Event Date</th>
	             		    	<th>Contact</th>
	             		    	
	             		    </tr>

	             				@foreach($user->activities as $activity)
         					<tr class=" raised">
         							<td class="hidden"><a href="{{{ action('ActivitiesController@show', $activity->id) }}}">></a></td>
	         						<td>{{{ $activity->name }}}</a></td>
	         						<td>{{{ date('D, M d',strtotime($activity->event_date)) }}}</td>
         							<td>{{{ $activity->contact_name }}}</a></td>
	             			</tr>			
	             				@endforeach
	             		</table>
		     		</div><!-- table of events -->
	      		</div><!-- row that contains rsvp and all data -->
		        <!--/.col-x-x-->
		        
		      	<!-- VERTICAL SPACING -->
		      
		    	<!-- / .container -->
   			</div> 
		   </div>             	
		     

		    <div class="col-md-3" >

		    	<div class=" column-inner column-featured text-center">
		    		<h3><a class="btn btn-featured btn-lg buttonStyle raised"  href="{{{ action('ActivitiesController@showRandom') }}}">Quick Connect</a></h3>
		    	</div>
			 	<div class=" column-inner column-featured text-center">
		    		<h3><a class="btn btn-featured btn-lg buttonStyle raised" href="{{{ action('HomeController@showHome') }}}">Home</a></h3>	 
		    	</div>
    			<div class="column-inner column-featured text-center">
    			  <h1> <a class="btn btn-featured btn-lg buttonStyle raised"  href="{{{ action('UsersController@edit', $user->id) }}}">Edit Profile</a> </h1>      
    			</div>
		    </div><!-- single sidebar section--> 

  		</div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->
	</div>
</div>
<!-- ================== END #page ================= --> 

@stop
