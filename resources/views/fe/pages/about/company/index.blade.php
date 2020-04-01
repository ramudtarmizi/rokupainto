@extends('fe.pages.about.index')

@section('about')
<section id="about" class="outline">
  <div id="cover"></div> {{-- <div id="cover"> --}}
  @section('field', trans('about.menu-1-title'))
  <h2 class="heading02 lato">
    @yield('field')<br/><i class="fas fa-building"></i>
  </h2>
  @include('fe.pages.about.breadcrumb')
  <div class="comTtl">
    <div class="pho"></div> {{-- <div class="pho"> --}}
  </div> {{-- <div class="comTtl"> --}}
  <div class="whiteBox">
    <div class="wrap comBox">
      <table class="fadeInUp">
        <tbody>
          <tr>
            <th>@lang('about.company-txt')</th>
            <td>@lang('about.company-val')</td>
          </tr>
          <tr>
            <th>@lang('about.establish-txt')</th>
            <td>@lang('about.establish-val')</td>
          </tr>
          <tr>
            <th>@lang('about.capital-txt')</th>
            <td>@lang('about.capital-val')</td>
          </tr>
          <tr>
            <th>@lang('about.employee-txt')</th>
            <td>@lang('about.employee-val')</td>
          </tr>
          <tr>
            <th>@lang('about.sharehold-txt')</th>
            <td>@lang('about.sharehold-val')</td>
          </tr>
          <tr>
            <th>@lang('about.manteam-txt')</th>
            <td>
              @lang('about.manteam-val1')<br>@lang('')<br>
            </td>
          </tr>
          <tr>
           <!--  <th>@lang('')</th>
            <td>
              @lang('')<br> 
              @lang('')<br> 
              @lang('')<br> 
              @lang('')<br> 
              @lang('')<br> 
              @lang('')<br> 
              @lang('')<br>
            </td>
          </tr> -->
          <tr>
            <th>@lang('about.bussiness-txt')</th>
            <td>
              @lang('about.bussiness-val1')<br> 
              @lang('about.bussiness-val2')<br> 
              @lang('')<br>
            </td>
          </tr>
          <tr>
            <th>@lang('about.location-txt')</th>
            <td>
              <p>
                <b>@lang('Indonesia, Karawang Regency, Desa Sirnabaya
                Jalan Harapan IV Lot KK-9b, Kawasan Industri Kiic')</b><br> 
                @lang('')<br class="sp"><!-- </iframe>Google Maps</a> -->
                                <div class="col-xs-4">
                               <img src="{{ asset('img/onemake/campany/honsya-office.jpg') }}" alt="">
                                </div>
                                <div class="col-xs-8">
                                <h3>Osaka Headquarters</h3>
                                    <p>Postal Code 555-0033,<br> 
                                    Osaka Nishiyodogawa Himejima 3 chome No. 47 <br>
                                    Telp: 06-6473-1551<br />
                                 URL : <a href="http://www2.rockpaint.co.jp/home_j/index.html" target="_blank">www.rockpaint.co.jp</a></p></p>
                                </div>
                            </div>        
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="tokyo-office">
                                <div class="row">
                             
                                <div class="col-xs-4">
                                <img src="{{ asset('img/onemake/campany/tokyo-office.jpg') }}" alt="">
                             </div>
                             <div class="col-xs-8">
                                <h3>Tokyo Head Office</h3>
                                <p>Postal Code 136-0076, Koto-ku, <br>
                                Tokyo Minamisuna 2-chome, No. 37 No. 2 <br>
                                Telp: 03-3640-6000<br />
                                 URL : <a href="http://www2.rockpaint.co.jp/home_j/index.html" target="_blank">www.rockpaint.co.jp</a></p>
                            </div>
                             </div>
                <br>@lang('')<br>
              </p>
            </td>
          </tr>
         <!--  <tr>
            <th>@lang('')</th>
            <td>@lang('')<br>@lang('')</td>
          </tr> -->
        </tbody>
      </table>
    </div> {{-- <div class="wrap comBox"> --}}
    @include('fe.pages.about.menu')
  </div> {{-- <div class="whiteBox"> --}}
</section> {{-- <section id="about" class="outline"> --}}
@endsection