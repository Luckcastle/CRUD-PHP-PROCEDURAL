<?php

$host = 'localhost';
$user = 'root';
$senha = '';
$banco = 'sistema';

$con = mysqli_connect($host,$user,$senha,$banco);
if(mysqli_connect_error($con)){
    echo "Erro ao conectar" . mysqli_connect_error();
}