<?php
require_once __DIR__ . "/../../controllers/indexController.php";
require_once __DIR__ . "/../../../persistence/DAO/CreatureDAO.php";

$creatures = indexAction();

foreach ($creatures as $creature) {
    echo $creature->publicCreatureHtml();
}

?>

<a type="button" href="../../private/views/creature/insert.php">Agregar</a>
