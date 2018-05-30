<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 030 30.05.18
 * Time: 20:23
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ShopRepository")
 * @ORM\Table(name="shop")
 */
class Shop
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
     * @ORM\Column(type="string")
     */
    private $code;
    /**
     * @ORM\Column(type="string")
     */
    private $prefix;
    /**
     * @ORM\Column(type="string")
     */
    private $accrualPercent;
    /**
     * @ORM\Column(type="string")
     */
    private $usePercent;
    /**
     * @ORM\Column(type="string")
     */
    private $discountPercent;

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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param mixed $prefix
     */
    public function setPrefix($prefix): void
    {
        $this->prefix = $prefix;
    }

    /**
     * @return mixed
     */
    public function getAccrualPercent()
    {
        return $this->accrualPercent;
    }

    /**
     * @param mixed $accrualPercent
     */
    public function setAccrualPercent($accrualPercent): void
    {
        $this->accrualPercent = $accrualPercent;
    }

    /**
     * @return mixed
     */
    public function getUsePercent()
    {
        return $this->usePercent;
    }

    /**
     * @param mixed $usePercent
     */
    public function setUsePercent($usePercent): void
    {
        $this->usePercent = $usePercent;
    }

    /**
     * @return mixed
     */
    public function getDiscountPercent()
    {
        return $this->discountPercent;
    }

    /**
     * @param mixed $discountPercent
     */
    public function setDiscountPercent($discountPercent): void
    {
        $this->discountPercent = $discountPercent;
    }
}