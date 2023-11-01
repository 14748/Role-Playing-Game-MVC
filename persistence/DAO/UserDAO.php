<?php

require_once  __DIR__ . '/../conf/PersistentManager.php';
require_once __DIR__ . '/../../app/models/User.php';

class UserDAO {
    const USER_TABLE = 'users';
    private $conn = null;
    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }
    public function selectAll() {
        $query = "SELECT * FROM " . UserDAO::USER_TABLE;
        $result = mysqli_query($this->conn, $query);
        $users= array();
        while ($userBD = mysqli_fetch_array($result)) {

            $user = new User();
            $user->setUserid($userBD["idUser"]);
            $user->setName($userBD["name"]);
            $user->setPassword($userBD["password"]);

            array_push($users, $user);
        }
        return $users;
    }
    public function insert($user) {
        $query = "INSERT INTO " . UserDAO::USER_TABLE .
            " (name, password) VALUES(?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $user->getName();
        $password = $user->getPassword();

        mysqli_stmt_bind_param($stmt, 'ss', $name, $password);
        return $stmt->execute();
    }
    public function check($user) {
        $query = "SELECT name, password FROM " . UserDAO::USER_TABLE . " WHERE name=? AND password=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $auxName = $user->getName();
        $auxPass =  $user->getPassword();

        mysqli_stmt_bind_param($stmt, 'ss', $auxName, $auxPass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rows = mysqli_stmt_num_rows($stmt);
        if($rows>0)
            return true;
        else
            return false;
    }
    public function selectById($id) {
        $query = "SELECT name, password FROM " . UserDAO::USER_TABLE . " WHERE idUser=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $name, $password);

        $user = new User();
        while (mysqli_stmt_fetch($stmt)) {
            $user->setUserid($id);
            $user->setName($name);
            $user->setPassword($password);
        }

        return $user;
    }
    public function delete($id) {
        $query = "DELETE FROM " . UserDAO::USER_TABLE . " WHERE idUser =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }


}

?>
