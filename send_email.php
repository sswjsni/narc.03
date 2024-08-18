<?php
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $numero = $_POST['numero'];
  $email_subject = $_POST['email_subject'];
  $mensagem = $_POST['mensagem'];

  $to = "narciso.pinto.mme@gmail.com";
  $subject = $email_subject;
  $body = "Nome: $nome\nEmail: $email\nNúmero: $numero\nMensagem: $mensagem";
  $headers = "From: $email";

  mail($to, $subject, $body, $headers);

  echo "Mensagem enviada com sucesso!";
?>