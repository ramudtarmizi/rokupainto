<header id="gheader" class="">
	<h1>
		<a href="#">
			<img src="{{url('assets/img/common/logo.png')}}" width="70" height="59" 
				alt="">
		</a>
	</h1>
	<button class="menu_btn" type="button">
		<b>
			<span></span>
			<span></span>
			<span></span>
		</b>
	</button>
	{{-- section navigation --}}
	@include('sections.navigation')
	<div class="pclang pc">
		<ul id="h_lang_" class="h_lang_ clearfix">
			<li class="jp">
				<a href="#" class="lang_active">
					JP
				</a>
			</li>
			<li class="id">
				<a href="#">
					ID
				</a>
			</li>
			<li class="en">
				<a href="#">
					EN
				</a>
			</li>
		</ul>
	</div>
</header>