<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="../foundation/css/foundation.css">
    <link rel="stylesheet" href="../foundation/css/app.css">
    <link rel="stylesheet" href="../foundation/foundation-icons/foundation-icons.css" />
  </head>
  <body>
<style>
.bg_content{
  position:absolute;
  min-width:100%;
  min-height:100%;
  background-image: url("img/bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.box_ini{
  position: absolute;
  height:70vh;
  width:70vh;
  left:50%;
  top:50%;
  margin-left: -35vh;
  margin-top: -35vh;
  background-image: url("img/oxford_inicial-principal.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}



.box_pontilhado{
  position:relative;
background-image: url("img/oxford_inicial-pontilhado.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
height:100%;
width:100%;
}
/*ANIMAÇÃO INICIO*/
.avioes{
  position:relative;
  background-image: url("img/oxford_inicial-avioes.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  width:100%;
  height:100%;
}
.animated_el:{
  -webkit-animation-delay: 2s; /* Chrome, Safari, Opera */
  animation-delay: 2s;

  animation: animationFrames ease-in-out 1.5s;
  animation-iteration-count: 1;
  transform-origin: 50% 50%;
  animation-fill-mode:forwards; /*when the spec is finished*/

  -webkit-animation: animationFrames ease-in-out 1.5s;
  -webkit-animation-iteration-count: 1;
  -webkit-transform-origin: 50% 50%;
  -webkit-animation-fill-mode:forwards; /*Chrome 16+, Safari 4+*/ 

  -moz-animation: animationFrames ease-in-out 1.5s;
  -moz-animation-iteration-count: 1;
  -moz-transform-origin: 50% 50%;
  -moz-animation-fill-mode:forwards; /*FF 5+*/

  -o-animation: animationFrames ease-in-out 1.5s;
  -o-animation-iteration-count: 1;
  -o-transform-origin: 50% 50%;
  -o-animation-fill-mode:forwards; /*Not implemented yet*/

  -ms-animation: animationFrames ease-in-out 1.5s;
  -ms-animation-iteration-count: 1;
  -ms-transform-origin: 50% 50%;
  -ms-animation-fill-mode:forwards; /*IE 10+*/
}

@keyframes animationFrames{
  0% {
    transform:  rotate(0deg);
  }
  100% {
    transform:  rotate(-360deg) ;
  }
}

@-moz-keyframes animationFrames{
  0% {
    -moz-transform:  rotate(0deg) ;
  }
  100% {
    -moz-transform:  rotate(-360deg) ;
  }
}

@-webkit-keyframes animationFrames {
  0% {
    -webkit-transform:  rotate(0deg) ;
  }
  100% {
    -webkit-transform:  rotate(-360deg) ;
  }
}

@-o-keyframes animationFrames {
  0% {
    -o-transform:  rotate(0deg) ;
  }
  100% {
    -o-transform:  rotate(-360deg) ;
  }
}

@-ms-keyframes animationFrames {
  0% {
    -ms-transform:  rotate(0deg) ;
  }
  100% {
    -ms-transform:  rotate(-360deg) ;
  }
}
/*ANIMAÇÃO FIM*/


</style>


<div class="bg_content">


<div class="box_ini">
<div class="box_pontilhado">
<div id="animado" class="avioes"></div>
</div>
</div>


</div>

    <script src="../foundation/js/vendor/jquery.js"></script>
    <script src="../foundation/js/vendor/what-input.js"></script>
    <script src="../foundation/js/vendor/foundation.js"></script>
    <script src="../foundation/js/app.js"></script>
<script>
/*setTimeout(function(){ $("#animado").addClass('animated_el'); }, 3000);*/
/*$( window ).load(function() {$("#animado").addClass('animated_el');})*/
$("#animado").click(reanima);
function reanima(){
$("#animado").removeAttr('style');
setTimeout(DoRotate,100,360);
}



$(document).ready(function () { 
    DoRotate(360);
});

function DoRotate(d) {
    $("#animado").css({
          'animation':'animationFrames ease-in-out 1.5s',
          '-moz-transform':'rotate('+d+'deg)',
          '-webkit-transform':'rotate('+d+'deg)',
          '-o-transform':'rotate('+d+'deg)',
          '-ms-transform':'rotate('+d+'deg)',
          'transform': 'rotate('+d+'deg)'
     });  
}





</script>
  </body>
</html>