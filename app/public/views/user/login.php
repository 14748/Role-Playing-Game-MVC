<?php
require_once __DIR__ . "/../../../../template/header.php";
?>
<form method="POST" action="../../../controllers/user/checkController.php">
    <input name="user">
    <input name="password">
    <button type="submit">send</button>
</form>
