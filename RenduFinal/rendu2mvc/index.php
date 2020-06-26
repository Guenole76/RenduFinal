<?php
try {
    require('router/router.php');
    //include('model/model.php');
}

catch(Exception $e) {
    // Si une erreur se produit, on arrive ici
    echo "Une erreur est survenue.<br>Détails : $e";
}


?>