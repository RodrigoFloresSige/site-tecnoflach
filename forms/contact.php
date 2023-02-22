<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  //obtém os valores dos campos
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $mensagemSite = $_POST['message'];
  $destinatario = 'tecnoflach@hotmail.com';
  
  $corpo = "
    <html>
    <body>
      <h1>Contato do site</h1>
      <p><strong>Nome:</strong> $nome</p>
      <p><strong>E-mail:</strong> $email</p>
      <p><strong>Mensagem:</strong></p>
      <p>$mensagemSite</p>
    </body>
    </html>
  ";

  // Cabeçalhos do email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: atendimento@tecnoflach.com.br" . "\r\n";

   // Enviar o email
   if (mail($destinatario, "Contato do site", $corpo, $headers)) {
    echo "Email enviado com sucesso!";
  } else {
    echo "Erro ao enviar o email.";
  }
}
?>
