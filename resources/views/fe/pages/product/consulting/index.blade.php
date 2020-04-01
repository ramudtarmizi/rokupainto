@extends('fe.layouts.product')

@section('product')
<section id="products" class="entry">
	<div id="cover"></div> {{-- <div id="cover"> --}}
  	@section('field', trans('product.pos-title-1'))
  	@include('fe.pages.product.breadcrumb')
	<header>
		<h1>@lang('product.pos-title-1')</h1>
		<p><br/><i class="fas fa-search"></i></p>
	</header>
	<article class="service_article">
		<div class="entry_body">
			<p>@lang('Product.pos-explain-1')</p>
						</div> {{-- <div class="pho"> --}}
							<img src="{{ asset('img/onemake/product/lamisi/lamisi_01.jpg') }}" alt="">
						</div> {{-- <div class="pho"> --}}
					</a>
							<img src="{{ asset('img/onemake/product/lamisi/lamisi_02.jpg') }}" alt="">
						</div> {{-- <div class="pho"> --}}
					</a>
							<img src="{{ asset('img/onemake/product/lamisi/lamisi_03.jpg') }}" alt="">
		</div> {{-- <div class="entry_body"> --}}
		@include('fe.pages.product.menu')
		</div> {{-- <div class="pho"> --}}
	</article> {{-- <article class="service_article"> --}}
</section> {{-- <section id="products" class="entry"> --}}
@endsection