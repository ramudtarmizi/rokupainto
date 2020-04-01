<ul id="pagePath" class="cms_ly_pagePath">
	<li>
		<a href="{{ route('home', app()->getLocale()) }}">@lang('home.title')</a> &gt; 
	</li>
	<li>
		<a href="{{ route('product', app()->getLocale()) }}">@lang('product.title')</a> &gt; 
	</li>
	<li>@yield('field')</li>
</ul>