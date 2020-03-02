
<style>

/* ------------------- */
/* TEMPLATE        -- */
/* ----------------- */

@import url(https://fonts.googleapis.com/css?family=Lato:400,700,900,300);

body { 
  height: 100%;
  background-color: #333; 
  color: whitesmoke; 
  font-size: 16px; 
  font-family: 'Lato';
} 
h1 { font-size: 32px; }
h2 { font-size: 26px; }
h3 { font-size: 18px; }
p { margin: 0 0 15px; line-height: 24px; color: gainsboro; }
a { color: dodgerblue; text-decoration: none; border-bottom: 1px dotted; }
a:hover { color: tomato; }

.container { 
  max-width: 960px; 
  height: 100%;
  margin: 0 auto; 
  padding: 20px;
}

/* ------------------- */
/* PEN STYLES      -- */
/* ----------------- */

/* MAKE IT CUTE ----- */
.tabs {
  position: relative;
  display: flex;
  min-height: 300px;
  border-radius: 8px 8px 0 0;
  overflow: hidden;
}

.tabby-tab {
  flex: 1;
}

.tabby-tab label {
  display: block;
  box-sizing: border-box;
  /* tab content must clear this */
    height: 40px;
  
  padding: 10px;
  text-align: center;
  background: #9768D1;
  cursor: pointer;
  transition: background 0.5s ease;
  
}

.tabby-tab label:hover {
  background: #7B52AB;
}

.tabby-content {
  position: absolute;
  
  left: 0; bottom: 0; right: 0;
  /* clear the tab labels */
    top: 40px; 
  
  padding: 20px;
  border-radius: 0 0 8px 8px;
  background: #553285;
  
  transition: 
    opacity 0.8s ease,
    transform 0.8s ease   ;
  
  /* show/hide */
    opacity: 0;
    transform: scale(0.1);
    transform-origin: top left;
  
}

.tabby-content img {
  float: left;
  margin-right: 20px;
  border-radius: 8px;
}


/* MAKE IT WORK ----- */

.tabby-tab [type=radio] { display: none; }
[type=radio]:checked ~ label {
  background: #553285;
  z-index: 2;
}

[type=radio]:checked ~ label ~ .tabby-content {
  z-index: 1;
  
  /* show/hide */
    opacity: 1;
    transform: scale(1);
}

/* BREAKPOINTS ----- */
@media screen and (max-width: 767px) {
  .tabs { min-height: 400px;}
}

@media screen and (max-width: 480px) {
  .tabs { min-height: 580px; }
  .tabby-tab label { 
    height: 60px;
  }
  .tabby-content { top: 60px; }
  .tabby-content img {
    float: none;
    margin-right: 0;
    margin-bottom: 20px;
  }
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


<div class="container">
  
  <h1>Tabby Tabs</h1>

  <div class="tabs">
    <div class="tabby-tab">
      <input type="radio" id="tab-1" name="tabby-tabs" checked>
      <label for="tab-1">Tabby Tab 1</label>
                  <div class="preview-one">
                        <button class="jscolor {onFineChange:'setColorA(this)'}">A</button>
                        <button class="jscolor {onFineChange:'setColorB(this)'}">B</button>
                        
                        <br/><br/>

                        <img id="basic" src="{{ url('assets/img/feature/basic-home.png') }}">
                        <img id="part_b" class="jscolor" src="{{ url('assets/img/feature/base-b.png') }}">
                        <img id="part_a" class="jscolor" src="{{ url('assets/img/feature/base-a.png') }}">
            </div>
    </div>

    <div class="tabby-tab">
      <input type="radio" id="tab-2" name="tabby-tabs">
      <label for="tab-2">Tabby Tab 2</label>
      <div class="tabby-content">
        <img src="http://i63.tinypic.com/wtykg4.png"/>
        <p>Cats go for world domination if it fits, i sits, meowwww but claw drapes, or sleep in the bathroom sink. Missing until dinner time under the bed, or eat from dog's food hide from vacuum cleaner kick up litter but lie on your belly and purr when you are asleep.</p>
      </div>
    </div>

    <div class="tabby-tab">
      <input type="radio" id="tab-3" name="tabby-tabs">
      <label for="tab-3">Tabby Tab 3</label>
      <div class="tabby-content">
          <img src="http://i66.tinypic.com/wuhy7b.png"/>
          <p>Throwup on your pillow wake up human for food at 4am and hide when guests come over, yet inspect anything brought into the house.</p>
      </div>
    </div>

    <div class="tabby-tab">
      <input type="radio" id="tab-4" name="tabby-tabs">
      <label for="tab-4">Tabby Tab 4</label>
      <div class="tabby-content">
        <img src="http://i63.tinypic.com/kakc9i.png"/>
        <p>Use lap as chair love to play with owner's hair tie pooping rainbow while flying in a toasted bread costume in space. Run in circles loves cheeseburgers, nap all day kick up litter. Stick butt in face hide when guests come over.</p>
        
      </div>
    </div>
    
  </div>


  </div>
  </div> {{-- <div class="whiteBox"> --}}
</section> {{-- <section id="about" class="outline"> --}}
@endsection