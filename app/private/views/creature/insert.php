<?php
require_once __DIR__ . "/../../../../template/header.php";
?>

<form method="post" action="../../../controllers/creature/insertController.php">
    <input name="name">
    <input name="desc">
    <input name="avatar">
    <input name="power">
    <input name="life">
    <input name="weapon">
    <button type="submit"></button>
</form>
