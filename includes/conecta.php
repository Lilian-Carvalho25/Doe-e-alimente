<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "doe-e-alimente";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");

if( !$conexao ){
    die(mysqli_connect_error($conexao));
} 

?>