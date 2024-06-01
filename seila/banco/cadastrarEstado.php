<?php
$nome = $_POST["nome"];
$sigla = $_POST["sigla"];
$cod = $_POST["pais"];
include "conexao.php";

$comando = "select * from estado where nome_est='$nome'";
$pesquisa = mysqli_query($conexao,$comando);
$resultado = mysqli_num_rows($pesquisa);
if($resultado<>0)
{
    header("location: ../view/CadastradoFracasso.html");
}else{
    $comando = "INSERT INTO `estado`( `nome_est`, `sigla_est`,cod_pais) VALUES ('$nome','$sigla',$cod)";
    mysqli_query($conexao,$comando);
    header("location: ../view/CadastradoSucesso.html");
}
?>