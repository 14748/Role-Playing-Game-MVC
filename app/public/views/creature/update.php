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
?>

<form method="post" action="../../../controllers/creature/updateController.php">
    <input type="hidden" name="id" value="<?php echo $currentCreature->getIdCreature(); ?>">
    <input name="name" value="<?php echo $currentCreature->getName(); ?>">
    <input name="desc" value="<?php echo $currentCreature->getDescription() ?>">
    <input name="avatar" value="<?php echo $currentCreature->getAvatar() ?>">
    <input name="power" value="<?php echo $currentCreature->getAttackPower() ?>">
    <input name="life" value="<?php echo $currentCreature->getLifeLevel() ?>">
    <input name="weapon" value="<?php echo $currentCreature->getWeapon() ?>">
    <button type="submit"></button>
</form>
