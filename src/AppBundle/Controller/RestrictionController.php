<?php

namespace AppBundle\Controller;


class RestrictionController extends AbstractController
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
