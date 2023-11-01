<?php
require_once __DIR__ . '/../../../persistence/DAO/CreatureDAO.php';
require_once __DIR__ . '/../../models/Creature.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    deleteAction();
}

function deleteAction() {
    $id = $_GET["id"];

    $candidateDAO = new CreatureDAO();
    $candidateDAO->delete($id);

    header('Location: ../../private/views/index.php');
}
?>