<ul class="itemList oneShow clearfix comLinkList">
	<li>
		<a href="{{route('about.company', app()->getLocale()) }}">
			<h3 class="lato">
				@lang('about.menu-1-title')<br/><i class="fas fa-building"></i>
			</h3>
			<p class="txt"><span><p style="color:#cfe8d5; background-color:#000">@lang('about.menu-1-explain')</span></p>
			<!-- <p class="more lato"><span>@lang('about.button-more')</span></p> -->
		</a>
	</li> 
	<li>
		<a href="{{ route('about.member', app()->getLocale()) }}">
			<h3 class="lato">
				@lang('about.menu-2-title')<br/><i class="fas fa-users"></i>
			</h3>
			<p class="txt"><span><p style="color:#cfe8d5; background-color:#000">@lang('about.menu-2-explain')</span></p>
			<!-- <p class="more lato"><span>@lang('about.button-more')</span></p> -->
		</a>
	</li>
	<li>
		<a href="{{ route('about.access', app()->getLocale()) }}">
			<h3 class="lato">
				@lang('about.menu-3-title')<br/><i class="fas fa-map-marker-alt"></i>
			</h3>
			<p class="txt"><span><p style="color:#cfe8d5; background-color:#000">@lang('about.menu-3-explain')<br class="pc"></span></p>
			<!-- <p class="more lato"><span>@lang('about.button-more')</span></p> -->
		</a>
	</li>
</ul> {{-- <ul class="itemList oneShow clearfix comLinkList"> --}}