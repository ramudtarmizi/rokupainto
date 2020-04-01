@extends('layouts.about')

@section('about')
  <section id="about" class="access clearfix">
    <div id="cover"></div> {{-- <div id="cover"> --}}
        @section('field', trans('Company Outline'))
        @include('pages.about.breadcrumb')
    <div class="comTtl">
      <div class="pho" ></div> {{-- <div class="pho"> --}}
    </div> {{-- <div class="comTtl"> --}}
    <div class="whiteBox">
    <h5 class="lato">
    {{trans('Paint Visualization')}}

    <div class="raw">
     <div class="calumn">
      <div class="cord ">
       <img src="{{ url('assets/img/feature/pic-ext.png') }}"  style="width: 100%" alt="">
        <div class="container">
            <a href="{{ route('paint.exterior',['lang'=>app('translator')->getLocale()])}}">{{trans('Exterior')}}</a>
        </div>
      </div> 
    </div>

    <div class="calumn">
      <div class="cord">
       <img src="{{ url('assets/img/feature/pic-int.png') }}" style="width: 100%" alt="">
        <div class="container">
           <a href="{{ route('paint.interior',['lang'=>app('translator')->getLocale()])}}">{{trans('Interior')}}</a>
      
        </div>
      </div>
    </div>

    </div>
    </div> {{-- <div class="whiteBox"> --}}
  </section> {{-- <section id="about" class="access"> --}}
@endsection