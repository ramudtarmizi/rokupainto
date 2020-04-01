<header id="gheader" class="">
	<h1>
		<a href="{{ route('index', app()->getLocale()) }}">
			<img src="{{ asset('img/onemake/logo/logo.png') }}" alt="onemake">
		</a>
	</h1>
	<button class="menu_btn" type="button">
		<b><span></span><span></span><span></span></b>
	</button>
	<nav class="clearfix h_nav_box">
		<div class="in_relative">
			<div class="in_center h_nav">
				<ul class="cate_l">
					<li>
						<a href="{{ route('home', app()->getLocale()) }}">
							{{strtoupper(trans('home.title')) }}
						</a>
					</li>
					<li>
						<a href="{{ route('about', app()->getLocale()) }}">
							{{ strtoupper(trans('about.title')) }}
						</a>
					</li>
					<li>
						<a href="{{ route('service', app()->getLocale()) }}">
							{{ strtoupper(trans('service.title')) }}
						</a>
					</li>
					<li>
						<a href="{{ route('product', app()->getLocale()) }}">
							{{ strtoupper(trans('product.title')) }}
						</a>
					</li>
					<li>
						<a href="{{ route('contact', app()->getLocale()) }}">
							{{ strtoupper(trans('contact.title')) }}
						</a>
					</li>
				</ul> {{-- <ul class="cate_l"> --}}
			</div> {{-- <div class="in_center h_nav"> --}}
		</div> {{-- <div class="in_relative"> --}}
	</nav> {{-- <nav class="clearfix h_nav_box"> --}}
	<div class="pclang pc">
		<ul id="h_lang_" class="h_lang_ clearfix">
			<li class="">
				<a href="{{ url('/id'.str_replace(Request::segment(1),'',Request::path())) }}">
					{{ strtoupper('id') }}
				</a>
			</li>
			<li class="">
				<a href="{{ url('/en'.str_replace(Request::segment(1),'',Request::path())) }}">
					{{ strtoupper('en') }}
				</a>
			</li>
			<li class="">
				<a href="{{ url('/jp'.str_replace(Request::segment(1),'',Request::path())) }}">
					{{ strtoupper('jp') }}
				</a>
			</li>
		</ul>
	</div> {{-- <div class="pclang pc"> --}}
</header> {{-- <header id="gheader" class=""> --}}