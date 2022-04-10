<?php

    include_once 'config.php';
    require_once 'function.php';

    $Error = "";
    $Sucess = "";

    $Name = $_POST["name"];
    $UserName = $_POST["username"];
    $Email = $_POST["email"];
    $Password = $_POST["password"];
    $DateNasc = $_POST["datanasc"];

    $Date = date('Y-m-d');
    $Hour = date('H:i:s');

    // Processando dados do formulário quando o formulário é enviado
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        /* 
            input Name
            Erro caso input vazio
        */
        if(empty(trim($Name))){
            $Error = 'O campo Nome não pode estar vazio!!!';
            Invalid($Error);
        }
        /*
            input UserName
            Erro caso input vazio
        */
        if(empty(trim($UserName))){
            $Error = "O nome de usuário não pode estar vazio!!!";
            Invalid($Error);

        
        // Validação de erro caso algum caractere invalido seja inputado no $UserName
        }else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($UserName))){
            $Error = "O nome de usuário pode conter apenas letras, números e _.";
            Invalid($Error);
        /*
            Caso não encontre erro.
            Procura por $usuario no DB
        */   
        }else {
            $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE username = '{$UserName}'");
            //$sql = DB::query(" SELECT * FROM users where username = '{$UserName}' ");
            //dd($sql);
            if($sql[0]){
                $Error = "Usuário já exite";
                Invalid($Error);
            }
        }
        /*
            input email  
        */
        if(empty(trim($Email))){
            $Error = "Campo email não pode estar vazio!";
            Invalid($Error);
        }else {
            $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE email = '{$Email}'");

            if($sql[0]){
                $Error = "EMAIL já cadastrado no banco de dados";
                Invalid($Error);
            }
        }
        /*
            input password
        */
        if(empty(trim($Password))){
            $Error = "Campo senha não pode estar vazia";
            Invalid($Error);
        }else {
            // criptografia da senha
            $Password = md5($Password);
        }
         /*
            INSERT TABLE USERS
        */
        if (false){
            $Error = "Algo deu errado";
            Invalid($Error);
        }else {
            DB::insert('users', [
                'name' => $Name,
                'username' => $UserName,
                'email' => $Email,
                'password' => $Password,
                'date_nasc' => $DateNasc,
                'date' => $Date,
                'hour' => $Hour,
                ]);
            $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE username = '{$UserName}'");

            if($sql[0]){
                header("location: ../pages/login.php");
                $Sucess =  'Usuário cadastrado com sucesso!!!.';
                Sucess($Sucess);
                //Invalid($Error);
            }
        }
    }