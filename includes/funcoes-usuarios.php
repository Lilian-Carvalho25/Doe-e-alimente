<?php 
require_once "includes/conecta.php";

// função usada para capturar as informações do fale-conosco.php
function inserirContato ($conexao, $nome, $email, $telefone, $mensagem){
    $sql = "INSERT INTO contatos (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')";
    mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
}




// função usada para ler as informações do fale conosco
function lerContatos ($conexao){
    $sql = "SELECT * FROM contatos ORDER BY data DESC";

    $resultado = mysqli_query($conexao, $sql)
    or die (mysqli_error($conexao));

    $contatos = [];

    while ($contato = mysqli_fetch_assoc($resultado)){
        array_push($contatos, $contato);
    }
    return $contatos;
}



// função usada para capturar as informações da contribuição.php
function inserirDoadores ($conexao, $nome, $valor){
    $sql = "INSERT INTO doadores (nome, valor) VALUES ('$nome', '$valor')";
    mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
}



// função usada para ler as informações dos doadores
function lerTodosOsDoadores($conexao){
    $sql = "SELECT nome, data, valor FROM doadores ORDER BY data DESC";

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
    return date('d/m/Y', strtotime($data));
}

function formataHora($data){
    return date('H:i', strtotime($data));
}




// Usada em login.php
function buscaAdministradores($conexao, $email){
   
    $sql = "SELECT * FROM administradores WHERE email = '$email'";

    $resultado = mysqli_query($conexao, $sql) 
                or die (mysqli_error($conexao));

    return mysqli_fetch_assoc($resultado);
    
} // Fim buscaUsuario
