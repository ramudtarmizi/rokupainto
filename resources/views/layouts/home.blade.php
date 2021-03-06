<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app('translator')->getLocale()) }}">
	<head>
		{{-- section meta --}}
		@include('sections.meta')
        {{-- libs css --}}
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700|Playfair+Display:400,400italic,700,700italic,900,900italic|Roboto:400,100,400italic,300italic,300,100italic,500,700,500italic,900italic,900,700italic|Roboto+Condensed:400,300,300italic,700italic,700,400italic">
		<link rel="stylesheet" href="{{ mix('/assets/css/mix-home.min.css') }}" />
		<style type="text/css">
			.broken_link, a.broken_link {text-decoration: line-through;}
		</style>
	</head>
	<body class="">
		{{-- section header --}}
		@include('sections.header')
		{{-- section content --}}
		@yield('home')
		{{-- section contact --}}
		@include('pages.contact.shortcut')
		{{-- section footer --}}
		@include('sections.footer')
		{{-- libs js --}}
		<script src="{{ mix('/assets/js/mix-home.min.js') }}"></script>

		<script type="text/javascript">
			// VANTA.NET({
			// 		el: "#top_content",
			//		points: 20.00,
			//		spacing: 20.00,
			//		color: 0x005E48,
			//		maxDistance: 20.00,
			//		backgroundColor: 0x555555
			// });
			VANTA.BIRDS({
				el: "#top_content",
				mouseControls: true,
				touchControls: true,
				minHeight: 200.00,
				minWidth: 200.00,
				scale: .50,
				scaleMobile: .50,
				backgroundColor: 0x555555,
				color1: 0x005E48,
				color2: 0x005E48,
				colorMode: "lerpGradient",
				birdSize: 2.00,
				wingSpan: 20.00,
				speedLimit: 5.00,
				separation: 50.00,
				alignment: 50.00,
				cohesion: 50.00,
				backgroundAlpha: 0.5
			})
		</script>
	</body>
</html>