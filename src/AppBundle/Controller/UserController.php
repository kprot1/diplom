<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserCreationFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route(path="/user/create", name="user_create")
     */
    public function createAction()
    {
        $user = new User();
        $form = $this->createForm(UserCreationFormType::class, $user);

        return $this->render('user/create.html.twig', ['form' => $form->createView()]);
    }
}
