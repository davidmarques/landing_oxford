<?php

// Destinatário
  $to = "ivendas@inepe.com.br";

  // Assunto do e-mail
  $subject = "Contato - Oxford Medical Experience";

  // Campos do formulário de contato
  $name		= $_POST['name'];
  $phone	= $_POST['phone'];
  $email	= $_POST['email'];

  // Monta o corpo da mensagem com os campos
  $body  = "Nome: $name \n";
  $body .= "Telefone: $phone \n";
  $body .= "E-mail: $email \n";

  // Cabeçalho do e-mail
  $header  = "From: Landing Page <$to> ";
  // $header .= "Content-Type: text/html; charset=iso-8859-1 ";

  mail($to, $subject, $body, $header);

  $msg = "Sua mensagem foi enviada com sucesso!";

  // Mostra a mensagem acima e redireciona para index.php
  // echo "<script>location.href='index.php';</script>";





?>