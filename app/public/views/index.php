<?php
require_once __DIR__ . "/../../controllers/indexController.php";
require_once __DIR__ . "/../../../persistence/DAO/CreatureDAO.php";
require_once __DIR__ . "/../../../template/header.php";

$creatures = indexAction();

foreach ($creatures as $creature) {
    echo $creature->publicCreatureHtml();
}

?>

<a href="user/signup.php">register</a>
<a href="user/login.php">login</a>