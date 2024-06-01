<?php
$nome = $_POST["nome"];
include "conexao.php";

$comando = "select * from pais where nome_pais='$nome'";
$pesquisa = mysqli_query($conexao,$comando);
$resultado = mysqli_num_rows($pesquisa);
if($resultado<>0)
{
    header("location: ../view/CadastradoFracasso.html");
}else{
    $comando = "INSERT INTO `pais`( `nome_pais`) VALUES ('$nome')";
    mysqli_query($conexao,$comando);
    header("location: ../view/CadastradoSucesso.html");
}
?>