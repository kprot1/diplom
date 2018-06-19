<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ApplyCalculateRequest;
use AppBundle\Entity\CalculateSaleRequest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ProcessingController extends AbstractController
{
    /**
     * @Route("/calculateSale", name="calculate_sale")
     */
    public function calculateSaleAction(Request $request)
    {
        $calculateSaleRequest = $this->get('serializer')->deserialize($request->getContent(), CalculateSaleRequest::class, 'xml');
        $calculateSaleService = $this->get('calculate_sale_service');
        return $calculateSaleService->calculate($calculateSaleRequest);

    }

    /**L;
     * @Route("/applyCalculate", name="apply_calculate")
     */
    public function applyCalculateAction(Request $request)
    {
        $applyCalculateRequest = $this->get('serializer')->deserialize($request->getContent(), ApplyCalculateRequest::class, 'xml');
        $applyCalculateService = $this->get('apply_calculate_service');
        return $applyCalculateService->apply($applyCalculateRequest);
    }

    /**
     * @Route("/revert", name="revert")
     */
    public function revertAction(Request $request)
    {
        $revertRequest = $this->get('serializer')->deserialize($request->getContent(), RevertRequest::class, 'xml');
        $revertService = $this->get('revert_service');
        return $revertService->revert($revertRequest);
    }
}
