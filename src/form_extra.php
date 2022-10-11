<html>
    <head>
        <title>Cadastro de Compra</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Cadastro de Compra</h1>
        <form action="pagina_extra.php" method="POST"> 
            <input type="hidden" name="operacao" value="inserir">
            <p>Nome: <input type="text" name="nome"></p>
            <p>E-mail: <input type="text" name="email"></p>
            <p>Senha: <input type="password" name="senha"></p>
            <p>Repita a senha: <input type="password" name="senha_rep"></p>
            <p>Data de Nascimento: <input type="date" name="data_nasc"></p>              
            <p><input type="submit" value="Enviar"></p> 
        </form>

        <h1>Mostrar clientes</h1>
        <p>Clique no botão abaixo para mostrar os clientes cadastrados</p>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="exibir">
            <p><input type="submit" value="Mostrar clientes"></p>
        </form>

        <h1>Buscar clientes</h1>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="buscar">
            <p>Nome: <input type="text" name="nome" size="10"></p>
            <p><input type="submit" value="Buscar"></p>
        </form>

        <h1>Cadastro de serviços</h1>
        <form action="pagina_extra.php" method="POST">
            <input type="hidden" name="operacao" value="servicos">
            <p>Nome: <input type="text" name="nome" size="10"></p>
            <p>Preço: <input type="text" name="preco" size="10"></p>
            <a href="listaservicos.php">lista de serviços</a>
            <p><input type="submit" value="cadastar serviços"></p>
        </form>
    </body>    
</html>