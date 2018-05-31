<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Restriction;
use AppBundle\Form\RestrictionFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RestrictionController extends AbstractController
{

    /**
     * @Route(path="/restriction/list", name="restriction_list")
     *
     * @param Request $request
     * @return Response
     * @throws \LogicException
     */
    public function listAction(Request $request): Response
    {
        $restrictions = $this->getDoctrine()->getRepository(Restriction::class)->findAll();
        return $this->render('restriction/list.html.twig', [
            'restrictions' => $restrictions
        ]);
    }

    /**
     * @Route(path="/restriction/view/{id}", name="restriction_view")
     *
     * @param Request $request
     * @param int $id
     * @return Response
     * @throws \LogicException
     */
    public function viewAction(Request $request, int $id): Response
    {
        $restriction = $this->getDoctrine()->getRepository(Restriction::class)->find($id);
        if ($restriction instanceof Restriction) {
            return $this->render('restriction/view.html.twig', [
                'restriction' => $restriction
            ]);
        }
        return new Response('restriction_view');
    }

    /**
     * @Route(path="/restriction/create", name="restriction_create")
     *
     * @param Request $request
     * @return Response
     * @throws \LogicException
     */
    public function createAction(Request $request): Response
    {
        $restriction = new Restriction();
        $form = $this->createForm(RestrictionFormType::class, $restriction);

        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $this->saveEntity($restriction);
            }
        }

        return $this->render('restriction/create.html.twig', [
            'form' => $form
        ]);
    }

    /**
     * @Route(path="/restriction/edit/{id}", name="restriction_edit")
     *
     * @param Request $request
     * @param int $id
     * @return Response
     * @throws \LogicException
     */
    public function editAction(Request $request, int $id): Response
    {
        $restriction = $this->getDoctrine()->getRepository(Restriction::class)->find($id);
        if ($restriction instanceof Restriction) {
            $form = $this->createForm(RestrictionFormType::class, $restriction);
            if ($request->isMethod($request::METHOD_POST)) {
                $form->handleRequest($request);
                if ($form->isValid()) {
                    $this->saveEntity($restriction);
                }
            }
            return $this->render('restriction/edit.html.twig', [
                'restriction' => $restriction
            ]);
        }
        return new Response('restriction_edit');
    }
}
