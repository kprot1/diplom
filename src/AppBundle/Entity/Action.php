<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 030 30.05.18
 * Time: 20:21
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActionRepository")
 * @ORM\Table(name="action")
 */
class Action
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
    private $name;
    /**
     * @ORM\Column(type="json_array")
     */
    private $filters;
    /**
     * @ORM\Column(type="json_array")
     */
    private $rewards;

    /**
     * @var
     */
    private $typeReward;

    /**
     * @var int
     */
    private $percentReward;

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
    public function setId($id): void
    {
        $this->id = $id;
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
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param mixed $filters
     */
    public function setFilters($filters): void
    {
        $this->filters = $filters;
    }

    /**
     * @return mixed
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * @param mixed $rewards
     */
    public function setRewards($rewards)
    {
        $this->rewards = $rewards;
    }

    /**
     * @return mixed
     */
    public function getTypeReward()
    {
        return $this->typeReward;
    }

    /**
     * @param mixed $typeReward
     */
    public function setTypeReward($typeReward)
    {
        $this->typeReward = $typeReward;
    }

    /**
     * @return int
     */
    public function getPercentReward()
    {
        return $this->percentReward;
    }

    /**
     * @param int $percentReward
     */
    public function setPercentReward(int $percentReward)
    {
        $this->percentReward = $percentReward;
    }
}