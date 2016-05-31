<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>INEPE - Landing Page</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />

  
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/vendor/normalize.js"></script>
  <script src="js/vendor/modernizr.js"></script>
  <script src="js/jquery.maskedinput.js"></script>

    <script>
        $(document).foundation();
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#vai").click(function() {
                $("#tudo").animate({
                    left: "-100%",
                }, 500);
            });
            $("#vem").click(function() {
                $("#tudo").animate({
                    left: "0",
                }, 500);
            });
            $("#animado").click(reanima);
            DoRotate(360);

            $('#form').submit(function(e) {
                // setamos para quando submeter não atualizar a pagina
                e.preventDefault();
                // o serialize retorna uma string pronta para ser enviada
                var formdata = $('#form').serialize()
                $.ajax({
                    url: 'email.php',
                    type: 'post',
                    data: formdata,
                    success: function(pre) {
                        $('#mensagem').html("<h4>Sucesso!</h4>Seus dados foram enviados");
                        $('#formulario').hide();
                        $('#mensagem').show();

                    }
                });
            });
        });
    </script>
    <script>
        function reanima() {
            $("#animado").removeAttr('style');
            setTimeout(DoRotate, 100, 360);
        }

        function DoRotate(d) {
            $("#animado").css({
                'animation': 'animationFrames ease-in-out 1.5s',
                '-moz-transform': 'rotate(' + d + 'deg)',
                '-webkit-transform': 'rotate(' + d + 'deg)',
                '-o-transform': 'rotate(' + d + 'deg)',
                '-ms-transform': 'rotate(' + d + 'deg)',
                'transform': 'rotate(' + d + 'deg)'
            });
        }
    </script>

</head>

<body>
    <div id="pagina">
        <div id="tudo">
            <div id="panel_direita">


                <div id="vai" title="Avançar">
                    <img src="img/seta-d.png" class="seta">
                </div>


                <div class="bg_content">
                    <div id="back-pag1">

                        <div class="box_ini">
                            <div class="box_pontilhado">
                                <div id="animado" class="avioes"></div>
                            </div>
                        </div>

                    </div>
                </div>





            </div>


            <div id="panel_esquerda">
                <div id="vem" title="Voltar">
                    <img src="img/seta-e.png" class="seta">
                </div>

                <div class="container">


                    <div class="bg_content">


                        <div class="off-canvas-wrap move-right" data-offcanvas>
                            <div class="large-6 medium-6 columns esquerda todaltura">

                                <div class="block" style="height: 100%;">

                                    <div class="centered">
                                        <img style="width:100%; height:auto" src="img/texto-bg2.png" />
                                    </div>
                                </div>





                            </div>
                            <div class="large-6 medium-6 columns direita todaltura">





                                <div class="block" style="height: 100%;">

                                    <div class="centered centered-form">



                                        <div class="callout-card">
                                            <div class="card-label">
                                                <div class="label-text">Inscreva-se!</div>
                                            </div>
                                            <div class="callout-card-content">
                                                <div id="mensagem" style="display:none"></div>
                                                <div id="formulario">
                                                <form action="email.php" method="post" id="form">
                                                    <label class='label-field' style='color:#555;margin-bottom:15px'>Nome
                                                        <input type="text" name="name" required class='small-12.columns campos-form'>
                                                    </label>
                                                    <label id="phone" class='label-field' style='color:#555;margin-bottom:15px'>Telefone
                                                        <input type="tel" name="phone" id="phone" required class='small-12.columns campos-form'>
                                                    </label>
                                                    <label class='label-field' style='color:#555;margin-bottom:15px'>E-mail
                                                        <input type="email" name="email" required class='small-12.columns campos-form'>
                                                    </label>


                                                    <input style="" type="submit" class="button large-12 medium-12 small-12 columns" value="Enviar">
                                                </form>
                                            </div>

                                            </div>
                                        </div>




                                    </div>

                                </div>




                            </div>

                        </div>
                    </div>
                </div>



            </div>



        </div>


    </div>

    </div>
    </div>

</body>

</html>