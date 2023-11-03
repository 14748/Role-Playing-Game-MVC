<?php
$GLOBALS['globalVar'] = "./../../../../";
require_once __DIR__ . "/../../../../template/header.php";
?>

<div class="container">
    <h2 class="my-4">Crear criatura</h2>

    <form method="post" action="../../../controllers/creature/insertController.php">

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="desc" name="desc" placeholder="Descripcion">
        </div>

        <div class="mb-3">
            <label for="avatar" class="form-label">URL Avatar</label>
            <input type="text" class="form-control" id="avatar" name="avatar" placeholder="URL Avatar">
        </div>

        <div class="mb-3">
            <label for="power" class="form-label">Poder de Ataque</label>
            <input type="number" class="form-control" id="power" name="power" placeholder="Poder de Ataque">
        </div>

        <div class="mb-3">
            <label for="life" class="form-label">Nivel de Vida</label>
            <input type="number" class="form-control" id="life" name="life" placeholder="Nivel de Vida">
        </div>

        <div class="mb-3">
            <label for="weapon" class="form-label">Arma</label>
            <input type="text" class="form-control" id="weapon" name="weapon" placeholder="Arma">
        </div>

        <button type="submit" class="btn btn-primary">Insertar</button>
    </form>
</div>