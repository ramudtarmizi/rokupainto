<style>
    body{
        width: 100%;
        margin: 0 auto;
        padding: 30px;
    }
    .preview-one{
        width: 500px;
        height: 100%;
        border: solid 10px #fff;
        position: relative;
        margin:4vw;
        padding-top: 200px;
    }

   .preview-two{
        width: 500px;
        height: 100%;
        border: solid 10px #fff;
        position: relative;
        margin:4vw;
        padding-top: 200px;
    }

  button {
        width: 50px;
        height: 25px;
        margin: 5px 0 5px 5px;
        background-size: 225px 70px;
        position: relative;
        float: left;
        display: inline;
        top: 265px;
        border-radius: 3px;
        z-index: 400;
        cursor: pointer;

    }


    h2,h3{
        font-family:Lato, Roboto, 'Helvetica Neue', sans-serif;
        font-size: 14px;
        text-align: center;
        color: #005E48

    }




    img#basic{
        z-index: 100;
        height: 50%;
        position: absolute;
        margin-left: 100px;
        margin-top: -230px;
    }
    img#part_a{
        z-index: 200;
        height: 50%;
        position: absolute;
        margin-left: 100px;
        margin-top: -230px;
    }
    img#part_b{
        z-index: 300;
        height: 50%;
        position: absolute;
        margin-left: 100px;
        margin-top: -230px;
    }

    img#part_c{
        z-index: 300;
        height: 50%;
        position: absolute;
        margin-left: 100px;
        margin-top: -230px;
    }

    img#part_d{
        z-index: 300;
        height: 50%;
        position: absolute;
        margin-left: 100px;
        margin-top: -230px;
    }

    img#part_e{
        z-index: 300;
        height: 50%;
        position: absolute;
        margin-left: 100px;
        margin-top: -344px;
    }

     img#part_f{
        z-index: 300;
        height: 50%;
        position: absolute;
        margin-left: 100px;
        margin-top: -355px;
    }


</style>



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
   
            <h3 class="lato">{{trans('Exterior Simulation')}}</h3>               
            <div class="preview-one">
                        <button class="jscolor {onFineChange:'setColorA(this)'}">A</button>
                        <button class="jscolor {onFineChange:'setColorB(this)'}">B</button>
                        
                        <br/><br/>

                        <img id="basic" src="{{ url('assets/img/feature/basic-home.png') }}">
                        <img id="part_b" class="jscolor" src="{{ url('assets/img/feature/base-b.png') }}">
                        <img id="part_a" class="jscolor" src="{{ url('assets/img/feature/base-a.png') }}">
            </div>

            <h3 class="lato">{{trans('Interior Simulation')}}</h3>               
            <div class="preview-two">
                        <button class="jscolor {onFineChange:'setColorC(this)'}">C</button>
                        <button class="jscolor {onFineChange:'setColorD(this)'}">D</button>
                        <button class="jscolor {onFineChange:'setColorE(this)'}">E</button>
                        <button class="jscolor {onFineChange:'setColorF(this)'}">F</button>
                        
                        <br/><br/>

                        <img id="basic" src="{{ url('assets/img/feature/basic_b.png') }}">
                        <img id="part_d" class="jscolor" src="{{ url('assets/img/feature/base-d.png') }}">
                        <img id="part_c" class="jscolor" src="{{ url('assets/img/feature/base-c.png') }}">
                        <img id="part_e" class="jscolor" src="{{ url('assets/img/feature/base-e.png') }}">
                        <img id="part_f" class="jscolor" src="{{ url('assets/img/feature/base-f.png') }}">
            </div>

<!-- 
        </tbody>
      </table> -->
  </div>
  </div> {{-- <div class="whiteBox"> --}}
</section> {{-- <section id="about" class="outline"> --}}
@endsection