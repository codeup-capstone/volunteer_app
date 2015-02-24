<!DOCTYPE html>
	<html>
	<head>
	<title>Serve Search</title>
	<meta charset="utf-8">
	<link rel="apple-touch-icon" sizes="57x57" href="/img/logo/favicon.ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/img/logo/favicon.ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/img/logo/favicon.ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/img/logo/favicon.ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/img/logo/favicon.ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/img/logo/favicon.ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/img/logo/favicon.ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/img/logo/favicon.ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/img/logo/favicon.ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/img/logo/favicon.ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/img/logo/favicon.ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/img/logo/favicon.ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/img/logo/favicon.ico/favicon-16x16.png">
	<link rel="manifest" href="/img/logo/favicon.ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/img/logo/favicon.ico/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="description" content="A fast way to give back. A web app developed to help people connect with non profit events in their communities.">

	<!-- BASE CSS ============================================== -->
	<!-- custom build of latest bootstrap see json or follow the link in the file ============================================== -->
	<link href="/bedifferent/theme/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- ASSET CSS (if you are on a secure server remove the http: but not the // it won't work local but will work for both http and httpS ============================================== -->
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="/bedifferent/theme/assets/css/theme-assets.min.css" rel="stylesheet" type="text/css">

	<!-- LOGO FONT, replace with your own ============================================== -->
	<link href="/bedifferent/theme/assets/css/logo-font.css" rel="stylesheet" type="text/css">

	<!-- THEME CSS (unminified TOC version w/purchase) ============================================== -->
	<link href="/bedifferent/theme/assets/css/theme-min.css" rel="stylesheet" type="text/css">

	<!-- SCRIPTS IN HEAD ============================================== -->
	<script src="/bedifferent/theme/assets/js/modernizr.2.8.3.js"></script>

	<!--Custom stylesheet =================================================== -->
	<link rel="stylesheet" type="text/css" href="/stylesheet/customstyle.css">

	

		<!--[if lt IE 9]>
		 <script src="assets/js/respond.min.js"></script>
		 <![endif]-->
	   
	   <!-- +++++++ jQuery library ============================================== -->
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	   <script>
	   if (!window.jQuery) {
	     document.write('<script src="/bedifferent/theme/assets/js/jquery-1.11.1.min.js"><\/script>');
	 }
	 </script>

	<!-- WINDOWS 8 Phones BUG FIX -->
	<script src="/bedifferent/theme/assets/js/windows-fix.js"></script>

	</head>

	<body>
	
	@if(Session::has('errorMessage'))
	<div class="alert alert-danger">{{{ Session::get('errorMessage')}}}</div>

	@endif

	@if(Session::has('successMessage'))
	<div class="alert alert-success">{{{ Session::get('successMessage')}}}</div>

	@endif

	<!-- +++++ No Script Fallback notice +++++ -->
	<noscript>
	    <div>
	      Turn on your JavaScript!
	  </div>
	</noscript>
	<!-- accessibility skip to nav skip content -->
	<ul class="sr-only" id="top">
	  <li><a href="#nav" title="Skip to navigation" accesskey="n">Skip to Navigation</a></li>
	  <li><a href="#page" title="Skip to content" accesskey="c">Skip to Content</a></li>
	</ul>
	<!--  /.sr-only accessibility--> 
	<!-- =============== HEADER ==============================-->
	<header class="header">
	  <div class="header-inner">
	    <!-- :: info :: .header-inner acts like container --> 
	    <!-- #### logo font  -->
	    <div class="logo-brand logo-font">
	      <a href="{{{ action('HomeController@showHome') }}}">
	       	        <img src="/img/logo/taglineLogo.png">

	  </a>
	</div>
	<!-- /.logo-brand-->

	<div class="header-btn-bar hideBorder" >
	  <!-- .menu-toggle --> 
	  <a href="#" class="menu-toggle" data-slide="slide" data-target="#navigation-panel"> 
	    <!-- this above data-slide toggles the #navigation-panel .slide-panel -->
	    <div class="menu-toggle-inner">
	        <span class="veggieburger">
	          <span class="lines">
	          </span>
	      </span>
	      
	      <span class="menu-toggle-text">
	          MENU
	      </span>
	  </div>
	</a> 
	<!-- /.menu-toggle-->
	<div class="hidden-xs hidden-sm header-btn-wrapper clearfix">
	<!-- .header-btn-row-->
	<div class="header-btn-row half-row hideBorder">
	  
		@if (Auth::guest())
			<!-- BEGIN 1st .header-btn .header-btn-xl in first row --> 
			<a href="#" class="login-toggle header-btn header-btn-xl" data-slide="slide" data-target="#login-panel"> <i class="fa fa-sign-in header-icon"></i>
			    <span class="header-btn-text">
			       	Login
			    </span>
			 </a>   
		@else
		 	<a href="/logout" class="login-toggle header-btn header-btn-xl"> <i class="fa fa-sign-out header-icon"></i>
			      <span class="header-btn-text">
			        Logout
			    </span>
			</a> 
		@endif
	<!-- this above data-slide toggles the #login-panel .slide-panel example --> 
	<!-- /END 1st .header-btn .header-btn-xl in first row --> 
	<!-- BEGIN 2nd.header-btn .header-btn-xl in first row --> 
	@if (Auth::guest())
	<a href="#" class="signin-toggle header-btn header-btn-xl" data-slide="slide" data-target="#signup-panel"> <i class="fa fa-pencil header-icon"></i>
	  <span class="header-btn-text">
	    Sign Up
	</span>
	</a> 
	@else
		<a href="{{{ action('UsersController@show', Auth::user()->id) }}}" class="signin-toggle header-btn header-btn-xl"> <i class="fa fa-pencil header-icon"></i>
	  <span class="header-btn-text">
	    View Profile
	</span>
	</a> 
	@endif

	<!-- this above data-slide toggles the #signup-panel .slide-panel example --> 
	<!-- /END 2nd .header-btn .header-btn-xl in first row -->
	</div>
	<!-- /.header-btn-row-->
	<div class="header-btn-row half-row">
	<!-- BEGIN 3rd .header-btn .header-btn-lg in second row --> 
	<a href="#" class="anchor header-btn header-btn-xl" data-slide="slide" data-target="#contact-panel"> <i class="fa fa-at header-icon"></i>
	  <span class="header-btn-text">
	    Contact
	</span>
	</a> 
	<!-- this above data-slide toggles the #contact-panel .slide-panel example --> 
	<!-- /END 3rd .header-btn .header-btn-lg in second row --> 
	<!-- BEGIN 4th .header-btn .header-btn-sm in second row--> 
	<a href="#" class="header-btn header-btn-xl search-toggle" data-slide="slide" data-target="#search-panel" > <i class="fa fa-search header-icon"></i> <span class="header-btn-text">
	    Search
	</span></a> 
	<!-- this above data-slide toggles the #search-panel .slide-panel example -->     
	</div>
	<!-- /END .header-btn-row-->
	<!-- /END .header-btn-row-->
	</div>
	<!-- /END .header-btn-wrapper-->
	</div>
	<!-- /END .header-btn-bar -->

	</div>
	<!-- /END .header-inner --> 
	</header>
	<!-- =============== END HEADER ==============================--> 

	<!-- ================== BEGIN SLIDE OUT PANELS  ================= -->
	<div class="slide-panel-parent">
	<!-- .slide-panel-parent goes around all the panels --> 
	<!-- _____________ NAVIGATION PANEL _______ -->
	<div class="slide-panel" id="navigation-panel">
	<a href="#" class="close ti ti-close"> 
	    <!--themify icon font--> 
	</a>
	<div class="container">
	  <div class="row">
	    <div class="col-md-6 col-lg-8">
	      <!-- _________ BEGIN NAVIGATION ___________ -->
	      <nav id="nav" role="navigation">
	        <ul>
	         	<li class="active"><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
	         
	        <li class="has-children"> <a href="#">Find Events</a>
	        	<ul>
	     		   <li><a href="/activities/6">Fast Find</a></li>
	      		   <li><a href="{{{ action('ActivitiesController@index') }}}">Browse by Event</a></li>
	     		    <li><a href="{{{ action('AgenciesController@index') }}}">Browse Non Profits</a></li>
	        	</ul>
	      </li>         
	      <li><a data-slide="slide" data-target="#contact-panel" href="contact.html">Contact</a></li>
	      
	      @if (Auth::guest())
	      	<!-- BEGIN 1st .header-btn .header-btn-xl in first row --> 
	      	<li><a href="#" data-slide="slide" data-target="#login-panel"> <i class="fa fa-sign-in header-icon"> </i> Sign In</a></li>   
	      @else
		      	<li><a href="{{{ action('UsersController@show', Auth::user()->id) }}}">View Profile</a></li> 
	      @endif

	      @if (Auth::guest())
		      <li><a href="#" data-slide="slide" data-target="#signup-panel">Sign Up</a></li> 
		    
	      @else
	       	<li><a href="/logout">Logout</a></li>   
		     
	      @endif
	      <!-- <li><a data-slide="slide" data-target="#login-panel" href="login.html">Login</a></li> -->
	      <!-- <li><a data-slide="slide" data-target="#signup-panel" href="sign-up.html">Sign Up</a></li> -->
	      	<li><a href="#" class="search-toggle" data-slide="slide" data-target="#search-panel"  data-hover="tooltip" data-placement="left" title="search"> <i class="fa fa-search header-icon"></i></a></li>
	  </ul>
	</nav>
	</div>

	</div>
	<!--/.row -->
	</div>
	<!--/.container inside #navigation-panel -->
	</div>
	<!--/.slide-panel #navigation-panel --> 
	<!-- _________ SEARCH PANEL #search-panel___________ -->
	<div class="slide-panel search" id="search-panel">
	<a href="#" class="close ti ti-close"> 
	    <!--themify icon font--> 
	</a>
	<div class="container">
	  <h3 class="slide-panel-title">Search</h3>

	{{ Form::open(array('action' => 'ActivitiesController@index', 'method' => 'GET')) }}
	{{ Form::text('search', null, array('class' => 'form-group form-control', 'placeholder' => 'Enter your search')) }}
	<button type="submit" class="pull-right btn btn-default"><i class="fa fa-search header-icon"></i></button>
	{{ Form::close()}}

	

	</div>
	<!--/.container -->
	</div>
	<!--/.slide-panel #search-panel --> 
	<!-- _________ CONTACT PANEL ___________ -->
	<div class="slide-panel" id="contact-panel">
	<a href="#" class="close ti ti-close"> 
	    <!--themify icon font--> 
	</a>
	<div class="container">
	  <h2 class="slide-panel-title text-center-md-view">Contact Us</h2>
	  <div class="row">
	    <div class="col-md-6 text-right-md-view text-right-lg-view">
	      <h3>Serve Search</h3>
	      <p class="lead"> 112 East Pecan<br>
	        San Antonio, TX<br>
	        <strong>phone:</strong> <a href="tel:8135551234">214.608.7675</a><br>
	        <strong>fax:</strong> 813.555.1235<br>
	        <span class="overflow">
	        <strong>email:</strong> <a class="link-underline" href="mailto:nomadjeff@gmail.com">nomadjeff@gmail.com</a><br>
	        <strong>email:</strong> <a class="link-underline" href="mailto:paulqlove@gmail.com">paulqlove@gmail.com</a><br>
	        <strong>email:</strong> <a class="link-underline" href="mailto:david.runnels@gmail.com">david.runnels@gmail.com</a>
	      </span>
	  </p>
	</div>
	<!-- /.col-md-6 -->

	<div class="col-md-6">
	  <h3>Find Us On...</h3>
	  <ul class="social-icon-list">
	    <li><a href="#"><i class="fa fa-fw fa-2x fa-github"></i></a></li>
	</ul>
	</div>
	<!-- /.col-md-6 -->

	</div>
	<!--/.row -->
	</div>
	<!--/.container -->
	</div>
	<!--/.slide-panel #contact-panel --> 
	<!-- _________ LOGIN PANEL #login-panel ___________ -->
	<div class="slide-panel" id="login-panel">
	<a href="#" class="close ti ti-close"> 
	    <!--themify icon font--> 
	</a>
	<div class="container">
	  <h2 class="slide-panel-title">Login</h2>
	  <div class="row">
	    <div class="col-md-6">
	        <h4 class="no-margin-top">Social Login</h4>
	        <ul class="list-unstyled social-user">
	        	<li><a href="#" title="Login with Facebook" class="facebook"><i class="fa fa-facebook"></i>
	    	    	<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
	        		</fb:login-button>

	        	<div id="status">
	        	</div>
	         	<span>
	       			Login with Facebook
	        	</span>
	    </a></li>
	    <li><a href="#" title="Login with Google Plus" class="google"><i class="fa fa-google-plus"></i>
	      <span>
	        Login with Google
	    </span>
	</a></li>
	</ul>
	<!-- /.social-user -->
	</div>
	<!-- /.col-*-6 -->
	<div class="col-md-6">
	<h4 class="no-margin-top">Sign In</h4>
	{{ Form::open(array('url' => 'login')) }}
	{{--{{ Form::open(array(action('HomeController@doLogin'))) }} --}}

	{{--Form::label('email', 'eMail Address'--}}
	{{ Form::email('email', Input::old('email'), array('class' => 'form-control form-control-lg form-group', 'placeholder' => 'Enter email')) }}

	{{--Form::label('password', 'Password')--}}
	{{ Form::password('password', array('class' => 'form-control form-control-lg form-group', 'placeholder' => 'Password')) }}

	{{-- Form::checkbox('agree', 1, null, array('class' => 'form-group checkbox small')) --}}

	{{ Form::submit('Sign in', array('class'=> 'btn btn-slide-panel btn-lg btn-block', 'type' => 'submit')) }}
	<!-- <i class="ti ti-lock"></i> -->

	{{ Form::close() }}
	<p class="text-center clear"><a href="#" data-slide="slide" data-target="#forgot-password-panel" class="link-underline">Forgot your password?</a> <br>
	Don't have an account yet? <a class="link-underline signin-toggle" href="#" data-slide="slide" data-target="#signup-panel">Sign up</a> </p>
	</div>
	<!-- /.col-*-6 -->
	</div>
	<!-- /.row -->
	</div>
	<!-- /.container -->
	</div>
	<!--/.slide-panel #login-panel --> 
	<!-- _________ SIGNUP PANEL #signup-panel ___________ -->
	<div class="slide-panel" id="signup-panel">
	<a href="#" class="close ti ti-close"> 
	    <!--themify icon font--> 
	</a>
	<div class="container">
	  <h2 class="slide-panel-title">Sign In</h2>
	  <div class="row">
	    <div class="col-md-6">
	      <h4 class="no-margin-top">Sign Up with...</h4>
	      <ul class="list-unstyled social-user">
	        <li><a href="#" title="Signup with Facebook" class="facebook"><i class="fa fa-facebook"></i>
	        <span>
	         	Signup with Facebook
	        </span>
	    </a></li>
	    <li><a href="#" title="Signup with Google Plus" class="google"><i class="fa fa-google-plus"></i>
	      <span>
	        Signup with Google
	    </span>
	</a></li>
	</ul>
	<!-- /.social-user -->
	</div>
	<!-- /.col-*-6 -->
	<div class="col-md-6">
	<h4 class="no-margin-top">Sign Up</h4>
	<form role="form" action="{{{ action('UsersController@create') }}}">
	<div class="form-group">
	  <input type="email" class="form-control form-control-lg" placeholder="Enter email">
	</div>
	<div class="form-group">
	  <input type="password" class="form-control form-control-lg" placeholder="Password">
	</div>
	<p class="text-center">
	  <button class="btn btn-slide-panel btn-lg btn-block" type="submit"><i class="ti ti-lock"></i> Register</button>
	</p>
	</form>
	<p class="text-center clear">Already have an account? <a class="link-underline login-toggle" href="#" data-slide="slide" data-target="#login-panel">Login</a></p>
	</div>
	<!-- /.col-*-6 -->
	</div>
	<!-- /.row -->
	</div>
	<!-- /.container -->
	</div>
	<!--/.slide-panel #signup-panel --> 
	<!-- _________ FORGOT PASSWORD #forgot-password-panel ___________ -->
	<div class="slide-panel" id="forgot-password-panel">
	<a href="#" class="close ti ti-close"> 
	    <!--themify icon font--> 
	</a>
	<div class="container">
	  <h3 class="slide-panel-title">Forgot Password</h3>
	  <form role="form" action="your-script.php">
	    <div class="input-group input-group-lg input-group-slide-panel">
	      <input class="form-control" placeholder="Your@EmailAddress.com" type="email">
	      <span class="input-group-btn">
	        <button type="submit" class="btn btn-slide-panel btn-lg">Reset Password</button>
	    </span>
	    <!--/.input-group-btn-->
	</div>
	</form>
	<hr class="vertical-spacer height-20px">
	<p class="text-center"><a href="#" data-slide="slide" data-target="#login-panel" class="link-underline login-toggle">Remembered your Password?</a></p>
	</div>
	<!-- /.container -->
	</div>
	<!--/.slide-panel #forgot-password-panel -->
	</div>
	<!-- END .slide-down-parent --> 
	<!-- ================== END SLIDE OUT PANELS  ================= --> 
	<!--	@yield('posts') -->
	@yield('content')
	<!-- _________ GO TO TOP ___________ --> 
	<a id="go-to-top" href="#top" title="up"> <i class="ti ti-arrow-up"></i> </a> 
	<!-- ================== FOOTER ================= -->
	<footer class="footer">
	  <div class="footer-column-wrapper">
	    <div class="container">
	      <div class="row footer-row equal-height-col">
	        <div class="col-sm-5 col-md-3 footer-col">
	          <h4 class="footer-title">Github</h4>
	          <ul class="social-icon-list">

	            <li><a href="https://github.com/codeup-capstone/volunteer_app"><i class="fa fa-fw fa-2x fa-github"></i></a></li>

	          </ul>
	        </div>
	        <!-- /.col-sm-5 .col-md-3 footer-col -->
	        <div class="col-sm-7 col-md-9 footer-col">
	          <h4 class="footer-title">About Us</h4>
	          <p>The Serve Search Team believes giving your time to make your community and world a better place should be easy.  We love on demand movies, one-click shopping and the convience of our "get it now" culture.  We think volunteering should be just as easy! Learn more about our team. <a href="{{{ action('HomeController@showAboutUs') }}}"><i class="fa fa-users"></i></p>
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
	        All rights reserved. </p>
	    </div>
	  </div>
	  <!--/.footer-copyright--> 
	</footer>
	<!-- ================== /.END footer ================= --> 

	<!-- _________ FOOTER SCRIPTS  ________ --> 
	<script src="/bedifferent/theme/assets/js/jquery.touch-swipe.js"></script> <!-- adds touch swipe to the theme's bootstrap carousel --> 
	<script src="/bedifferent/theme/assets/js/bootstrap.min.js"></script> <!-- bootstrap's js --> 
	<script src="/bedifferent/theme/assets/js/jquery.bootstrap.addon.js"></script><!-- initializations and custom scripts for bootstrap --> 
	<script src="/bedifferent/theme/assets/js/jquery.magnific-popup.js"></script><!-- image popups, video, modals, etc., contains the initializations --> 
	<script src="/bedifferent/theme/assets/js/jquery.slick-slider.min.js"></script> <!-- base carousel/slider SLICK SLIDER --> 
	<script src="/bedifferent/theme/assets/js/jquery.isotope.masonry.js"></script> <!-- Isotope w/Masonry also contains the initializations --> 
	<script type="text/javascript" src="/assets/js/capstone.js"></script>
	<script src="/bedifferent/theme/assets/js/jquery.main.js"></script> <!-- CORE scripts and initializations --> 
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
	</body>
</html>