<?php

namespace AppBundle\Controller;

class ShopController extends AbstractController
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
