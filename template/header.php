<?php
require_once __DIR__ . '/../utils/SessionUtils.php';

$BASE_URI = $GLOBALS['globalVar'];

?>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <?php
    echo '<link rel="stylesheet" href="' . $BASE_URI . 'assets/css/bootstrap.min.css">';
    ?>
</head>

<body>
<nav class="navbar navbar-expand-lg border-bottom">
    <div class="container-fluid">
        <?php
        echo '<a href="' . $BASE_URI . 'index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">';

                echo '<img src="' . $BASE_URI . 'assets/img/biggie.jpg" width="40" height="32" alt="Company Logo">';
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav nav nav-pills">
                <?php
                if (SessionUtils::loggedIn()) {
                    echo '<li class="nav-item px-2"><a href="' . $BASE_URI . 'app/private/views/index.php" class="nav-link">Indice</a></li>';
                    echo '<li class="nav-item px-2"><a href="' . $BASE_URI . 'app/private/views/creature/insert.php" class="nav-link">Agregar Criaturas</a></li>';
                    echo '<li class="nav-item px-2"><a href="' . $BASE_URI . 'app/private/views/user/logout.php" class="nav-link">Cerrar Sesion</a></li>';
                }else{
                    echo '<li class="nav-item px-2"><a href="' . $BASE_URI . 'app/public/views/user/login.php" class="nav-link">Iniciar Sesion</a></li>';
                    echo '<li class="nav-item px-2"><a href="' . $BASE_URI . 'app/public/views/user/signup.php" class="nav-link">Registrarse</a></li>';
                    echo '<li class="nav-item px-2"><a href="' . $BASE_URI . 'app/public/views/index.php" class="nav-link">Indice</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
