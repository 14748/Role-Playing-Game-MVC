<?php
require_once __DIR__ . "/../../../models/Creature.php";
require_once __DIR__ . "/../../../../persistence/DAO/CreatureDAO.php";
require_once __DIR__ . "/../../../../template/header.php";

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

<div class="container">
    <h2 class="my-4">Actualizar Criatura</h2>

    <form method="post" action="../../../controllers/creature/updateController.php">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($currentCreature->getIdCreature()); ?>">

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($currentCreature->getName()); ?>" placeholder="Enter creature's name">
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="desc" name="desc" value="<?php echo htmlspecialchars($currentCreature->getDescription()); ?>" placeholder="Enter creature's description">
        </div>

        <div class="mb-3">
            <label for="avatar" class="form-label">URL Avatar</label>
            <input type="text" class="form-control" id="avatar" name="avatar" value="<?php echo htmlspecialchars($currentCreature->getAvatar()); ?>" placeholder="Enter URL of the creature's avatar">
        </div>

        <div class="mb-3">
            <label for="power" class="form-label">Poder de aatque</label>
            <input type="number" class="form-control" id="power" name="power" value="<?php echo htmlspecialchars($currentCreature->getAttackPower()); ?>" placeholder="Enter creature's attack power">
        </div>

        <div class="mb-3">
            <label for="life" class="form-label">Nivel de vida</label>
            <input type="number" class="form-control" id="life" name="life" value="<?php echo htmlspecialchars($currentCreature->getLifeLevel()); ?>" placeholder="Enter creature's life level">
        </div>

        <div class="mb-3">
            <label for="weapon" class="form-label">Arma</label>
            <input type="text" class="form-control" id="weapon" name="weapon" value="<?php echo htmlspecialchars($currentCreature->getWeapon()); ?>" placeholder="Enter creature's weapon">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
