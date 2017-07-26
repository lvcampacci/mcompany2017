<?php

// Passando os dados obtidos pelo formuláo para as variáis abaixo
$quebra_linha = "\n";
$emailsender='gerencia@mcompanymt.com.br';
$nomeremetente     = "Formulario do Site";
$emailremetente    = "gerencia@mcompanymt.com.br";
$emaildestinatario = "gerencia@mcompanymt.com.br";
$assunto           = "Formulario do Site";
$mensagem          = "Texto do Conteudo";
$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = $name.' '.$email.' '.$message;


/* Montando o cabeçho da mensagem */
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
// Perceba que a linha acima conté"text/html", sem essa linha, a mensagem nãchegaráormatada.
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
$headers .= "Reply-To: ".$emailremetente.$quebra_linha;
// Note que o e-mail do remetente serásado no campo Reply-To (Responder Para)

/* Enviando a mensagem */
mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender);


header("Location: http://www.mcompany.com.br");
?>
