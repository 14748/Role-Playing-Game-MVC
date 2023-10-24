<?php
require_once __DIR__ . "/persistence/DAO/CreatureDAO.php";

$creatureDAO = new CreatureDAO();

$creatures = $creatureDAO->selectAll();
foreach ($creatures as $creature) {
    echo $creature->getName() . "</br>";

    $creature->setName("Pepito1116565");
    $creatureDAO->update($creature);
    $creatureDAO->delete($creature);
    //$creature->setIdCreature($creature->getIdCreature() + 1);
    //$creatureDAO->insert($creature);
}