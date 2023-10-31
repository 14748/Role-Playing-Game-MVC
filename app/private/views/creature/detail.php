<?php
$GLOBALS['globalVar'] = "./../../../../";
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

<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <?php
        // Check if the creature has an avatar. If it does, display it.
        if ($currentCreature->getAvatar()) {
            echo '<img src="' . htmlspecialchars($currentCreature->getAvatar()) . '" class="card-img-top" alt="Avatar Creatura">';
        }
        ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($currentCreature->getName()); ?></h5>
            <p class="card-text">
                <strong>Descripcion: </strong><?php echo htmlspecialchars($currentCreature->getDescription()); ?><br>
                <strong>Poder de Ataque: </strong><?php echo htmlspecialchars($currentCreature->getAttackPower()); ?><br>
                <strong>Nivel de Vida: </strong><?php echo htmlspecialchars($currentCreature->getLifeLevel()); ?><br>
                <strong>Arma: </strong><?php echo htmlspecialchars($currentCreature->getWeapon()); ?>
            </p>
        </div>
    </div>
</div>
