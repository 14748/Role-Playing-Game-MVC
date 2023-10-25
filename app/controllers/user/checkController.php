<?php
require_once __DIR__ . '/../../../persistence/DAO/UserDAO.php';
require_once __DIR__ . '/../../../app/models/User.php';
require_once __DIR__ . '/../../../utils/SessionUtils.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    checkAction();
}

function checkAction() {

    $user = new User();
    $user->setName($_POST["user"]);
    $user->setPassword($_POST["password"]);

    $userDAO = new UserDAO();
    if($userDAO->check($user))
    {
        SessionUtils::startSessionIfNotStarted();
        SessionUtils::setSession($user->getName());

        header('Location: ../../private/views/index.php');
    }
    else
    {
        header('Location: ../../public/views/index.php');
    }

}

