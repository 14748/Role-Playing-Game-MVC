<?php
require_once __DIR__ . "/../../controllers/indexController.php";
require_once __DIR__ . "/../../../persistence/DAO/CreatureDAO.php";
require_once __DIR__ . "/../../../template/header.php";

$creatures = indexAction();



?>

<div class="container">
    <?php
    $count = 0;
    foreach ($creatures as $creature) {
        if ($count % 3 == 0) {
            if ($count > 0) {
                echo "</div>";
            }
            echo '<div class="row mt-2">';
        }

        echo $creature->publicCreatureHtml();

        $count += 1;

        if ($count == count($creatures) && $count % 3 != 0) {
            echo "</div>";
        }
    }
    ?>
</div>