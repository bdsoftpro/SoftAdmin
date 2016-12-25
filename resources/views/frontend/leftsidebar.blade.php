<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>{{Softadmin::setting('admin_title')}} - @yield('secondary_title')</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="csrf-token" content="<?= csrf_token() ?>"/>
	<meta name="description" content="" />
    <meta name="author" content="" />
	@yield('meta')

	<!-- STYLESHEETS
	===============================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/bootstrap-theme.css"/>
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/style.css"/>
	<!-- Favicon -->
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- Menuzord Css -->
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/menuzord.css"/>
	<!-- Fonts Css -->
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/fonticons/flaticon.css"/>
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/font-awesome.min.css"/>	
	<!-- OWL Carousel Css -->
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/owl-carousel/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/owl-carousel/owl.theme.css"/>	
	<!-- Sinister Hover Effects Css -->
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/snister-hover-effects/sinister.css"/>
	<!-- Magnific Popup Css -->
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/magnific-popup.css"/>
	<!-- CSS Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400italic" rel="stylesheet" type="text/css"/>
	@yield('css')

	@yield('head_javascript')
</head>
<body>
	<div class="col-lg-12">
		<!-- MENU BEGIN           
		===============================================================-->
		<div class="row">
			<div class="bg-white minti-navbar menuzord-dark">
				<div class="container">
					<div class="col-lg-12">
						<div id="menuzord" class="menuzord menuzord-responsive padding-0">
							<a href="index-2.html" class="menuzord-brand"><img src="images/logo/logo.png" alt=""/></a>
							@yield('main_menu')
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- MENU END           
		===============================================================-->

		<div class="clearfix"></div>

		<!-- PAGE HEADER BEGIN
		===============================================================-->
		<div class="row">
			<div class="page-header-one">
				<div class="container">
					<div class="col-lg-12">
						@yield('page_header')
					</div>
				</div>
			</div>
		</div>
		<!-- PAGE HEADER END
		===============================================================-->

		<!-- PAGE MAIN CONTAINER BEGIN
		===============================================================-->
		<div class="row">
			<div class="container">

				<!-- LEFT SIDE BEGIN           
				===============================================================-->
				<div class="col-md-8">
					<div class="row">
						<!-- STANDART POST BEGIN           
						===============================================================-->
			    		@yield('content')
			    		<!-- STANDART POST END           
						===============================================================-->

						<div class="clearfix"></div>

						<!-- PAGINATION
						===============================================================-->
						@yield('pagination')
						<!-- PAGINATION END
						===============================================================-->

						<!-- RELATED POSTS BEGIN					
						===============================================================-->
						<h3 class="header-title-center">Related Posts</h3>
						<div id="owl-carousel">
							@yield('related_posts')
						</div>
						<!-- RELATED POSTS END					
						===============================================================-->
					</div>
				</div>
			    <!-- LEFT SIDE END           
				===============================================================-->

				<!-- RIGHT SIDEBAR BEGIN           
				===============================================================-->
				<div class="col-md-4 Sidebar">		 
					<div class="theiaStickySidebar"> 				
						<div class="row">
			    			@yield('sidebar')
			    		</div><!--row-->
					</div><!--Sticky Sidebar-->
				</div><!--md-4 (Sidebar End)-->
			    <!-- RIGHT SIDEBAR END           
				===============================================================-->

	    	</div><!--container-->
		</div>
	    <!-- PAGE MAIN CONTAINER END
	    ===============================================================-->

	    <div class="clearfix"></div>
	    <!-- FOOTER BEGIN           
		===============================================================-->
		<div class="row footer margin-top-30">		
			<div class="container">
	    		@yield('footer_widget')
	    	<div class="clearfix"></div>	
			</div><!-- Container -->			
		</div>
	    @yield('footer')
	    <!-- FOOTER END           
		===============================================================-->
	    @yield('footer_css')
	    @yield('footer_javascript')
    </div>
</body>
</html>