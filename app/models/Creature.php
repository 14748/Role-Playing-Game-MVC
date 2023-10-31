<?php

class Creature
{
    private $idCreature;
    private $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weapon;

    public function __construct(){

    }

    function privateCreatureHtml() {
        $id = $this->getIdCreature();
        $name = $this->getName();
        $description = $this->getDescription();

        // Start a container for a 4-column wide space
        $result = "<div class='col-3'>";
        $result .= "<div class='card'>";
        $result .= "<div class='card-body'>";
        $result .= "<h5 class='card-title'>{$name}</h5>";
        $result .= "<p class='card-text'>{$description}</p>";
        $result .= "<a href='creature/detail.php?id={$id}' class='btn btn-primary'>Detalles</a> ";
        $result .= "<a href='creature/update.php?id={$id}' class='btn btn-secondary'>Modificar</a> ";
        $result .= "<a href='../../controllers/creature/deleteController.php?id={$id}' class='btn btn-danger'>Borrar</a> ";
        $result .= "</div>"; // Close card-body
        $result .= "</div>"; // Close card
        $result .= "</div>"; // Close col-md-4

        return $result;
    }



    function publicCreatureHtml() {
        $id = $this->getIdCreature();
        $name = $this->getName();
        $description = $this->getDescription();

        // Start a container for a 4-column wide space
        $result = "<div class='col-3'>";
        $result .= "<div class='card'>";
        $result .= "<div class='card-body'>";
        $result .= "<h5 class='card-title'>{$name}</h5>";
        $result .= "<p class='card-text'>{$description}</p>";
        $result .= "<a href='creature/detail.php?id={$id}' class='btn btn-primary'>Detalles</a>";
        $result .= "</div>"; // Close card-body
        $result .= "</div>"; // Close card
        $result .= "</div>"; // Close col-md-4

        return $result;
    }



    /**
     * @return mixed
     */
    public function getIdCreature()
    {
        return $this->idCreature;
    }

    /**
     * @param mixed $idCreature
     */
    public function setIdCreature($idCreature)
    {
        $this->idCreature = $idCreature;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return mixed
     */
    public function getAttackPower()
    {
        return $this->attackPower;
    }

    /**
     * @param mixed $attackPower
     */
    public function setAttackPower($attackPower)
    {
        $this->attackPower = $attackPower;
    }

    /**
     * @return mixed
     */
    public function getLifeLevel()
    {
        return $this->lifeLevel;
    }

    /**
     * @param mixed $lifeLevel
     */
    public function setLifeLevel($lifeLevel)
    {
        $this->lifeLevel = $lifeLevel;
    }

    /**
     * @return mixed
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * @param mixed $weapon
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

}