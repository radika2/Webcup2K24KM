<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Login</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon-16x16.png"')}}>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/font/font-awesome.min.css')}}"> --}}

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
	{{-- top bar ici --}}
    @include('templates.topbar')
	@yield('contenu')
	<!-- js -->
    <script src="{{asset('assets/js/core.js')}}"></script>
	<script src="{{asset('assets/js/script.min.js')}}"></script>
	<script src="{{asset('assets/js/process.js')}}"></script>
	<script src="{{asset('assets/js/layout-settings.js')}}"></script>
	<script src="{{asset('assets/js/apexcharts.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('assets/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('assets/js/dashboard.js')}}"></script>
</body>
</html>
