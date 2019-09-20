
<?php

session_start();

class Generar {

    
    static public function generarAleatorio(){
        
        $arrayAleatorio = array();

        for ($i = 1; $i <= 10; $i++){

            $numero = rand(1111111, 9999999);

            array_push($arrayAleatorio, $numero);
            
        }
        
        $_SESSION['numero'] = $arrayAleatorio;
    }
}

