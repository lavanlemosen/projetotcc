<?php
$nome = $_POST["nome"];
$sigla = $_POST["sigla"];
include "conexao.php";

$comando = "select * from nome_est where nome_est='$nome'";
$pesquisa = mysqli_query($conexao,$comando);
$resultado = mysqli_num_rows($pesquisa);
if($resultado<>0)
{
    header("location: ../view/CadastradoFracasso.html");
}else{
    $comando = "INSERT INTO `cupom`( `nome_est`, `sigla_est`) VALUES ('$nome','$sigla')";
    mysqli_query($conexao,$comando);
    header("location: ../view/CadastradoSucesso.html");
}
?>