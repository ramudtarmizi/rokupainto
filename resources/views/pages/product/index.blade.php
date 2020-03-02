
@extends('layouts.about')

@section('about')
	<section id="about">
		<div id="cover"></div>
		<div class="pageTitle">
			<div class="pho"></div>
		</div>
		<div class="whiteBox">
			<ul class="itemList oneShow clearfix">
				<li>
					<a href="{{ route('product.decorative', app()->getLocale()) }}">
						<h3 class="lato">
							{{trans('about.outline')}}
							<img src="{{ url('assets/img/onemake/product/deco2.png') }}" alt="">
						</h3>
						
						<!-- <h4>トップメッセージ</h4> -->
						
					</a>
				</li>
				<li>
					<a href="{{ route('product.adhesive', app()->getLocale()) }}">
						<h3 class="lato">
							{{trans('about.philosophy')}}
							<img src="{{ url('assets/img/onemake/product/adhesiv2.png') }}" alt="">
						</h3>
						<!-- <h4>会社概要</h4> -->
					
					</a>
				</li>
			<!--  -->
			</ul>
			</div>
		</div>
	</section>
@endsection