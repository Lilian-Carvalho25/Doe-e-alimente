<?php 

// $servidor = "localhost";
// $usuario = "root";
// $senha = "";
// $banco = "doe-e-alimente";

$servidor = "localhost";
$usuario = "id20945934_doeealimente";
$senha = "!Projetointegrador2023";
$banco = "id20945934_doeealimente2023";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");

if( !$conexao ){
    die(mysqli_connect_error($conexao));
} 

?>