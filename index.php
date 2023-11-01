<?php
require_once __DIR__ . '/./utils/SessionUtils.php';

if(SessionUtils::loggedIn())
{
    header("Location: app/private/views/index.php");
}
else
{
    header("Location: app/public/views/index.php");
}
?>
