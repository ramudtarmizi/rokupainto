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


 <body>

<div class="baris">
  <div class="kolom">
    <div class="cardo">
      <h3>CSR</h3>
      <!-- <div class="fakeimg" style="height:200px;"></div> -->
      <img src="{{ url('assets/img/about/csr-banner.jpg') }}">
      <h4>Social Responsibility in Republict of Indonesia</h4>
      <p style="text-align: justify;">PT ROCK PAINT INDONESIA maintain public facilities and environment for order ROCK PAINT GROUP to operate business in Republic of Indonesia.For the example about disposal industry, we can handle from transportation until destroy by fire or land reclamation with consistently process which strictly selected, had a license trusted, also it disposal process will be monitoring and recording by company.</p>

      <h4>Aim to make a high quality product. To keep and protecting global environment, ROCK PAINT GROUP will manufacture the consideration product than before.</h4>
      <p style="text-align: justify;">The company sell continuously a little organic paint that easy to evaporated and not easy to blend with heavy metal. Trough this product, ROCK PAINT GROUP not only introduce eco-friendly product, but also at the same time high quality product manufacturing, to protection structure and makes wall more beautiful. And then we use a kind of technology know how to makes a long life this product.</p>

    </div>

  </div>
</div>

</body>
    </div> 

  </div> 
</section> 
@endsection