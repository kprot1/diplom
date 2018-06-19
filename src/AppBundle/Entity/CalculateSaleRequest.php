<?php

namespace AppBundle\Entity;

class CalculateSaleRequest
{
    /**
     * @var string
     */
    private $cardNumber;

    /**
     * @var string
     */
    private $shopCode;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var Cheque
     */
    private $cheque;

    /**
     * @return string
     */
    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     */
    public function setCardNumber(string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @return string
     */
    public function getShopCode(): string
    {
        return $this->shopCode;
    }

    /**
     * @param string $shopCode
     */
    public function setShopCode(string $shopCode): void
    {
        $this->shopCode = $shopCode;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return Cheque
     */
    public function getCheque(): Cheque
    {
        return $this->cheque;
    }

    /**
     * @param Cheque $cheque
     */
    public function setCheque(Cheque $cheque): void
    {
        $this->cheque = $cheque;
    }
}