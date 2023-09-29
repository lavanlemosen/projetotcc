
<?php
$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];
$fantasia = $_POST["fantasia"];
include "conexao.php";

$comando = "select * from distribuidora where nome_distri='$nome'";
$pesquisa = mysqli_query($conexao,$comando);
$resultado = mysqli_num_rows($pesquisa);
if($resultado<>0)
{
    header("location: ../view/CadastradoFracasso.html");
}else{
    $comando = "INSERT INTO `distribuidora`( `nome_distri`, `cnpj`, `nome_fantasia`) VALUES ('$nome','$cnpj','$fantasia')";
    mysqli_query($conexao,$comando);
    header("location: ../view/CadastradoSucesso.html");
}
?>