<?php

////////////////////////////////////////////////
// Dependiendo del botón pulsado obtenemos un número //
////////////////////////////////////////////////

class TeclaPulsada {
    
    static public function realizarOperacion ($botonPulsado){
        
        if($botonPulsado == "generar"){
            
            $resultado = Generar::generarAleatorio();    

        }else if($botonPulsado == "sumar"){

            $resultado = Sumar::sumarArray();

        }else if($botonPulsado == "mayoramenor"){

            $resultado = Ordenar::ordenarArray();

        }else if($botonPulsado == "menoramayor"){

            $resultado = Ordenar::ordenarArray();
            
        }else if($botonPulsado == "par"){

            $resultado = Pares::obtenerPares();

        }else if($botonPulsado == "impar"){

            $resultado = Pares::obtenerPares();

        } 

    }

} 









