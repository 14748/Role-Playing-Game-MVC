<?php
require_once __DIR__ . "/../../controllers/indexController.php";
require_once __DIR__ . "/../../../persistence/DAO/CreatureDAO.php";
$creatures = indexAction();

foreach ($creatures as $creature) {
    echo $creature->privateCreatureHtml();
}

?>

<a type="button" href="./creature/insert.php">Agregar</a>
