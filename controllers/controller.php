<?php

class MvcController {

    //COMPROBAR SI SE HA PULSADO EL BOTON
    //------------------------------------

    
    public function pulsarBoton(){    
        
        if (isset($_GET["pulsado"])){

            $botonPulsado = $_GET["pulsado"];

        TeclaPulsada::realizarOperacion($botonPulsado);
                 
        }

        include "views/template.php";

    }

}