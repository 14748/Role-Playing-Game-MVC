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
        $result = '<div>';
        $result .= '<div>';
        $result .= '<div>';
        $result .= '<h2>' . $this->getName() . '</h2>';
        $result .= '<p>' . $this->getDescription() . '</p>';
        $result .= '<a type="button" href="creature/detail.php?id=' . $this->getIdCreature() . '">Detalles</a>';
        $result .= '<a type="button" href="creature/update.php?id=' . $this->getIdCreature() . '">Modificar</a> ';
        $result .= '<a type="button" href="../../controllers/creature/deleteController.php?id=' . $this->getIdCreature() . '">Borrar</a> ';
        $result .= '</div>';
        $result .= '</div>';


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