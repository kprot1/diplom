<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route(path="/user/create", name="user_create")
     */
    public function createAction()
    {
        return $this->render('user/create.html.twig');
    }
}
