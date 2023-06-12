<?php

if(!isset($_SESSION)){
    session_start();
}

function verificaAcesso(){

    if(!isset($_SESSION['id'])){
        session_destroy();
        header("location:../login.php");
        exit;
    }
}


function login ($id, $nome) {
    /* Criação de variáveis de sessão */
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
}


function logout() {
    session_start();
    session_destroy();
    header("location:../login.php?logout");
    exit;
} 