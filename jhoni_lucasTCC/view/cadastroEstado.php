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
        <div id="campos" align="center">
            <form method="post" action="../banco/cadastrarEstado.php">
            <div class="perguntas" id="perguntas" align="center">
                <h2>Cadastro de cupom</h2>
                <input type="text" name="nome" placeholder="nome do estado" required>
                <input type="text" name="sigla" placeholder="sigla" required>
                <input type="submit" value="Concluir cadastro">
            </div>
        </form>
        </div>
</body>
</html>