<?php
$nome = $_POST["nome"];
include "conexao.php";

$comando = "select * from categoria where nome_categ='$nome'";
$pesquisa = mysqli_query($conexao,$comando);
$resultado = mysqli_num_rows($pesquisa);
if($resultado<>0)
{
    header("location: ../view/CadastradoFracasso.html");
}else{
    $comando = "INSERT INTO `categoria`( `nome_categ`) VALUES ('$nome')";
    mysqli_query($conexao,$comando);
    header("location: ../view/CadastradoSucesso.html");
}
?>