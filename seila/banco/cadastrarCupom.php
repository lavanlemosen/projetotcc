<?php
$nome = $_POST["cupom"];
$desconto = $_POST["desconto"];
include "conexao.php";

$comando = "select * from cupom where nome_cupom='$nome'";
$pesquisa = mysqli_query($conexao,$comando);
$resultado = mysqli_num_rows($pesquisa);
if($resultado<>0)
{
    header("location: ../view/CadastradoFracasso.html");
}else{
    $comando = "INSERT INTO `cupom`( `nome_cupom`, `valor_desconto`) VALUES ('$nome',$desconto)";
    mysqli_query($conexao,$comando);
    header("location: ../view/CadastradoSucesso.html");
}
?>