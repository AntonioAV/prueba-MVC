<?php

class Pares {

    static public function obtenerPares (){

        $temp = [];
        
        $par = ($_GET['pulsado'] == "par") ? 2 : 3;
        
        $numeros = $_SESSION['numero'];
    
        foreach ($numeros as $valor){

            if($valor % $par == 0){

                array_push($temp, $valor);

            }

        } 
        
        $_SESSION['numero'] = $temp;

    }
    
}

