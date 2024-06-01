<?php
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descri = $_POST["descricao"];
$estoque = $_POST["estoque"];
$distri = $_POST["distri"];
include "conexao.php";
$comando = "insert into produto(nome_prod,preco_prod,quantidade_prod,descricao_prod,cod_distri) values ('$nome',$preco,$estoque,'$descri',$distri)";
if(mysqli_query($conexao,$comando)==true){
    header("location:../view/CadastroSucesso.html");
}else{
    header("location:../view/CadastroFracasso.html");
}
?>