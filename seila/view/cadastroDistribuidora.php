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
        <form method="post" action="../banco/cadastrarDistribuidora.php">
            <div class="perguntas" id="perguntas" align="center">

                <div class="campos">
                    <h2>Cadastro de distribuidora</h2>
                    <input type="text" name="nome" placeholder="nome da distribuidora" required>
                    <input type="text" name="cnpj" placeholder="digite o cnpj" required>
                    <input type="text" name="fantasia" placeholder="nome fantasia" required>
                    <input type="submit" value="Concluir cadastro" class="submit">
                </div>
            </div>
        </form>
    </div>
</body>

</html>