<?php

include "envia_email.php";

$nome = "Fulano de tal";
$data = "10/11/2022";
$email = "mimsay003@gmail.com";

$assunto = "Exemplo de e-mail pelo PHP";

$mensagem = "Dados cadastra:<br>";
$mensagem .= "<br><br>Nome</br>" $nome;
$mensagem .= "<br><br>Data</br>" $data;
$mensagem .= "<br><br>Email</br>" $email;

if(envia_email($email, $assunto, $mensagem)) {
    echo "E-mail enviado com sucesso!"
}
else {
    echo "Falha no envio do e-mail!";
}
?>