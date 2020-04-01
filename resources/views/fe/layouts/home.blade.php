<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="cms-pg-top">
	<head>
		<!-- meta -->
		@include('fe.meta')
		<!-- libs css -->
		<link rel="stylesheet" type='text/css' href="{{ asset('css/fe/font.min.css') }}" />
		<link rel="stylesheet" type='text/css' href="{{ asset('css/fe/common.min.css') }}" />
		<link rel="stylesheet" type='text/css' href="{{ asset('plugins/fe/slick/slick.min.css') }}" />
		<link rel="stylesheet" type='text/css' href="{{ asset('css/fe/index.min.css') }}" />
		<link rel='stylesheet' type='text/css' href="{{ asset('themes/fe/basic/styleb578.min.css?ver=20171214') }}" id='theme-style-css' media='all' 
		/>
		<link href="{{ asset('css/fe/hover-min.css') }}" rel="stylesheet" media="all">
		<style type="text/css">.broken_link, a.broken_link{text-decoration: line-through;}</style>
	</head> {{-- <head> --}}
	<body id="body" class="">
		{{-- section header --}}
		@include('fe.header')
		{{-- section content --}}
		@yield('home')
		{{-- section contact --}}
		@include('fe.pages.contact.shortcut')
		{{-- section footer --}}
		@include('fe.footer')
		{{-- libs js --}}
		<script type="text/javascript" src="{{ asset('plugins/fe/jquery/jquery-1.9.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/TweenMax.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/jquery/jquery.mobile.custom.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/background-check.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/jquery/jquery.cookie.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/jquery/jquery.lazyload.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/fe/common.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/lazysizes.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/slick/slick.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/jquery/jquery.shuffleLetters.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/fe/index.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/fe/desvg.min.js') }}" type="text/javascript"></script>
		<script type="text/javascript" src="{{ asset('themes/fe/basic/script.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/vanta/vendor/three.r92.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/fe/vanta/dist/vanta.net.min.js') }}"></script>
		<script src="{{ asset('plugins/fe/vanta/dist/vanta.birds.min.js')}}"></script>
		<script>
		VANTA.NET({el: "#top_content" ,
			      mouseControls: true,
				  touchControls: true,
				  minHeight: 200.00,
				  minWidth: 200.00,
				  scale: 1.00,
				  scaleMobile: 1.00,
				  points: 8.00,
				  maxDistance: 25.00,
				  spacing: 19.00
		// 	,backgroundColor: 0x7192f,
		// color1: 0x0,color2: 0xcfe8d5,birdSize: 1.00,wingSpan: 32.00,
		// separation: 43.00,alignment: 25.00,cohesion: 29.00,
		// backgroundAlpha: 0.15
		})
		</script>
	</body> {{-- <body id="body" class=""> --}}
</html> {{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="cms-pg-top"> --}}