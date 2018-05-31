<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CardController extends AbstractController
{
    /**
     * @Route(path="/view", name="card_view")
     */
    public function viewAction()
    {
        $this->render('card/view.html.twig',[]);
    }

    /**
     * @Route(path="/info/{id}", name="card_info")
     */
    public function infoAction()
    {

    }
}
