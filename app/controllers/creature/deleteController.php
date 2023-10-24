<?php
require_once __DIR__ . '/../../../persistence/DAO/CreatureDAO.php';
require_once __DIR__ . '/../../models/Creature.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    deleteAction();
}

function deleteAction() {
    $id = $_POST["id"];

    $candidateDAO = new CreatureDAO();
    $candidateDAO->delete($id);

    header('Location: ../../public/views/index.php');
}
?>