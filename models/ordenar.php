<?php

class Ordenar {

    static public function ordenarArray (){
        
        $boton = $_GET['pulsado'];
        
        $numeros = $_SESSION['numero'];
    
        ($boton == "mayoramenor") ? rsort($numeros) : sort($numeros);

        $_SESSION['numero'] = $numeros;

    }
    
}



