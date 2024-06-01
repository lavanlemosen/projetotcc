<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="../java/comandos.js"></script>
</head>

<body>
    <div class="agrupador-de-campos">

        <form method="post" action="../banco/cadastroProduto.php">
            <div id="produtos1" class="perguntas">

                <div class="campos">
                    <input type="text" name="nome" placeholder="Digite o nome do produto">
                    <textarea name="descricao">
            </textarea>
                    <select name="distri">
                        <?php
                include "../banco/funcoes.php";
                PesquisaDistribuidoras();
                ?>
                    </select>
                    <input type="button" class="button" onclick="proximo(produtos1,produtos2)" value="proximo"></button>
                </div>

            </div>
            <div id="produtos2" class="perguntas" style="display:none;">

                <div class="campos">

                    <input type="text" name="preco" placeholder="Digite o preço do produto">
                    <input type="text" name="estoque" placeholder="Digite a quantidade em estoque">
                    <input type="submit" value="Cadastrar" class="submit">

                </div>

            </div>
        </form>
    </div>
</body>