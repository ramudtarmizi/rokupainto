@extends('fe.layouts.service')
.
@section('service')
<section id="service">
    <div id="cover"></div> {{-- <div id="cover"> --}}
    <div class="top_title">
        <h1><span class="ss"></span>Vision & Mission</h1>
        <hr />
        <p>@lang('service.explain')</p>
    </div> {{-- <div class="top_title"> --}}
	{{-- <p class="product_list_jp_title">@lang('')</p> --}}
	{{-- <p class="product_list_en_title">&nbsp;</p> --}}
    <ul class="product_list">
        <li>
            <ul>
            	<li class="product_list_l product_list_">
                    <section>
                        <h2>VISION</h2>
                        <p>@lang('service.type-1-explain')</p>
                    </section>
                </li>
                <!-- <li class="product_list_r product_list_">
                	<img src="{{ asset('img/onemake/product/pos/pos-01.png') }}" alt="">
                </li> -->
                <ul>
                <li class="product_list_l product_list_">
                    <section>
                        <h2>MISSION</h2>
                        <p>@lang('service.type-2-explain')</p>
                    </section>
                </li>
            </ul>
         </li>
    </ul>
</section> {{-- <section id="service"> --}}
@endsection