<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>{{Softadmin::setting('admin_title')}} - {{Softadmin::setting('admin_description')}}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="csrf-token" content="<?= csrf_token() ?>"/>
	@yield('meta')

	<!-- STYLESHEETS
	===============================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/bootstrap-theme.css"/>
	<link rel="stylesheet" type="text/css" href="{{ URL::to(config('softadmin.assets_path')) }}/css/style.css"/>
	<!-- Favicon -->
	<link rel="icon" href="favicon.ico" type="image/x-icon">
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
			@yield('main_menu')
		</div>
		<!-- MENU END           
		===============================================================-->

		<div class="clearfix"></div>

		<!-- PAGE HEADER BEGIN
		===============================================================-->
		<div class="row">
			@yield('page_header')
		</div>
		<!-- PAGE HEADER END
		===============================================================-->

		<!-- PAGE MAIN CONTAINER BEGIN
		===============================================================-->
		<div class="row">
			<div class="container">

				<!-- LEFT SIDE BEGIN           
				===============================================================-->
				<div class="col-md-12">
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
						@yield('related_posts')
						<!-- RELATED POSTS END					
						===============================================================-->
					</div>
				</div>
			    <!-- LEFT SIDE END           
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