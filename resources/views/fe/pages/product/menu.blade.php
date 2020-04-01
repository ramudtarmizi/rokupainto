<footer>
	<div class="service_footer">
		<div class="service_main clearfix">
			<article class="service_item cms_it_service cms_it_service__consulting">
				<a href="{{ route('product.consulting', app()->getLocale()) }}">
					<div class="c_box">
						<h1>@lang('Adhesives for Lamination')</h1>
						<br/><i class="fas fa-search"></i>			
						<div class="art_sum">
							<p class="more">@lang('More')</p>
						</div> {{-- <div class="art_sum"> --}}
					</div> {{-- <div class="c_box"> --}}
				</a>
			</article>
			<article class="service_item cms_it_service cms_it_service__engineering">
				<a href="{{ route('product.integrator', app()->getLocale()) }}">
					<div class="c_box">
						<h1>@lang('Decorative Paint')</h1>
						<br/><i class="fas fa-cogs"></i>						
						<div class="art_sum">
							<p class="more">@lang('More')</p>
						<!-- </div> {{-- <div class="art_sum"> --}}
					</div> {{-- <div class="c_box"> --}} -->
				</a>
			</article>
			
		</div> {{-- <div class="service_main clearfix"> --}}
	</div> {{-- <div class="service_footer"> --}}
</footer> {{-- <footer> --}}