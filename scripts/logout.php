<?php
    /*
        log out
    */
    session_start();
    unset(
        $_SESSION['UserNome'],
        $_SESSION['UserName'],
        $_SESSION['UserEmail'],
        $_SESSION['DateNasc'],
    );   
    $_SESSION['logindeslogado'] = "Deslogado com sucesso";
    //redirecionar o usuario para a página de login
    header("Location: ../pages/login.php");