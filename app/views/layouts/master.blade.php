<!DOCTYPE html>
<html>
	<head>
		<title>Team AfterNoon Delight</title>
		<meta charset="utf-8">
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
		<!--	@yield('posts') -->
			@yield('content')

	</body>
</html>