<?php
require_once __DIR__ . "/../../controllers/indexController.php";
$creatures = indexAction();

foreach ($creatures as $creature) {
    echo "
        <div>
            <p>{$creature->privateCreatureHtml()}</p>
            
        </div>
    ";
}