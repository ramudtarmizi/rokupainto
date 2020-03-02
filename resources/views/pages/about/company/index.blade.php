@extends('layouts.about')

@section('about')
<section id="about" class="outline">
  <div id="cover"></div> {{-- <div id="cover"> --}}
   @section('field', trans('Company Outline'))
<!--   <h2 class="heading02 lato">
    @yield('field')<br/><i class="fas fa-building"></i>
  </h2>
 -->  @include('pages.about.breadcrumb')
  <div class="comTtl">
    <div class="pho"></div> {{-- <div class="pho"> --}}
  </div> {{-- <div class="comTtl"> --}}
  <div class="whiteBox">
    <div class="wrap comBox">
      <table class="fadeInUp">
        <tbody>
          <tr>
            <th>{{trans('about.company-name')}}</th>
            <td>{{trans('about.name-content')}}</td>
          </tr>
          <tr>
            <th>{{trans('about.company-est')}}</th>
            <td>{{trans('about.est-content')}}</td>
          </tr>
          <tr>
            <th>{{trans('about.company-cap')}}</th>
            <td>{{trans('about.cap-content')}}</td>
          </tr>
          <tr>
            <th>{{trans('about.company-share')}}</th>
            <td>{{trans('about.share-content')}}</td>
          </tr>
          <tr>
            <th>{{trans('about.company-leader')}}</th>
            <td>{{trans('about.leader-content')}}</td>
          </tr>
          <tr>
            <th>{{trans('about.company-land')}}</th>
            <td>{{trans('about.land-content')}}</td>
          </tr>
          <tr>
            <th>{{trans('about.office-loc')}}</th>
            <td>
              <p>
                <!-- <b>{{trans('Main Office')}}</b><br>  -->
                {{trans('')}}<br class="sp"><!-- </iframe>Google Maps</a> -->
                        <div class="col-xs-4">
                                    <img src="{{ url('assets/img/onemake/campany/RPI.jpg') }}" alt="">
                        </div>
                                <div class="col-xs-8">
                                <h3>Main Office Indonesia</h3>
                                    <p>Postal Code 41361,<br> 
                                    Jln. Harapan IV Lot KK-9b, Kawasan Industri KIIC,
                                    <br>
                                    Desa Sirnabaya, Kec. Telukjambe Timur, Karawang,
                                    <br>
                                    Jawa Barat, Indonesia
                                    <br>
                                    Telp: +62-21-8911-4321<br />
                                 URL : <a href="https://goo.gl/maps/sYMpPZbXLgoLSgCt5">Map Location</a>

                        <div class="col-sm-6">
                            <div class="tokyo-office">
                                <div class="row">
                                      <div class="col-xs-4">
                                          <img src="{{ url('assets/img/onemake/campany/rpi2.jpg') }}" alt="">
                                      </div>
                                  <div class="col-xs-8">
                                      <h3>Representative Office</h3>
                                      <p>Postal Code 10350, <br>
                                      Wisma Nusantara 6th floor,
                                      <br>
                                      Jalan MH Thamrin Kav No.59, RT.9/RW.5, Gondangdia, Menteng,
                                      <br>
                                      Jakarta Pusat, Indonesia
                                      <br>
                                      Telp: +62-21- 3983-5810<br />
                                       URL : <a href="https://goo.gl/maps/95hajF6G6dSvYNVB8">Map Location</a></p>
                                  </div>
                               </div>
                            </div>
                        </div>
                          
                        <br>
                        <div class="col-sm-6">
                            <div class="tokyo-office">
                                <div class="row">
                                      <div class="col-xs-4">
                                          <img src="{{ url('assets/img/onemake/campany/tokyo.jpg') }}" alt="">
                                      </div>
                                  <div class="col-xs-8">
                                      <h3>Tokyo Head Office</h3>
                                      <p>Postal Code 136-0076,
                                      <br>
                                      2,37 Banchi,2 Chome , Minamisuna 
                                      <br>
                                      Koto-ku, Tokyo
                                      <br>
                                      Telp: 03-3640-6000<br />
                                       URL : <a href="https://www.rockpaint.co.jp">www.rockpaint.co.jp</a></p>
                                  </div>
                               </div>
                            </div>
                        </div>
        </tbody>
      </table>
    </div> {{-- <div class="wrap comBox"> --}}
    @include('pages.about.menu')
  </div> {{-- <div class="whiteBox"> --}}
</section> {{-- <section id="about" class="outline"> --}}
@endsection