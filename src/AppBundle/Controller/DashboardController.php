<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 029 29.05.18
 * Time: 23:46
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="dashboard")
     *
     * @param Request $request
     * @return Response
     * @throws \InvalidArgumentException
     */
    public function indexAction(Request $request)
    {
        return $this->render('dashboard/dashboard.html.twig');
    }
}