<?php
include "conexao.php";
include "gerars.php";

$email = $_POST["email"];
$senha = gerar_senha(10, true, true, true, false);
$hash = password_hash($senha, PASSWORD_DEFAULT);


$sql = "UPDATE cliente SET senha = '$hash' WHERE email = '$email' ";
mysqli_query($mysqli, $sql);
mysqli_close($mysqli);

include "envia_email.php";
envia_email($email, "Recuperação de senha");

echo "<a href='index.php'>Início</a>";

?>
