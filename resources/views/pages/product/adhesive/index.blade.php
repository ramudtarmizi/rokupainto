@extends('layouts.product')

@section('product')
<section id="service" class="entry">
	<div id="cover"></div> {{-- <div id="cover"> --}}
  	<!-- @section('field', trans('Adhesive For Lamination')) -->

	<header>
		<h1>{{trans('product.adhesive-header')}}</h1>
		<p><br/><i class="fas fa-search"></i></p>
	</header>
	<article class="service_article">
		<div class="entry_body">
			<p>{{trans('product.adhesive-exp')}}</p>
			</div> {{-- <div class="pho"> --}}
							<img src="{{ url('assets/img/onemake/product/lamisi/lamisi_03.jpg') }}" alt="">
						</div> {{-- <div class="pho"> --}}
					</a>
							<img src="{{ url('assets/img/onemake/product/lamisi/lamisi_02.jpg') }}" alt="">
						</div> {{-- <div class="pho"> --}}
					</a>
							<img src="{{ url('assets/img/onemake/product/lamisi/lamisi_01.jpg') }}" alt="">
		</div> {{-- <div class="entry_body"> --}}
		@include('pages.product.menu')
		</div> {{-- <div class="pho"> --}}
	</article> {{-- <article class="service_article"> --}}
</section> {{-- <section id="service" class="entry"> --}}
@endsection