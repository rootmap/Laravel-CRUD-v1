
<!doctype html>
<html lang="en">

<head>
	<title>Multi GYM Plus | @yield('title',' | Admin Panel')</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">



	@include('admin.extra.core.header')
	<style type="text/css">
		.details-text h4 {
		    margin: -18px 0px 0px 0px;
		    border-bottom: 1px solid #cccccc;
		    padding: 10px 0 5px 0;
		}
		
		.breadcrumb{
			border-radius: 50px;
		    padding: 10px 25px;
		    margin: 0px 0px 0px 0px;
		    background-color: #ededed;
		    font-weight: bold;
		}

		.heading-messages h3 {
		    margin: 16px 0px 18px 10px;
		}

		.box .tools-btns {
		    margin: 20px 20px 20px 0px;
		}

		.box .add-new {
		    margin: 20px 0 20px 20px;
		}
	</style>
	@yield('css')


</head>

<body>

	<!-- ===========wrapper============= -->
	<div class="wrapper">

		<!-- ===========Top-Bar============= -->
		@include('admin.extra.core.topbar')		
		<!-- End top-bar -->

		<!-- =========== sidebar-left ============= -->
		@include('admin.extra.core.side-bar')	
		<!-- End sidebar-left -->

		<!-- ===========Innerpage-wrapper============= -->
		@yield('content')
		
		<!-- ===========End Innerpage-wrapper============= -->

	</div><!-- end wrapper -->

	<!-- Optional JavaScript, Not optional it's need too -->
	@include('admin.extra.core.fotter')
	@yield('js')

</body>

</html>