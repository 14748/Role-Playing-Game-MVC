<?php
require_once __DIR__ . '/../../../persistence/DAO/UserDAO.php';
require_once __DIR__ . '/../../../app/models/User.php';
require_once __DIR__ . '/../../../utils/SessionUtils.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    createAction();
}

function createAction() {
    $email = $_POST["user"];
    $pass = $_POST["password"];

    $user = new User();
    $user->setName($email);
    $user->setPassword($pass);

    $userDAO = new UserDAO();
    $userDAO->insert($user);

    SessionUtils::startSessionIfNotStarted();
    SessionUtils::setSession($user->getName());

    header('Location: /../../private/views/index.php');
}

?>