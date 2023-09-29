<?php
session_start();
include "conexao.php"; 
$usuario = $_POST["usuario"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$nascimento = $_POST["nascimento"];
$tele = $_POST["tele"];
$senha = $_POST["senha"];
$tipo = $_SESSION["tipo"];

$comando = "select * from usuario where email_usu='$email'";
$pesquisa = mysqli_query($conexao,$comando);
$resultados1 = mysqli_num_rows($pesquisa);
if($tipo==1){
$comando = "select * from cliente where cpf_cliente='$cpf'";
}else{
    $comando = "select * from vendedor where cpf_vendedor='$cpf'";
}
$pesquisa = mysqli_query($conexao,$comando);
$resultados2 = mysqli_num_rows($pesquisa);
echo"$resultados2";
if($resultados1<>0 || $resultados2<>0)
{
    header("location: ../view/CadastradoFracasso.html");
}else{
    $comando = "insert into usuario(nome_usu,email_usu,cod_tipo,senha_usu) values ('$usuario','$email',$tipo,md5('$senha'))";
    mysqli_query($conexao,$comando);
    if($tipo==1)
    {
        $comando = "INSERT INTO `cliente`( `nome_cliente`, `data_nasc`, `telefone`, `cpf_cliente`) VALUES ('$nome','$nascimento','$tele','$cpf')";
        mysqli_query($conexao,$comando);
        header("location: ../view/CadastradoSucesso.html");
    }else{
        $comando = "INSERT INTO `vendedor`( `nome_vendedor`, `cpf_vendedor`, `data_nasc`, `telefone`) VALUES ('$nome','$cpf','$nascimento','$tele')";
        mysqli_query($conexao,$comando);
        header("location: ../view/CadastradoSucesso.html");
    }
}
?>