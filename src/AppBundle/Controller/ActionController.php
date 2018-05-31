<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Action;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ActionController extends Controller
{
    /**
     * Отображение списка всех акций
     *
     * @Route(path="/action/list", name="action_list")
     */
    public function listAction()
    {
        $actions = $this->getDoctrine()->getRepository(Action::class)->findAll();

        return $this->render('action/list.html.twig', [
            'actions' => $actions
        ]);
    }

    /**
     * @Route(path="/action/view/{id}", name="action_view")
     *
     * @param int $id
     */
    public function viewAction(int $id)
    {
        return new Response('123');
    }

    /**
     * Создание новой акции
     *
     * @Route(path="/action/create", name="action_create")
     *
     * @param int $id
     */
    public function createAction(int $id)
    {

    }

    /**
     * Редактирование существующей акции
     *
     * @Route(path="/action/edit/{id}", name="action_edit")
     *
     * @param int $id
     */
    public function editAction(int $id)
    {

    }
}
