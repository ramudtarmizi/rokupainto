<div id="top_content" class="clearfix">
	<article id="service_index">
		<div class="tc">
			<h1>{{trans('home.product')}}</h1>
			<!-- <hr /> -->
			<p>
				{{trans('home.product-exp1')}}<br>
				{{trans('home.product-exp2')}}<br>
				<!-- {{ucfirst(trans('also we manufacture adhesive for lamintaion'))}} -->
			</p>
			<a href="{{route('product',['lang' => app('translator')->getLocale()])}}" class="more">
				{{trans('home.product-more')}}
			</a>
		</div>
	</article>
	<article id="product_index">
		<div class="tc">
			<h1>{{trans('home.about')}}</h1>
			<p>
				{{trans('home.about-exp1')}}<br>
				{{trans('home.about-exp2')}}<br>
			</p>
			<a href="{{route('about',['lang' => app('translator')->getLocale()])}}"class="more">
				{{trans('home.about-more')}}
			</a>
		</div>
	</article>
	<article id="about_index">
		<div class="bg_c">
			<div class="tc">
				<h1>{{trans('home.sales')}}</h1>
				<p>
					{{trans('home.sales-exp1')}}<br>
					{{trans('home.sales-exp2')}}
				</p>
				<a href="{{route('sales',['lang' => app('translator')->getLocale()])}}" class="more">
					{{trans('home.sales-more')}}
				</a>
			</div>
		</div>
	</article>
 	<article id="paint_index">
		<div class="bg_c">
			<div class="tc">
				<h1>{{ucwords(trans('Paint'))}}</h1>
				<p>
					{{ucfirst(trans('For Further Information for our official distributor'))}}<br>
					{{ucfirst(trans('Also if you need help to our customer service'))}}
				</p>
				<a href="#" class="more">
					{{strtoupper(trans('MORE'))}}
				</a>
			</div>
		</div>
	</article> 
</div>