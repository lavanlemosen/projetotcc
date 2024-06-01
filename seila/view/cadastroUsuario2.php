<?php
session_start();
$_SESSION["tipo"] = 2;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="../java/comandos.js"></script>
</head>

<body>
    <main>
        <div class="agrupador-de-campos">
            <form method="post" action="../banco/cadastrarUsu.php">
                <div class="perguntas" id="pergunta1">
                    <div class="titulo">
                        <h1>Cadastro</h1>
                        <a href="cadastroUsuario2.php">Login</a>
                    </div>
                    <div class="campos">
                        <input type="text" name="usuario" placeholder="Nome">
                        <input type="text" name="cpf" placeholder="CPF">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <input type="button" class="button" onclick="proximo(pergunta1,pergunta2)" value="Próximo">
                </div>

                <div class="perguntas" id="pergunta2">
                    <div class="titulo">
                        <h1>Cadastro</h1>
                        <p class="voltar" onclick="proximo(pergunta2,pergunta1)">Voltar</p>
                    </div>
                    <div class="campos">
                        <input type="date" name="nascimento" placeholder="Data de Nascimento">
                        <input type="text" name="tele" placeholder="Celular">
                        <select name="Gênero" id="genero">
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="O">Outro</option>
                        </select>
                    </div>
                    <input type="button" class="button" onclick="proximo(pergunta2,pergunta3)" value="Próximo">
                </div>

                <div class="perguntas" id="pergunta3">
                    <div class="titulo">
                        <h1>Cadastro</h1>
                        <p class="voltar" onclick="proximo(pergunta2,pergunta3)">Voltar</p>
                    </div>
                    <div class="campos">
                        <input type="password" name="senha" placeholder="Senha">
                        <input type="password" placeholder="Confirmar Senha">
                    </div>
                    <input type="submit" class="submit" value="Cadastrar">
                </div>
            </form>
        </div>
    </main>
</body>

</html>