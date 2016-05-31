<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
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

.imagem-form{
  background-image: url("img/texto-pg2.png");
  background-repeat: no-repeat;
  background-size: contain;
  background-position:center;
}

.esquerda{
  background-color: rgba(0,0,0,0.5);
}
.direita{
  background-color: rgba(255,255,255,0.5);
}

.form-container{
  padding: 20px;
}

// Small screens
@media only screen {
.todaltura{
  position: relative;
  height:100%;
}
.imagem-esquerda{
height:450px;
}
} /* Define mobile styles */

@media only screen and (max-width: 40em) {
  .todaltura{
  position: relative;
  height:100%;
}
.imagem-esquerda{
height:450px;
}
  } /* max-width 640px, mobile-only styles, use when QAing mobile issues */

// Medium screens
@media only screen and (min-width: 40.063em) {
.todaltura{
  position: relative;
  height:100%;
}
.imagem-esquerda{
height:450px;
}
} /* min-width 641px, medium screens */

@media only screen and (min-width: 40.063em) and (max-width: 64em) {
.todaltura{
  position: relative;
  height:100vh;
}
.direita{
overflow:scroll;
overflow: auto;
}
} /* min-width 641px and max-width 1024px, use when QAing tablet-only issues */

// Large screens
@media only screen and (min-width: 64.063em) {
.todaltura{
  position: relative;
  height:100vh;
}
.direita{
overflow:scroll;
overflow: auto;
}
  } /* min-width 1025px, large screens */

@media only screen and (min-width: 64.063em) and (max-width: 90em) {
.todaltura{
  position: relative;
  height:100vh;
}
.direita{
overflow:scroll;
overflow: auto;
}
  } /* min-width 1025px and max-width 1440px, use when QAing large screen-only issues */

// XLarge screens
@media only screen and (min-width: 90.063em) {
.todaltura{
  position: relative;
  height:100vh;
}
.direita{
overflow:scroll;
overflow: auto;
}
  } /* min-width 1441px, xlarge screens */

@media only screen and (min-width: 90.063em) and (max-width: 120em) {
.todaltura{
  position: relative;
  height:100vh;
}
.direita{
overflow:scroll;
overflow: auto;
}
  } /* min-width 1441px and max-width 1920px, use when QAing xlarge screen-only issues */

// XXLarge screens
@media only screen and (min-width: 120.063em) {
.todaltura{
  position: relative;
  height:100vh;
}
.direita{
overflow:scroll;
overflow: auto;
}
  } /* min-width 1921px, xxlarge screens */

</style>
<div class="bg_content">
      <div class="off-canvas-wrap move-right" data-offcanvas>
          <div class="large-6 medium-6 columns esquerda todaltura imagem-esquerda">
            <div class="imagem-form" style="width:100%;height:100%"><!-- <img style="width:100%; height:auto" src="img/texto-pg2.png"/> --></div>
          </div>
          <div class="large-6 medium-6 columns direita todaltura">
            <div class="form-container">
              <div class="panel callout radius">
              <h2>Reserve!</h2>
              <input type="text" class="small-12.columns">

<?php
$counter=0;
while($counter<5){
echo "<input type='text' class='small-12.columns'>";
$counter++;
}

?>
              <div class="small-3 small-centered columns"><input type="submit" class="button large-12 medium-12 small-12 columns" value="Enviar"></div>
            </div>
          </div>
          </div>
      </div>
</div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>