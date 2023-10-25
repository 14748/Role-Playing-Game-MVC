<?php
require_once __DIR__ . "/../../../models/Creature.php";
require_once __DIR__ . "/../../../../persistence/DAO/CreatureDAO.php";

$currentCreature = new Creature();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $currentCreature = retrieveObjectFromId();
}

function retrieveObjectFromId() {
    $id = $_GET["id"];

    $creatureDAO = new CreatureDAO();
    return $creatureDAO->findCreatureById($id);

}

echo $currentCreature->getName();
echo $currentCreature->getDescription();
echo $currentCreature->getAvatar();
echo $currentCreature->getAttackPower();
echo $currentCreature->getLifeLevel();
echo $currentCreature->getWeapon();
?>

