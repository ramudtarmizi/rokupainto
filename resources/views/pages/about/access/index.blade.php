@extends('layouts.about')

@section('about')
  <section id="about" class="access clearfix">
    <div id="cover"></div> {{-- <div id="cover"> --}}
      @section('field', trans('Access'))

      @include('pages.about.breadcrumb')
    <div class="comTtl">
      <div class="pho"></div> {{-- <div class="pho"> --}}
    </div> {{-- <div class="comTtl"> --}}
    <div class="whiteBox">
      <ul class="linkList">
        <li>
          <a class="anchor" href="#a01">{{trans('about.main-office-01')}}</a>
          <a class="anchor" href="#a02">{{trans('about.main-office-02')}}</a>
        </li>
      </ul>
      <div class="wrap fadeInUp" id="a01">
        <h4 class="heading04">{{trans('about.access-header')}}</h4>
        <div class="map">
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="820" height="380" id="gmap_canvas" 
                src="https://maps.google.com/maps?q=rockpaint%20indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
              <a href=""></a>
            </div> {{-- <div class="gmap_canvas"> --}}
            <style>
              .mapouter{position:relative;text-align:right;height:100%;width:100%;}
              .gmap_canvas {overflow:hidden;background:none!important;/*height:380px;width:820px;*/}
            </style>
          </div> {{-- <div class="mapouter"> --}}
        </div> {{-- <div class="map"> --}}
        <p class="link">
          <a class="more" 
            href="https://www.google.com/maps/place/PT+Indo+Satu+Cipta/@-6.2070036,106.8198795,17z/data=!4m5!3m4!1s0x2e69f5eb30f34c01:0x71c78b6907406ccb!8m2!3d-6.207129!4d106.821297?hl=en-US" 
            target="_blank">
            Google Maps
          </a>
        </p>
        <div class="comBox textBox clearfix">
          <dl class="lBox">
            <dt>{{trans('about.main-office')}}</dt>
            <dd>
              {{trans('about.main-content1')}}
              <br> {{trans('about.main-content2')}}
              <br> {{trans('about.main-content3')}}
              <br> {{trans('about.main-content4')}}
              <br> {{trans('about.main-content5')}}
              <br> {{trans('about.main-content6')}}
            </dd>
          </dl>
        </div> {{-- <div class="comBox textBox clearfix"> --}}
      </div> {{-- <div class="wrap fadeInUp" id="a02"> --}}
          <div class="wrap fadeInUp" id="a02">
        <h4 class="heading04">{{trans('about.access-header2')}}</h4>
        <div class="map">
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="820" height="380" id="gmap_canvas" 
                src="https://maps.google.com/maps?q=menara%20astra&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
              <a href=""></a>
            </div> {{-- <div class="gmap_canvas"> --}}
            <style>
              .mapouter{position:relative;text-align:right;height:100%;width:100%;}
              .gmap_canvas {overflow:hidden;background:none!important;/*height:380px;width:820px;*/}
            </style>
          </div> {{-- <div class="mapouter"> --}}
        </div> {{-- <div class="map"> --}}
        <p class="link">
          <a class="more" 
            href="https://www.google.com/maps/place/PT+Indo+Satu+Cipta/@-6.2070036,106.8198795,17z/data=!4m5!3m4!1s0x2e69f5eb30f34c01:0x71c78b6907406ccb!8m2!3d-6.207129!4d106.821297?hl=en-US" 
            target="_blank">
            Google Maps
          </a>
        </p>
        <div class="comBox textBox clearfix">
          <dl class="lBox">
            <dt>{{trans('about.rep-content1')}}</dt>
            <dd>
              {{trans('about.rep-content2')}}
              <br> {{trans('about.rep-content3')}}
              <br> {{trans('about.rep-content4')}}
              <br> {{trans('about.rep-content5')}}
              <br> {{trans('about.rep-content6')}}
            </dd>
          </dl>
        </div> {{-- <div class="comBox textBox clearfix"> --}}
      </div> {{-- <div class="wrap fadeInUp" id="a01"> --}}
      @include('pages.about.menu')
    </div> {{-- <div class="whiteBox"> --}}
  </section> {{-- <section id="about" class="access"> --}}
@endsection