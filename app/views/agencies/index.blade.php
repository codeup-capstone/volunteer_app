@extends('layouts.master')

@section('content')

<div id="page">
  	<div class="page-content" role="main">
    	<div class="container no-gutters">
    		<div class="row no-gutters">
             	<div class="row" id="tableTitle">
                	<div class="col-md-12">
                  		<div class="text-center ">
                    		<h3>NON PROFITS IN YOUR AREA</h3>
                  		</div>
                	</div>
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
		             			<td>	
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
                            <h1> <a class="btn btn-featured btn-lg buttonStyle raised" href="/activities/6">FAST FIND</a> </h1>      
                       </div>
                        <div class="column-inner column-featured text-center">                            
                            <h1> <a class="btn btn-featured btn-lg buttonStyle raised" href="{{{ action('HomeController@showHome') }}}"> HOME</a></h1>      
                        </div>
                    </div>
                </div>
            </div>
        	</div>
    	</div>
    </div>
</div>
    
@stop
