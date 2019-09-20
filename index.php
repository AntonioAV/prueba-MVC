<?php

require_once "controllers/controller.php";
require_once "models/model.php";
require_once "models/aleatorio.php";
require_once "models/ordenar.php";
require_once "models/pares.php";
require_once "models/suma.php";


$mvc = new MvcController();

$mvc -> pulsarBoton();