<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app('translator')->getLocale()) }}">
	<head>
		{{-- section meta --}}
		@include('sections.meta')
        {{-- libs css --}}
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700|Playfair+Display:400,400italic,700,700italic,900,900italic|Roboto:400,100,400italic,300italic,300,100italic,500,700,500italic,900italic,900,700italic|Roboto+Condensed:400,300,300italic,700italic,700,400italic">
		<link rel="stylesheet" href="{{ mix('/assets/css/mix-about.min.css') }}" />
		 <!-- <link rel="stylesheet" href="{{ url('/assets/css/original/about.css') }}" />  -->
		<style type="text/css">
			.broken_link, a.broken_link {text-decoration: line-through;}
		</style>
	</head>
	<body class="">
		{{-- section header --}}
		@include('sections.header')
		{{-- section content --}}
		@yield('about')
		{{-- section contact --}}
		@include('pages.contact.shortcut')
		{{-- section footer --}}
		@include('sections.footer')
		{{-- libs js --}}
		<script src="{{ mix('/assets/js/mix-about.min.js') }}"></script>
	</body>
</html>