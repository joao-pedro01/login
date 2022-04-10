<?php
    session_start(); 

    include_once 'config.php';
    include_once 'function.php';

    $Error = "";

    $UserName = $_POST["username"];
    $Password = $_POST["password"];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        
        // criptografia da senha
        $Password = md5($Password);
        // consulta dos dados
        $row = DB::queryFirstRow("SELECT * FROM users WHERE username = '$UserName' && password = '$Password' LIMIT 1");
        
        if($row == null){
            echo 'logue por favor!!!';
        }else {
            //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
            if(isset($row)){
                $_SESSION['UserNome'] = $row['name'];
                $_SESSION['UserName'] = $row['username'];
                $_SESSION['UserEmail'] = $row['email'];
                $_SESSION['DateNasc'] = $row['date_nasc'];
                header("Location: ../pages/logged.php");
            }
        }
    }