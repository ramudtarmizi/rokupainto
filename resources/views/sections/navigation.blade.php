<nav class="clearfix h_nav_box">
	<div class="in_relative">
		<div class="in_center h_nav">
			<ul class="cate_l">
				<li>
					<a href="{{
						route('home',['lang' => app('translator')->getLocale()])
					}}">
						{{trans('menu.home')}}
					</a>
				</li>
				<li>
					<a href="{{
						route('about',['lang' => app('translator')->getLocale()])
					}}">
						{{trans('menu.about')}}
					</a>
				</li>
				<li>
					<a href="{{
						route('product',['lang' => app('translator')->getLocale()])
					}}">
						{{trans('menu.product')}}
					</a>
				</li>
				<li>
					<a href="{{
						route('paint',['lang' => app('translator')->getLocale()])
					}}">
						{{trans('menu.paint')}}
					</a>
				</li>
			</ul>
			<ul class="cate_s">
				<!-- <li>
					<a href="#">
						{{trans('career.title')}}
					</a>
				</li> -->
				<li>
					<a href="{{
						route('sales',['lang' => app('translator')->getLocale()])
					}}">
						{{trans('menu.sales')}}
					</a>
				</li>
				<li>
					<a href="#">
						{{trans('menu.csr')}}
					</a>
				</li>
				<li>
					<a href="{{
						route('contact',['lang' => app('translator')->getLocale()])
					}}">
						{{trans('menu.contact')}}
					</a>
				</li>
			</ul>
			<ul id="h_links">
				<li>
					<a href="#" target="_blank" class="exlink">
						{{trans('menu.news')}}
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="exlink">
						{{trans('menu.blog')}}
					</a>
				</li>
			<!-- 	<li>
					<a href="#" target="_blank" class="exlink">
						{{trans('nav.link-3-title')}}
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="exlink">
						{{trans('nav.link-4-title')}}
					</a>
				</li> -->
			</ul>
		
			<ul id="h_sns" class="clearfix">
				<li>
					<p>{{trans('menu.sns')}}</p>
				</li>
				<li>
					<a href="https://twitter.com/" target="_blank">
						<img height="14" src="{{url('assets/img/common/sns_twitter.svg')}}" alt="twitter">
					</a>
				</li>
				<li>
					<a href="https://facebook.com/" target="_blank">
						<img height="16" src="{{url('assets/img/common/sns_facebook.svg')}}" alt="facebook">
					</a>
				</li>
				<li>
					<a href="https://youtube.com/" target="_blank">
						<img height="13" src="{{url('assets/img/common/sns_youtube.svg')}}" alt="youtube">
					</a>
				</li>
			</ul>
			<!-- <ul id="h_lang" class="h_lang_ clearfix">
				<li class="jp">
					<a href="{{ url('/jp'.str_replace(
						app('request')->segment(1),'',
						app('request')->path())) }}" class="lang_active">
						JP
					</a>
				</li>
				<li class="sp">｜</li>
				<li class="en">
					<a href="{{ url('/id'.str_replace(
						app('request')->segment(1),'',
						app('request')->path())) }}">
						ID
					</a>
				</li>
				<li class="sp">｜</li>
				<li class="en">
					<a href="{{ url('/en'.str_replace(
						app('request')->segment(1),'',
						app('request')->path())) }}">
						EN
					</a>
				</li>
			</ul> -->
			<p id="h_policy" class="pc">
				<a href="#">
					{{trans('menu.policy')}}
				</a>
			</p>
		</div>
	</div>
</nav>