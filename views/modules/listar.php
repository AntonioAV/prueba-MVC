<?php
        
        $numero = [];

        if(isset($_GET["pulsado"])){
            
            $numero = $_SESSION['numero'];
            
        }

?>

<ul class="listado">

    <?php foreach ($numero as $valor): ?>

        <li class="numeros"><?php echo number_format($valor) ?></li>
    
    <?php endforeach; ?>

</ul>
