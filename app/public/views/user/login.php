<?php
require_once __DIR__ . "/../../../../template/header.php";
?>
<div class="container">
    <h2 class="my-4">Iniciar Sesion</h2>

    <form method="POST" action="../../../controllers/user/checkController.php">
        <div class="mb-3">
            <label for="user" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contrasena</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contrasena" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
