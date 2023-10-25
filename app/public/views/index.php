<?php
require_once __DIR__ . "/../../controllers/indexController.php";
require_once __DIR__ . "/../../../persistence/DAO/CreatureDAO.php";
$creatures = indexAction();

foreach ($creatures as $creature) {
    echo $creature->privateCreatureHtml();
}

$d = new CreatureDAO();
$s = $d->findCreatureById(2);
echo $s->privateCreatureHtml();
