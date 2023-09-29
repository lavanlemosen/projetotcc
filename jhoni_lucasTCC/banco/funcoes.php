<?php
function PesquisaDistribuidoras()
{
    include "conexao.php";
    $comando = "select * from distribuidora";
    $pesquisa = mysqli_query($conexao,$comando);
    $total = mysqli_num_rows($pesquisa);
    if($total>0){
        while($resultados = mysqli_fetch_assoc($pesquisa)){
            echo"<option value=".$resultados['id_distri'].">".$resultados['nome_distri']."</option>";
        }
    }
}
?>