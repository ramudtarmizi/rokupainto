<ul id="pagePath">
	<li>
		<a href="{{ route('home', app()->getLocale()) }}">@lang('home.title')</a> &gt;
	</li>
	<li>
		<a href="{{ route('about', app()->getLocale()) }}">@lang('about.title')</a> &gt;
	</li>
	<li>@yield('field')</li>
</ul>