
<script src="{{ url('/assets/js/original/jscolor.js') }}"></script>
<script>
    function setColorB(picker) {
        var img = document.getElementById('part_b');
        img.style.color = '#' + picker.toString()
        img.setAttribute('style',
            '-webkit-filter: opacity(.5) drop-shadow(0 0 0 #'+ picker.toString() +')'); 
        img.setAttribute('style',
            'filter: opacity(.5) drop-shadow(0 0 0 #'+ picker.toString() +')');
    }
    function setColorA(picker) {
        var img = document.getElementById('part_a');
        img.style.color = '#' + picker.toString()
        img.setAttribute('style',
            '-webkit-filter: opacity(.5) drop-shadow(0 0 0 #'+ picker.toString() +')'); 
        img.setAttribute('style',
            'filter: opacity(.5) drop-shadow(0 0 0 #'+ picker.toString() +')');
    }
</script>


@extends('layouts.about')

@section('about')
<section id="about" class="outline">
  <div id="cover"></div> {{-- <div id="cover"> --}}
   @section('field', trans('Company Outline'))
 @include('pages.about.breadcrumb')
  <div class="comTtl">
    <div class="pho"></div> {{-- <div class="pho"> --}}
  </div> {{-- <div class="comTtl"> --}}
  <div class="whiteBox">
    <div class="wrap comBox">
         <h3 id="title">{{trans('Exterior Simulation')}}</h3>   
            <div class="preview-one">
                <button id="btn-1" class="jscolor {onFineChange:'setColorA(this)'}">A</button>
                    <button id="btn-2" class="jscolor {onFineChange:'setColorB(this)'}">B</button>            
                        <img id="basic" src="{{ url('assets/img/feature/basic-home.png')}}">
                            <img id="part_b" class="jscolor" src="{{ url('assets/img/feature/base-b.png') }}">
                                <img id="part_a" class="jscolor" src="{{ url('assets/img/feature/base-a.png') }}">

  </div>
  </div> {{-- <div class="whiteBox"> --}}
</section> {{-- <section id="about" class="outline"> --}}
@endsection