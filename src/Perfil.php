<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
<div class="box">
        <form action="pagina_extra.php" method="POST">
        <input type="hidden" name="operacao" value="editar">
            <fieldset>
                <legend><b>Editar dados</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required value="<?php echo $cod_cliente?>">
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required value="<?php echo $cod_cliente?>">
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" requiredvalue="<?php echo $cod_cliente?>">
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" requiredvalue="<?php echo $cod_cliente?>">
                <br><br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>