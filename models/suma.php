<?php

class Sumar {

    static public function sumarArray (){

        // $numeros = $_SESSION['numero'];

        $suma = array_sum($_SESSION['numero']);

        $_SESSION['numero'] = [];

        array_push($_SESSION['numero'], $suma);

    }

}




