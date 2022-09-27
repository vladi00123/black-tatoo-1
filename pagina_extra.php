<?php
    include_once("conexao.php");
?>
<html>
    <head>
        <title>Dados Cadastrados</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Dados Cadastrados</h1>
<?php
    $operacao = $_POST["operacao"];

    if($operacao == "inserir")
    {
    $nome = $_POST["nome"]; 
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $data_nasc = $_POST["data_nascimento"];
    $erro = 0;

    if(empty($nome) or strstr($nome, ' ') == false){
        echo "Por favor, preencha o nome completo.<br>";
        $erro = 1;
    }
    
     if(empty($email) < 8 or strstr($email, '@') == false){
    echo "Por favor, preencha o e-mail corretamente.<br>";
    $erro = 1;
    }

    if(empty($senha) < 8 or strstr($senha, '@') == false){
        echo "Por favor, preencha o e-mail corretamente.<br>";
        $erro = 1;
    }

    if(empty($data_nasc)){
        echo "Por favor, preencha a data.<br>";
        $erro = 1;
    }

    if($erro == 0){
            $sql = "INSERT INTO cliente (nome,email,senha,data_nasc)";
            $sql .= "VALUES ('$nome','$email','$senha','$data_nascimento');";  
            mysqli_query($mysqli,$sql);

            header("location: inicio.php");

    }
    }

    elseif($operacao == "exibir"){
        
        $mysqli = mysqli_connect("localhost","email","senha","data_nasc");
        $sql = "SELECT * FROM cliente;";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
        $cliente = mysqli_fetch_array($res);
        echo "Nome: ".$cliente["nome"]." <br>";
        echo "E-mail: ".$cliente["email"]." <br>";
        echo "Data de nascimento: ".$cliente["data_nasc"]."<br>";
        echo "----------------------------------"."<br>";
        }
        mysqli_close($mysqli);
        
    }
    elseif($operacao == "buscar"){
        
        $mysqli = mysqli_connect("localhost","email","senha","data_nasc");
        $nome = $_POST["nome"];
        $sql = "SELECT * FROM cliente WHERE nome LIKE '%$nome%';";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
        $cliente = mysqli_fetch_array($res);
        echo "Nome: ".$cliente["nome"]." <br>";
        echo "E-mail: ".$cliente["email"]." <br>";
        echo "Data de nascimento: ".$cliente["data_nasc"]."<br>";
        echo "----------------------------------"."<br>";
        }
        mysqli_close($mysqli);
        
    }
?>
    </body>
</html>
