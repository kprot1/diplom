<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/test/", name="test")
     * @param Request $request
     * @return Response
     * @throws \InvalidArgumentException
     */
    public function testAction(Request $request)
    {
        return new Response('123');
    }
}
