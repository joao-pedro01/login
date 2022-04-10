<?php

    /*
        dd( String ) : Null 
        Dump and Die
        Mostra a variavel e finaliza o programa
    */
    function dd($string){
        print_r($string);
        exit;
    }
    /*
        function Loged caso esteja logado
    */
    function Loged($string){
        if($string != NULL){
            return true;
        }else {
            return false;
        }
    }
    /*
        function Erro caso seja inválido
    */
    function Invalid($Error){
        echo '<body onload="window.history.back();">';
        echo '<script>';
        echo "alert('{$Error}')";
        echo '</script>';

        exit();
    }
    /*
        function Sucess caso operação sejá bem sucedida
    */
    function Sucess($Sucess){
        echo '<body onload="window.history.back();">';
        echo '<script>';
        echo "alert('{$Sucess}')";
        echo '</script>';

        exit();
    }
    function Age($data){
        $data;
list($ano, $mes, $dia) = explode('-', $data);
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
echo $idade;
    }
    
    