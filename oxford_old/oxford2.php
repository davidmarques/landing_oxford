<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
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
  background-color: rgba(0,0,0,0.5);
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


.campos-form{
margin:0 !important;
margin-bottom: 0.5rem !important;
}
</style>

<style>
.callout-card {
  background: white;
  border: 1px solid #333;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
/*  margin: 1rem 0;*/
  overflow: hidden; }
  .callout-card .card-label {
    border-color: transparent #333 transparent transparent;
    border-color: rgba(255, 255, 255, 0) #333333 rgba(255, 255, 255, 0) rgba(255, 255, 255, 0); }
  .callout-card.primary {
    border-color: #446cb3; }
    .callout-card.primary .card-label {
      border-color: transparent #446cb3 transparent transparent;
      border-color: rgba(255, 255, 255, 0) #446cb3 rgba(255, 255, 255, 0) rgba(255, 255, 255, 0); }
  .callout-card.secondary {
    border-color: #adb2bd; }
    .callout-card.secondary .card-label {
      border-color: transparent #adb2bd transparent transparent;
      border-color: rgba(255, 255, 255, 0) #adb2bd rgba(255, 255, 255, 0) rgba(255, 255, 255, 0); }
  .callout-card.info {
    border-color: #89c4f4; }
    .callout-card.info .card-label {
      border-color: transparent #89c4f4 transparent transparent;
      border-color: rgba(255, 255, 255, 0) #89c4f4 rgba(255, 255, 255, 0) rgba(255, 255, 255, 0); }
  .callout-card.alert {
    border-color: #f22613; }
    .callout-card.alert .card-label {
      border-color: transparent #f22613 transparent transparent;
      border-color: rgba(255, 255, 255, 0) #f22613 rgba(255, 255, 255, 0) rgba(255, 255, 255, 0); }
  .callout-card.success {
    border-color: #87d37c; }
    .callout-card.success .card-label {
      border-color: transparent #87d37c transparent transparent;
      border-color: rgba(255, 255, 255, 0) #87d37c rgba(255, 255, 255, 0) rgba(255, 255, 255, 0); }
  .callout-card.warning {
    border-color: #f89406; }
    .callout-card.warning .card-label {
      border-color: transparent #f89406 transparent transparent;
      border-color: rgba(255, 255, 255, 0) #f89406 rgba(255, 255, 255, 0) rgba(255, 255, 255, 0); }
  .callout-card .card-label {
    margin-bottom: 15px;
    background-color: #333;
    padding: 10px;
/*    border-style: solid;
    border-width: 0 70px 40px 0;
    float: right;
    height: 0px;
    width: 0px;
    transform: rotate(360deg); */}
  .callout-card .callout-card-content {
    padding: 0.5rem 1.5rem 0.875rem;
    text-align: left;
    color: #333;
     }
  .callout-card.radius {
    border-radius: 0.6rem; }
  .callout-card .label-text {
    color: #fff;
    font-weight: bolder;
    position: relative;
/*    right: -40px;
    top: 2px;
    white-space: nowrap;
    transform: rotate(30deg); */}


.block {
  text-align: center;
/*  background: #c0c0c0;
  border: #a0a0a0 solid 1px;
  margin: 20px;*/
}
 
.block:before {
  content: '\200B';
/*   content: '';
  margin-left: -0.25em; */
  display: inline-block;
  height: 100%; 
  vertical-align: middle;
 }
 
.centered {
  display: inline-block;
  vertical-align: middle;
  width: 90%;
/*  padding: 10px 15px;*/
/*  border: #a0a0a0 solid 1px;*/
/*  background: #f5f5f5;*/
 }

 .button{
  background-color:#333;
}
</style>


<div class="bg_content">
      <div class="off-canvas-wrap move-right" data-offcanvas>
          <div class="large-6 medium-6 columns esquerda todaltura imagem-esquerda">
            <div class="imagem-form" style="width:100%;height:100%"><!-- <img style="width:100%; height:auto" src="img/texto-pg2.png"/> --></div>
          </div>
          <div class="large-6 medium-6 columns direita todaltura">








<div class="block" style="height: 100%;">
    
    <div class="centered">



        <div class="callout-card">
          <div class="card-label">
            <div class="label-text">Inscreva-se!</div>
          </div>
          <div class="callout-card-content">

<?php
$counter=0;
while($counter<5){
echo "<label class='label-field' style='color:#555;margin-bottom:15px'>Nome<input type='text' class='small-12.columns campos-form'></label>";
$counter++;
}

?>
<input style="" type="submit" class="button large-12 medium-12 small-12 columns" value="Enviar">


          </div>
        </div>




    </div>
    
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