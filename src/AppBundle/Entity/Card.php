<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CardRepository")
 * @ORM\Table(name="card")
 */
class Card
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $number;
    /**
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User", mappedBy="Card")
     */
    private $userId;
    /**
     * @ORM\Column(type="integer")
     */
    private $amountBonuses;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getAmountBonuses()
    {
        return $this->amountBonuses;
    }

    /**
     * @param mixed $amountBonuses
     */
    public function setAmountBonuses($amountBonuses)
    {
        $this->amountBonuses = $amountBonuses;
    }
}