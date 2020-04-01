@extends('fe.pages.about.index')

@section('about')
<section id="about" class="leader">
	<div id="cover"></div> {{-- <div id="cover"> --}}
  	@section('field', trans('about.menu-2-title'))
	<h2 class="heading02 lato">
		@yield('field')<br/><i class="fas fa-users"></i>
	</h2>
  	<p style="color:#005e48; background-color:#fff;}">@include('fe.pages.about.breadcrumb')
	<div class="whiteBox">
		<div class="wrap">
			<ul class="photoList oneShow clearfix">
				<li>
					<a class="fancybox" href="#pop01">
						<div class="pho">
							<img src="{{ asset('img/onemake/leader/boss.png') }}" alt="">
						</div> {{-- <div class="pho"> --}}
						<p class="header">
							<span >@lang('about.member-1-txt')<br/></span>
						</p>
						<p>
							<!-- <p style="color:#005e48; background-color:#fff;}"> -->
							<span class="explain">@lang('about.message-1-val')</span>
						</p>
					</a>
					<br>
					<p></p></div>
				
				</li>
			</ul>
		</div> {{-- <div class="wrap"> --}}
    @include('fe.pages.about.menu')
	</div> {{-- <div class="whiteBox"> --}}
</section> {{-- <section id="about" class="leader"> --}}
@endsection