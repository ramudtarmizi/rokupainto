@extends('layouts.sales')

@section('sales')
  <section id="about" class="access clearfix">
    <div id="cover"></div> {{-- <div id="cover"> --}}
      @section('field', trans('sales.sales-header'))
      @include('pages.sales.breadcrumb')
    <div class="comTtl">
      <div class="pho" ></div> {{-- <div class="pho"> --}}
    </div> {{-- <div class="comTtl"> --}}
    <div class="whiteBox">
    <h5 class="lato">
              {{trans('sales.sales-dis')}}
              <!-- <img src="{{url('assets/img/about/icon01.png')}}" alt=""> -->
    </h5>
    <div class="row">

     <div class="column">
      <div class="card ">
       <img src="{{ url('assets/img/about/RPI2.jpg') }}" style="width: 100%" alt="">
        <div class="container">
          <h6>{{trans('SARI PAINT PACIFIC')}}</h6>
          <br>
          <p>{{trans('JL. Letjen Ahmad Yani No.5, Kebon Jeruk')}}</p>
          <p>{{trans('Jakarta Barat, Indonesia')}}</p>
          <p>{{trans('Email: saripacific@gmail.com')}}</p>
            <p>{{trans('Telp: (021) 21213434')}}</p>
             <a href="tel:123-456-7890" target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/phone.png') }}" style="width: 10%">
                  </span>
                </button>
            </a>
        </div>
      </div> 
    </div>

    <div class="column">
      <div class="card">
       <img src="{{ url('assets/img/about/RPI2.jpg') }}" style="width: 100%" alt="">
        <div class="container">
          <h6>{{trans('JAYA PAINT INDO')}}</h6>
          <br>
          <p>{{trans('JL. Letjen Ahmad Yani No.5, Cipanas')}}</p>
          <p>{{trans('Jawa Barat, Indonesia')}}</p>
          <p>{{trans('Email: ajayapaint@gmail.com')}}</p>
            <p>{{trans('Telp: (021) 09028345')}}</p>
             <a href="tel:123-456-7890" target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/phone.png') }}" style="width: 10%"> 
                  </span>
                </button>
            </a>
        </div>
      </div>
    </div>

        <div class="column">
      <div class="card">
       <img src="{{ url('assets/img/about/RPI2.jpg') }}" style="width: 100%" alt="">
        <div class="container">
          <h6>{{trans('INDO RAYA PAINT')}}</h6>
          <br>
          <p>{{trans('JL. Ahmad Dahlan No.25, Sleman')}}</p>
          <p>{{trans('Yogyakarta, Indonesia')}}</p>
          <p>{{trans('Email: rayapaint@gmail.com')}}</p>
            <p>{{trans('Telp: (021) 09028334')}}</p>
             <a href="tel:123-456-7890" target="_blank">
                <button>
                  <br>
                  <span>
                    <img src="{{ url('assets/img/about/phone.png') }}" style="width: 10%"> 
                  </span>
                </button>
            </a>
        </div>
      </div>
    </div>

    </div>

    </div> {{-- <div class="whiteBox"> --}}
  </section> {{-- <section id="about" class="access"> --}}
@endsection