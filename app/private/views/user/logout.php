<?php
require_once(dirname(__FILE__) . '/../../../../utils/SessionUtils.php');
SessionUtils::destroySession();
header('Location: ../../../public/views/index.php');
?>
