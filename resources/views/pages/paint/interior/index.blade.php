
<script src="{{ url('/assets/js/original/jscolor.js') }}"></script>
<script>

        function setColorD(picker) {
        var img = document.getElementById('part_d');
        img.style.color = '#' + picker.toString()
        img.setAttribute('style',
            '-webkit-filter: opacity(.5) drop-shadow(0 0 0 #'+ picker.toString() +')'); 
        img.setAttribute('style',
            'filter: opacity(.5) drop-shadow(0 0 0 #'+ picker.toString() +')');
    }

        function setColorC(picker) {
        var img = document.getElementById('part_c');
        img.style.color = '#' + picker.toString()
        img.setAttribute('style',
            '-webkit-filter: opacity(.5) drop-shadow(0 0 0 #'+ picker.toString() +')'); 
        img.setAttribute('style',
            'filter: opacity(.5) drop-shadow(0 0 0 #'+ picker.toString() +')');
    }

     function setColorE(picker) {
        var img = document.getElementById('part_e');
        img.style.color = '#' + picker.toString()
        img.setAttribute('style',
            '-webkit-filter: opacity(.5) drop-shadow(0 0 0 #'+ picker.toString() +')'); 
        img.setAttribute('style',
            'filter: opacity(.5) drop-shadow(0 0 0 #'+ picker.toString() +')');
    }

     function setColorF(picker) {
        var img = document.getElementById('part_f');
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
         <h3 id="title">{{trans('Interior Simulation')}}</h3>                  
            <div class="preview-two">
             <button id="btn-3" class="jscolor {onFineChange:'setColorC(this)'}">C</button>
                <button id="btn-4" class="jscolor {onFineChange:'setColorD(this)'}">D</button>
                  <button id="btn-5" class="jscolor {onFineChange:'setColorE(this)'}">E</button>
                    <button id="btn-6" class="jscolor {onFineChange:'setColorF(this)'}">F</button>

                        <img id="basic-b" src="{{ url('assets/img/feature/basic_b.png') }}">
                            <img id="part_d" class="jscolor" src="{{ url('assets/img/feature/base-d.png') }}">
                                <img id="part_c" class="jscolor" src="{{ url('assets/img/feature/base-c.png') }}">
                                    <img id="part_e" class="jscolor" src="{{ url('assets/img/feature/base-e.png') }}">
                                        <img id="part_f" class="jscolor" src="{{ url('assets/img/feature/base-f.png') }}">
            </div>
  </div>
  </div> {{-- <div class="whiteBox"> --}}
</section> {{-- <section id="about" class="outline"> --}}
@endsection