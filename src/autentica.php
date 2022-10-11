<?php
     session_start();
     if(isset($_SESSION["email"])){
     $email = $_SESSION["email"]
}
     session_start();
     if(isset($_SESSION["senha"])){
     $senha = $_SESSION["senha"]
     }
     if(empty($email) or empty($senha)){
        echo"você não fez login!";
        echo "<p><a href='login.php'>Pagina de login</a>";
        exit;
     }
     else{
        include"conecta_msql.inc";
        $sql ="SELECT * FROM cliente WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);  
        
        // testa se não encontrou o e-mail no banco de dados 
        if(mysqli_num_rows($res) != 1){
            unset($_SESSION["email"]);
            unset($_SESSION["senha"]);
            echo "você não o login!";
            echo "<p><a href='login.php'>Pagina de login</a>";
            exit;
        }
        else{
            $cliente = mysqli_fetch_array($res);
            // testa se a senha está errada
            if($senha !=$cliente["senha"]){
                unset($_SESSION["email"]);
                unset($_SESSION["senha"]);
                echo "você não o login!";
                echo "<p><a href='login.php'>Pagina de login</a>";
                exit;
            }

        }
        mysqli_close($mysqli);
        }