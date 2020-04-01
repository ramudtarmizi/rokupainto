<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="cms-pg-top">
	<head>
		<!-- meta -->
		@include('fe.meta')
		<!-- libs css -->
		<link rel="stylesheet" type='text/css' href="{{ asset('css/fe/font.min.css') }}" />
		<link rel="stylesheet" type='text/css' href="{{ asset('css/fe/common.min.css') }}" />
		<link rel="stylesheet" type='text/css' href="{{ asset('css/fe/about.min.css') }}" />
		<link rel="stylesheet" type='text/css' href="{{ asset('plugins/fe/fancybox/jquery.fancybox.css') }}" />
		<link rel='stylesheet' type='text/css' href="{{ asset('themes/fe/basic/styleb578.min.css?ver=20171214') }}" id='theme-style-css' media='all' />
		<link rel="stylesheet" type='text/css' href="{{ asset('plugins/fe/fontawesome/css/all.min.css') }}" />
		<style type="text/css">.broken_link, a.broken_link{text-decoration: line-through;}</style>
	</head> {{-- <head> --}}
	<body class="about_en header_white">
		<!-- section header -->
		@include('fe.header')
		<!-- section content -->
		@yield('about')
		<!-- section contact -->
		@include('fe.pages.contact.shortcut')
		<!-- section footer -->
		@include('fe.footer')
		<!-- libs js -->
		<script type="text/javascript" src="{{ asset('plugins/fe/jquery/jquery-1.9.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/TweenMax.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/jquery/jquery.mobile.custom.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/background-check.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/jquery/jquery.cookie.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/jquery/jquery.lazyload.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/fe/common.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/fe/about.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/jquery/jquery.matchHeight.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/fancybox/jquery.fancybox.pack.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/vanta/vendor/three.r92.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/vanta/dist/vanta.net.min.js') }}"></script>
		<script src="{{ asset('plugins/fe/vanta/dist/vanta.net.min.js')}}"></script>
		<!-- <script>
		VANTA.NET({el: ".pageTitle",  
				color: 0x7013,
  				backgroundColor: 0xebe9ed,
  				points: 9.00,
  				opacity : 0.5,
  				maxDistance: 19.00})
		</script> -->
</script>

	</body> {{-- <body class="about_en header_white"> --}}

</html> {{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="cms-pg-top"> --}}