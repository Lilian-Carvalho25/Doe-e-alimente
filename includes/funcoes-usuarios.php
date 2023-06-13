<?php 
require_once "includes/conecta.php";

// função usada para capturar as informações do fale-conosco.php
function inserirContato ($conexao, $nome, $email, $telefone, $mensagem){
    $sql = "INSERT INTO contatos (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')";
    mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
}



// função usada para capturar as informações da contribuição.php
function inserirDoadores ($conexao, $nome){
    $sql = "INSERT INTO doadores (nome) VALUES ('$nome')";
    mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
}



// função usada para ler as informações dos doadores
function lerTodosOsDoadores($conexao){
    $sql = "SELECT nome, data FROM doadores ORDER BY data DESC";

    $resultado = mysqli_query($conexao, $sql)
    or die (mysqli_error($conexao));

    $doadores = [];

    while ($doador = mysqli_fetch_assoc($resultado)){
        array_push($doadores, $doador);
     }
     return $doadores;
}



// função usada para mostrar a data formatada na tabela
function formataData($data){
    return date("d/m/Y H:i", strtotime($data));
} 



// Usada em login.php
function buscaAdministradores($conexao, $email){
   
    $sql = "SELECT * FROM administradores WHERE email = '$email'";

    $resultado = mysqli_query($conexao, $sql) 
                or die (mysqli_error($conexao));

    return mysqli_fetch_assoc($resultado);
    
} // Fim buscaUsuario




// função usada para sair 
function logout() {
    session_start();
    session_destroy();
    header("location:../login.php?logout");
    exit;
} 
