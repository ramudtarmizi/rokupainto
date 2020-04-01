@extends('fe.layouts.product')

@section('product')
<section id="products" class="entry">
	<div id="cover"></div> {{-- <div id="cover"> --}}
  	@section('field', trans('Product.pos-title-2'))
  	@include('fe.pages.product.breadcrumb')
	<header>
		<h1>@lang('Product.pos-title-2')</h1>
		<p><br/><i class="fas fa-cogs"></i></p>
	</header>
	<article class="service_article">
		<div class="entry_body">
			<p>@lang('Product.pos-explain-2')</p>
					
						</div> {{-- <div class="pho"> --}}
					<a>
							<img src="{{ asset('img/onemake/product/cat/decor-pic1.jpg') }}" alt="">
						</div> {{-- <div class="pho"> --}}
					</a>

							<img src="{{ asset('img/onemake/product/cat/decor-pic2.jpg') }}" alt="">
						</div> {{-- <div class="pho"> --}}
					</a>
							<img src="{{ asset('img/onemake/product/cat/decor-pic3.jpg') }}" alt="">
						</div> {{-- <div class="pho"> --}}
					</a>
							<img src="{{ asset('img/onemake/product/cat/decor-pic4.jpg') }}" alt="">
						</div> {{-- <div class="pho"> --}}
					</a>
							<img src="{{ asset('img/onemake/product/cat/decor-pic5.jpg') }}" alt="">
						</div> {{-- <div class="pho"> --}}
					</a>
							<img src="{{ asset('img/onemake/product/cat/decor-pic6.jpg') }}" alt="">
						</div> {{-- <div class="pho"> --}}

							<!-- <img src="{{ asset('img/onemake/product/cat/decor-pic7.jpg') }}" alt="">
						</div> {{-- <div class="pho"> --}} -->
		</div> {{-- <div class="entry_body"> --}}
		@include('fe.pages.product.menu')
	</article> {{-- <article class="service_article"> --}}
</section> {{-- <section id="products" class="entry"> --}}
@endsection
