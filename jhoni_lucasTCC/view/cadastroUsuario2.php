<?php
session_start();
$_SESSION["tipo"] =2;
?>
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
            <form method="post" action="../banco/cadastrarUsu.php">
            <div class="perguntas" id="perguntas1" align="center" >
                <h2>Cadastro de usuario etapa 1/3</h2>
                <input type="text" name="usuario" placeholder="Nome de usuario">
               
                <input type="text" name="cpf" placeholder="CPF" >
              
                <input type="email" name="email" placeholder="Email" >
             
                <button type="button" onclick="proximo(perguntas1,perguntas2)">Proximo</button>
            </div>
            <div class="perguntas" id="perguntas2" align="center" style="display: none;">
                <h2>Cadastro de usuario etapa 2/3</h2>
                <input type="text" name="nome" placeholder="Nome completo">
                <input type="date" name="nascimento" placeholder="data de nascimento" >
                
                <input type="text" name="tele" placeholder="Digite o seu numero de telefone" >
                
                <button onclick="proximo(perguntas2,perguntas3)">Proximo</button>
            </div>
            <div class="perguntas" id="perguntas3" align="center" style="display: none;">
                <h2>Cadastro de usuario etapa 3/3</h2>
                <input type="password" name="senha" placeholder="senha do usuario" required>
                <input type="password" placeholder="confirmar senha" required>
                <input type="submit" value="Concluir cadastro">
            </div>
        </form>
        </div>
</body>
</script>
</html>