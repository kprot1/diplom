<?php

namespace AppBundle\Entity;

class Cheque
{
    /**
     * @var Element[]
     */
    private $elements;

    /**
     * @return Element[]
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param Element[] $elements
     */
    public function setElements($elements): void
    {
        $this->elements = $elements;
    }
}