@extends('fe.layouts.product')

@section('product')
    <section id="products">
        <div id="cover"></div> {{-- <div id="cover"> --}}
        <div class="top_title">
            <h1>Product</h1>
            <hr/>
            <p>
                @lang('Product Information')
                <br>@lang('')<br/><b>@lang('')</b><br>@lang('')</br>
            </p>
        </div> {{-- <div class="top_title"> --}}
        @include('fe.pages.product.menu')
    </section> {{-- <section id="products"> --}}
@endsection