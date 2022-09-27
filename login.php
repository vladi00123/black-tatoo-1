<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="black-tatoo.css">
    <title>Tela de login</title>
    <style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    background: black;
}
.box{
    color: black;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: WHITE;
    padding: 15px;
    border-radius: 15px;
    width: 20%;
}
fieldset{
    border: 3px solid black;
}
div{
    background-color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 80px;
    border-radius: 15px;
    color: black;
}
legend{
    border: 1px solid black;
    padding: 10px;
    text-align: center;
    background-color: black;
    border-radius: 8px;
    color : white;
}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid black;
    outline: none;
    color: black;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}
input{
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
}
.inputSubmit{
    background-color: black;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    
}
.inputSubmit:hover{
    background-color: white;
    cursor: pointer;
}
.btm {
    background-color: black;
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;

}
</style>
</head>
<body>
    <a href="index.php"class="btm">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
