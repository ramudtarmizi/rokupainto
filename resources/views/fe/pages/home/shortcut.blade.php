<div id="top_content" class="clearfix">
	<article id="service_index">
		<div class="tc hvr-sweep-to-right">
			<a href="{{ route('product', app()->getLocale()) }}" class="">
				<h1>{{ strtoupper(trans('home.product')) }}</h1>
			</a>
			<hr />
			<p>@lang('product.explain-1')</p>
			<br/>
			<div class="">
				<p class="service_text service1" data-url="#">
					<a href=""target="_blank">
						@lang('<!-- product.consulting -->')
					</a>
				</p>
				<p class="service_text service2" data-url="#">
					<a href="" target="_blank">
						@lang('')
					</a>
				</p>
				<p class="service_text service3" data-url="#">
					<a href="" target="_blank">
						@lang('')
					</a>
				</p>
			</div> {{-- <div class="iot_svg"> --}}
		</div> {{-- <div class="tc"> --}}
	</article> {{-- <article id="service_index"> --}}
	<article id="product_index">
		<div class="tc">
			<a href="{{ route('about', app()->getLocale()) }}" class="">
				<h1>{{ strtoupper(trans('home.about')) }}</h1>
			</a>
			<hr />
			<p>@lang('home.about-desc')</p>
		</div> {{-- <div class="tc"> --}}
	</article> {{-- <article id="product_index"> --}}
	<article id="about_index">
		<div class="bg_c">
			<div class="tc">
				<h1></h1>
				<a href="{{ route('service', app()->getLocale()) }}" class="">
					<p>@lang('service.title')</p>
				</a>
				<hr />
			</div> {{-- <div class="tc"> --}}
		</div> {{-- <div class="bg_c"> --}}
	</article> {{-- <article id="about_index"> --}}
</div> {{-- <div id="top_content" class="clearfix"> --}}