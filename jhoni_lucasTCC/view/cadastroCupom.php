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
        <div id="campos">
            <form method="post" action="../banco/cadastrarcupom.php">
            <div class="perguntas" id="perguntas">
                <h2>Cadastro de cupom</h2>
                <input type="text" name="cupom" placeholder="codigo do cupom" required>
                <input type="text" name="desconto" placeholder="digite a quantidade de desconto" required>
                <input type="submit" value="Concluir cadastro">
            </div>
        </form>
        </div>
</body>
</html>