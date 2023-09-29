<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="../java/comandos.js"></script>
</head>
<body>
        <div  id="campos" align="center">
            <form method="post" action="../banco/cadastroProduto.php">
            <div id="produtos1" class="perguntas">
            <input type="text" name="nome" placeholder="Digite o nome do produto">
            <textarea name="descricao">
            </textarea>
            <select name="distri">
                <?php
                include "../banco/funcoes.php";
                PesquisaDistribuidoras();
                ?>
            </select>
            <button type="button" onclick="proximo(produtos1,produtos2)">Proximo</button>
            </div>
            <div id="produtos2" class="perguntas" style="display:none;" >
            <input type="text" name="preco" placeholder="Digite o preço do produto">
            <input type="text" name="estoque" placeholder="Digite a quantidade em estoque">
            <input type="submit" value="Cadastrar">
            <button type="button" onclick="proximo(produtos2,produtos1)">Voltar</button>
            </div>
</form>
        </div>
</body>