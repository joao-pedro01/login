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