<html lang="{{ app()->getLocale() }}">
<head>
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" type="text/css" href="{{URL::to('css/app.css')}}">
	 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
@include('inc.navbar')

<div class="container">
	@if(Request::is('/'))
		@include('inc.showcase')
	@endif
	<div class="row">
		<div class="col-md-8 col-lg-8">
			@include('inc.message')
			@yield('content')
		</div>
		@if(Request::is('login','password/reset','register'))
		@else
		<div class="col-md-4 col-lg-4">			
			@include('inc.sidebar')
		</div>
		@endif

	</div>

</div>

<footer id="footer" class="text-center">
	<p>Copyright 2018 &copy; Acme</p>
</footer>

</body>
</html>