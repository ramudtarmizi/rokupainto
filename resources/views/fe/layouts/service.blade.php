<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="cms-pg-top">
	<head>
		<!-- meta -->
		@include('fe.meta')
		<!-- libs css -->
		<link rel="stylesheet" type='text/css' href="{{ asset('css/fe/font.min.css') }}" />
		<link rel="stylesheet" type='text/css' href="{{ asset('css/fe/common.min.css') }}" />
		<link rel="stylesheet" type='text/css' href="{{ asset('plugins/fe/slick/slick.min.css') }}" />
		<link rel="stylesheet" type='text/css' href="{{ asset('css/fe/service.min.css') }}">
		<link rel='stylesheet' type='text/css' href="{{ asset('themes/fe/basic/styleb578.min.css?ver=20171214') }}" id='theme-style-css' media='all' />
		<link rel="stylesheet" type='text/css' href="{{ asset('plugins/fe/fontawesome/css/all.min.css') }}" />
		<style type="text/css">.broken_link, a.broken_link{text-decoration: line-through;}</style>
	</head> {{-- <head> --}}
	<body id="body" class="">
		<!-- section header -->
		@include('fe.header')
		<!-- section content -->
		@yield('service')
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
		<script type="text/javascript" src="{{ asset('plugins/fe/lazysizes.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/slick/slick.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/fe/service.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/fe/service_detail.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('themes/fe/basic/script.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/vanta/vendor/three.r95.min.js') }}"></script>
		<script src="{{ asset('plugins/fe/vanta/dist/vanta.net.min.js')}}"></script>
		<!-- <script>
		VANTA.NET({el: ".top_title",color: 0x7013,
  				backgroundColor: 0xebe9ed,
  				points: 9.00,
  				maxDistance: 19.00})
		</script> -->
		</body> {{-- <body id="body" class=""> --}}
</html> {{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="cms-pg-top"> --}}