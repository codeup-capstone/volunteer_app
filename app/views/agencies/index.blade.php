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

      <div class="row no-gutters">
         
              
             <div class="row" id="tableTitle">
                <div class="col-md-12"><!-- title -->
                  <div class="text-center ">
                    <h3>NON PROFITS IN YOUR AREA</h3>
                  </div>
                </div><!-- title -->
             </div>

             <div class="row no-gutters"> <!-- main section -->
             	<div class="col-md-12">
             	
	                <div class="col-md-9">
	             		<table class="table table-striped table-hover raised" id="clickableRow">
	             		    <tr class="tableHeader">
                        <th class="hidden">&nbsp</th> 
	             		    	<th>Agency</th>
	             		    	<th>Address</th>
	             		    	<th>Category</th>
	             		    	
	             		    </tr> 

	             					@forelse ($agencies as $agency)
	             					<tr>
                          <td class="hidden" > <a href="{{{ action('AgenciesController@show', $agency->id) }}}"></a></td>
	             						<td><img  class="logoHeight smLogo" src="/img/agency/{{{ $agency->image_name }}}"></td>
	             						<td data-hover="tooltip" data-placement="bottom" title="Click For More Information" >
	             							
	             							{{{ $agency->name }}}</a><br>
	             							{{{ $agency->address }}}<br>
	             							{{{ $agency->city }}}, {{{ $agency->state }}} {{{ $agency->zip }}}	             						
	             						</td>
	             							<td>{{{ $agency->category->category }}}</td>
	             						</tr>
	             					@empty
	             					{{{ "Search not found on the site." }}}
	             					@endforelse
	             		</table>
	                  </div>   
                    <div class="col-md-3 static" id="colFullheight">                     
                            <div class="column-inner column-featured text-center">                            
                            	<p> <a class="btn btn-featured btn-md buttonStyle raised" href="{{{ action('HomeController@showHome') }}}"> HOME</a></p>      
                            </div>
                            <div class="column-inner column-featured text-center">
                                <h1> <a class="btn btn-featured btn-lg buttonStyle raised" href="/activities/6">Quick Finder</a> </h1>      
            				        </div>
                    </div>
                           <!--/.column-inner .column-featured-->
                  </div>
                          
              </div> <!-- sidebar buttons to go home or random event  -->
          </div> <!-- main section and table -->
       </div>               
  
            
        
      
       
      <!-- / .container -->
      </div>
     </div>
    
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->


<!-- ================== END #page ================= --> 




@stop
