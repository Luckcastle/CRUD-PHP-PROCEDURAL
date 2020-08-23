<?php

    require_once('conexao.php');

    $id_produto = intval($_GET['produto']);

    $sql_delete = "DELETE FROM produtos WHERE id = '$id_produto'";
    $sql_result = mysqli_query($con,$sql_delete);

    if($sql_result){
        echo "<script>location.href='index.php?p=inicial';</script>";
    }else{
        echo "<script> alert('Produto não excluído');location.href='index.php?p=inicial';</script>";
    }