<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$to = "gabriel@estudiolabomba.com";
$subject = "Contato de $nome - La Maldición";
$message = "<strong>Nome:</strong> $nome <br><strong>Telefone:</strong> $telefone<br><strong>E-mail:</strong> $email <br><strong>Mensagem:</strong> $mensagem ";
$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=iso-8859-1\n";
$header .= "From: $email\n";
mail($to, $subject, $message, $header);
 
echo "<script type='text/javascript'>window.alert('".$nome."! Sua mensagem foi enviada com sucesso!');</script>";
echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=/">';
exit;
?>