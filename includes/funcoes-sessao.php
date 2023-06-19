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


function login ($id, $email) {
    /* Criação de variáveis de sessão */
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;
}


function logout() {
    session_start();
    session_destroy();
    header("location:login.php?logout");
    exit;
} 