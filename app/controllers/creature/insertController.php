<?php
require_once __DIR__ . '/../../../persistence/DAO/CreatureDAO.php';
require_once __DIR__ . '/../../models/Creature.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    createAction();
}

function createAction() {
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $avatar = $_POST["avatar"];
    $power = $_POST["power"];
    $life = $_POST["life"];
    $weapon = $_POST["weapon"];

    $creature = new Creature();
    $creature->setName($name);
    $creature->setDescription($desc);
    $creature->setAvatar($avatar);
    $creature->setAttackPower($power);
    $creature->setLifeLevel($life);
    $creature->setWeapon($weapon);

    $candidateDAO = new CreatureDAO();
    $candidateDAO->insert($creature);

    header('Location: ../../public/views/index.php');
}
?>

