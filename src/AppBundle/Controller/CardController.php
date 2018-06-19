<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Card;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CardController extends AbstractController
{
    /**
     * @Route(path="/view", name="card_view")
     */
    public function viewAction()
    {
        $card = null;
        $user = null;

        $cardNumber = $this->getCardNumberFilter();
        if ($cardNumber !== null) {
            $card = $this->getDoctrine()->getRepository(Card::class)->findOneBy(['number' => $cardNumber]);
            if ($card instanceof Card) {
                $user = $this->getDoctrine()->getRepository(User::class)->find($card->getUserId());
            }
        }

        return $this->render('card/view.html.twig',[
            'card' => $card,
            'user' => $user
        ]);
    }

    /**
     * @return string | null
     */
    private function getCardNumberFilter()
    {
        return !empty($_POST['card_number_filter']) ? $_POST['card_number_filter'] : null;
    }
}
