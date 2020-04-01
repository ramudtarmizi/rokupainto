@extends('fe.layouts.about')

@section('about')
<section id="about">
	<div id="cover"></div> {{-- <div id="cover"> --}}
	<div class="pageTitle">
		<div class="inr">
			<!-- <h2 class="lato">@lang('about.title')</h2> -->
			<h3 style="color:#005e48 font-weight: bold;}">@lang('about.explain1')</h3>
				<h4 style="color:#005e48 font-weight: bold;}">@lang('about.explainH2')</h4>
					<p style="color:#005e48 font-weight: underline;}">@lang('about.explain2')
						<h4 style="color:#005e48 font-weight: bold;}">@lang('about.explainH3')</h4>
							<p style="color:#005e48 font-weight: bold;}">@lang('about.explain3')
								<h4 style="color:#005e48 font-weight: bold;}">@lang('about.explainH4')</h4>
									<p style="color:#005e48 font-weight: bold;}">@lang('about.explain4')
		</div>
		<div class="pho"></div> {{-- <div class="pho"> --}}
	</div> {{-- <div class="pageTitle"> --}}
	<div class="whiteBox">
		@include('fe.pages.about.menu')</p>
	</div> {{-- <div class="whiteBox"> --}}
</section> {{-- <section id="about"> --}}
@endsection