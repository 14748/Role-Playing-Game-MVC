<?php
require_once  __DIR__ . '/../conf/PersistentManager.php';
require_once __DIR__ . '/../../app/models/Creature.php';

class CreatureDAO
{
    const CREATURE = 'creature';
    private $conn = null;

    public function __construct()
    {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectAll()
    {
        $query = "SELECT * FROM " . CreatureDAO::CREATURE;
        $result = mysqli_query($this->conn, $query);
        $creatures = array();
        while ($row = mysqli_fetch_array($result)) {

            $creature = new Creature();
            $creature->setIdCreature($row["idCreature"]);
            $creature->setName($row["name"]);
            $creature->setDescription($row["description"]);
            $creature->setAvatar($row["avatar"]);
            $creature->setAttackPower($row["attackPower"]);
            $creature->setLifeLevel($row["lifeLevel"]);
            $creature->setWeapon($row["weapon"]);

            array_push($creatures, $creature);
        }
        return $creatures;
    }

    public function insert($creature)
    {
        $query = "INSERT INTO " . CreatureDAO::CREATURE .
            " (name, description, avatar, attackPower, lifeLevel, weapon) VALUES(?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($this->conn, $query);

        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weapon = $creature->getWeapon();

        mysqli_stmt_bind_param($stmt, 'sssiis', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);

        return $stmt->execute();
    }

    public function update($creature)
    {
        $query = "UPDATE " . CreatureDAO::CREATURE .
            " SET name=?, description=?, avatar=?, attackPower=?, lifeLevel=?, weapon=?"
            . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weapon = $creature->getWeapon();
        $idCreature = $creature->getIdCreature();
        mysqli_stmt_bind_param($stmt, 'sssiisi', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon, $idCreature);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM " . CreatureDAO::CREATURE . " WHERE idCreature =?";
        $stmt = mysqli_prepare($this->conn, $query);
        $idCreature = $id;
        mysqli_stmt_bind_param($stmt, 'i', $idCreature);
        return $stmt->execute();
    }

    public function findCreatureById($id)
    {
        $query = "SELECT * FROM " . CreatureDAO::CREATURE . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $idCreature, $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);
        $creature = new Creature();

        if (mysqli_stmt_fetch($stmt)) {
            $creature->setIdCreature($idCreature);
            $creature->setName($name);
            $creature->setDescription($description);
            $creature->setAvatar($avatar);
            $creature->setAttackPower($attackPower);
            $creature->setLifeLevel($lifeLevel);
            $creature->setWeapon($weapon);
        }

        return $creature;

    }
}

?>
