<?php
require_once __DIR__ . '/../../persistence/DAO/CreatureDAO.php';
require_once __DIR__ . '/../models/Creature.php';

function indexAction() {
    $offerDAO = new CreatureDAO();
    return $offerDAO->selectAll();
}
?>