<?php 
require_once "includes/conecta.php";

// função usada para capturar as informações do fale-conosco.php
function inserirContato ($conexao, $nome, $email, $telefone, $mensagem){
    $sql = "INSERT INTO contatos (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')";
    mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
}


// função usada para capturar as informações da contribuição.php
function inserirDoadores ($conexao, $nome, $data){
    $sql = "INSERT INTO contatos (nome, data) VALUES ('$nome', '$data')";
    mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
}