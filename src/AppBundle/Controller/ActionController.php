<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Action;
use AppBundle\Form\ActionFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ActionController extends AbstractController
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
     * @throws \InvalidArgumentException
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
     * @return Response
     * @throws \LogicException
     */
    public function createAction(Request $request): Response
    {
        $action = new Action();
        $form = $this->createForm(ActionFormType::class, $action);

        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $action->setFilters(json_encode([$action->getName()]));
                $em = $this->getDoctrine()->getManager();
                $em->persist($action);
                $em->flush();
            }
        }

        return $this->render('action/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Редактирование существующей акции
     *
     * @Route(path="/action/edit/{id}", name="action_edit")
     *
     * @param int $id
     */
    public function editAction(Request $request, int $id)
    {
        $action = $this->getDoctrine()->getRepository(Action::class)->findBy(['id' => $id]);
        if ($action instanceof Action) {
            $form = $this->createForm(ActionFormType::class, $action);

            if ($request->isMethod($request::METHOD_POST)) {
                $form->handleRequest($request);
                if ($form->isValid()) {

                }
            }
        }
    }
}
