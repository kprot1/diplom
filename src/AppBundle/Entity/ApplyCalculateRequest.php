<?php

namespace AppBundle\Entity;

class ApplyCalculateRequest
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $documentNumber;

    /**
     * @var array
     */
    private $elements;

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
     * @return string
     */
    public function getDocumentNumber(): string
    {
        return $this->documentNumber;
    }

    /**
     * @param string $documentNumber
     */
    public function setDocumentNumber(string $documentNumber): void
    {
        $this->documentNumber = $documentNumber;
    }

    /**
     * @return array
     */
    public function getElements(): array
    {
        return $this->elements;
    }

    /**
     * @param array $elements
     */
    public function setElements(array $elements): void
    {
        $this->elements = $elements;
    }
}