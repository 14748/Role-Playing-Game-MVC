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