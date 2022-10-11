<?php
            include "conexao.php";
            session_start();

            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $sql1 = "SELECT * FROM usuario WHERE email = '$email' AND senha= '$senha';";
            $res1 = mysqli_query($mysqli, $sql1);

            if(mysqli_num_rows($res1) == 1){
                echo"piruzin";
            session_start();
            $_SESSION['id'] = $usuario ['id'];
            $_SESSION['email'] = $usuario ['email'];
            $_SESSION['senha'] = $usuario ['senha'];
            header("location: cliente.php");
            }
            else{
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Nome de usuário ou senha incorretos")';  
                echo '</script>';
                }

            $sql2 = "SELECT * FROM funcionario WHERE email = '$email' AND senha= '$senha';";
            $res2 = mysqli_query($mysqli, $sql2);

            if(mysqli_num_rows($res3) == 1){
                session_start();
                $_SESSION['id'] = $funcionario ['id'];
                $_SESSION['email'] = $funcionario ['email'];
                $_SESSION['senha'] = $funcionario ['senha'];
                header("location: funcionario.php");
            }
            else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Nome de usuário ou senha incorretos")';  
            echo '</script>';
            }

            $sql3 = "SELECT * FROM administrador WHERE email = '$email' AND senha= '$senha';";
            $res3 = mysqli_query($mysqli, $sql3);

            
            if(mysqli_num_rows($res2) == 1){ 
                session_start();
                $_SESSION['id'] = $administrador ['id'];
                $_SESSION['email'] = $administrador ['email'];
                $_SESSION['senha'] = $administrador ['senha'];
                header("location: administrador.php");
                }
                else{
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Nome de usuário ou senha incorretos")';  
                    echo '</script>';
            }
?>