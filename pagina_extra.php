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
    $telefone = $_POST["telefone"];
    $sexo = $_POST["sexo"];
    $data_nasc = $_POST["data_nasc"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $endereco = $_POST["endereco"];
    $erro = 0;

    if(empty($nome) or strstr($nome, ' ') == false){
        echo "Por favor, preencha o nome completo.<br>";
        $erro = 1;
    }

    if(empty($senha) < 8 or strstr($senha, '@') == false){
        echo "Por favor, preencha o e-mail corretamente.<br>";
        $erro = 1;
    }

    if(strlen($email) < 10 or strstr($email, '@') == false){
        echo "Por favor, preencha o e-mail corretamente.<br>";
        $erro = 1;
    }

    if(empty($telefone) < 10 or strstr($telefone, ' ') == false){
        echo "Por favor, preencha o e-mail corretamente.<br>";
        $erro = 1;
    }

    if(empty($data_nasc)){
        echo "Por favor, preencha a data.<br>";
        $erro = 1;
    }

    if(empty($bandeiraCartao)){
        echo "Por favor, escolha uma bandeira do cartão de crédito.<br>";
        $erro = 1;
    }

    if($erro == 0){
        $mysqli = mysqli_connect("localhost","estudante","123","ds302");
        $sql = "INSERT INTO cliente (nome,email,data_nasc,cartao)";
        $sql .= "VALUES ('$nome','$email','$data_nasc', '$bandeiraCartao');";  
        mysqli_query($mysqli,$sql);
        mysqli_close($mysqli);

        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Data de nascimento: $data_nasc <br>";
        echo "Bandeira do cartão de crédtio: $bandeiraCartao <br>"; 
    }
    }

    elseif($operacao == "exibir"){
        
        $mysqli = mysqli_connect("localhost","estudante","123","ds302");
        $sql = "SELECT * FROM cliente;";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
        $cliente = mysqli_fetch_array($res);
        echo "Nome: ".$cliente["nome"]." <br>";
        echo "E-mail: ".$cliente["email"]." <br>";
        echo "Data de nascimento: ".$cliente["data_nasc"]."<br>";
        echo "Bandeira do cartão: ".$cliente["cartao"]."<br>";
        echo "----------------------------------"."<br>";
        }
        mysqli_close($mysqli);
        
    }
    elseif($operacao == "buscar"){
        
        $mysqli = mysqli_connect("localhost","estudante","123","ds302");
        $nome = $_POST["nome"];
        $sql = "SELECT * FROM cliente WHERE nome LIKE '%$nome%';";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
        $cliente = mysqli_fetch_array($res);
        echo "Nome: ".$cliente["nome"]." <br>";
        echo "E-mail: ".$cliente["email"]." <br>";
        echo "Data de nascimento: ".$cliente["data_nasc"]."<br>";
        echo "Bandeira do cartão: ".$cliente["cartao"]."<br>";
        echo "----------------------------------"."<br>";
        }
        mysqli_close($mysqli);
        
    }
?>
    </body>
</html>
