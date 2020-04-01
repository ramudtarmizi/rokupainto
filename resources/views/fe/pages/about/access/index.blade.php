@extends('fe.pages.about.index')

@section('about')
<section id="about" class="access clearfix">
	<div id="cover"></div> {{-- <div id="cover"> --}}
  	@section('field', trans('about.menu-3-title'))
	<h3 class="heading02 lato">
		@yield('field')<br/><i class="fas fa-map-marker-alt"></i>
	</h3>
  	@include('fe.pages.about.breadcrumb')
	<div class="comTtl">
		<div class="pho"></div> {{-- <div class="pho"> --}}
	</div> {{-- <div class="comTtl"> --}}
	<div class="whiteBox">
		<ul class="linkList">
			<li>
				<a class="anchor" href="#a01">Karawang</a>
			</li>
		</ul>
		<div class="wrap fadeInUp" id="a01">
			<h4 class="heading04">@lang('about.office-txt')</h4>
			<div class="map">
				<div class="mapouter">
					<div class="gmap_canvas">
						<iframe width="820" height="380" id="gmap_canvas" 
							src=https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d56360.28553714594!2d107.26529093366582!3d-6.351263190341853!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6975fbd063370d%3A0xfae6d1204c44856d!2sPT.%20Rock%20Paint%20Indonesia%20Head%20Office%20%26%20Karawang%20Factory!5e0!3m2!1sid!2sid!4v1574789287000!5m2!1sid!2sid width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>" 
						<a href=""></a>
					</div> {{-- <div class="gmap_canvas"> --}}
					<style>
						.mapouter{position:relative;text-align:right;height:100%;width:100%;}
						.gmap_canvas {overflow:hidden;background:none!important;/*height:380px;width:820px;*/}
					</style>
				</div> {{-- <div class="mapouter"> --}}
			</div> {{-- <div class="map"> --}}
			<p class="link">
				<a class="more" 
					href="https://www.google.com/maps/place/PT.+Rock+Paint+Indonesia+Head+Office+%26+Karawang+Factory/@-6.3903738,106.5637148,8.78z/data=!4m19!1m13!4m12!1m4!2m2!1d106.8296488!2d-6.2069039!4e1!1m6!1m2!1s0x2e6975fbd063370d:0xfae6d1204c44856d!2sgoogle+maps+PT+rock+paint+indonesia!2m2!1d107.296719!2d-6.372029!3m4!1s0x2e6975fbd063370d:0xfae6d1204c44856d!8m2!3d-6.372029!4d107.296719" 
					target="_blank">
					Google Maps
				</a>
			</p>
			<div class="comBox textBox clearfix">
				<dl class="lBox">
					<dt>@lang('about.location-txt')</dt>
					<dd>
						@lang('about.address-val1') 
						<br> @lang('about.address-val2')
						<br> @lang('about.address-val3')
						<br> @lang('Phone: 021 8911 4321')
					</dd>
				</dl>
				<dl class="lBox">
					<dt>@lang('about.trans-title')</dt>
					<dd>
						@lang('about.trans-val1')
						<br> @lang('about.trans-val2')
						<br> @lang('about.trans-val3')
					</dd>
				</dl>
			</div> {{-- <div class="comBox textBox clearfix"> --}}
		</div> {{-- <div class="wrap fadeInUp" id="a01"> --}}
    @include('fe.pages.about.menu')
	</div> {{-- <div class="whiteBox"> --}}
</section> {{-- <section id="about" class="access"> --}}
@endsection