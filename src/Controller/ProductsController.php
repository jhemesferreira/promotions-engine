<?php

namespace App\Controller;

use App\DTO\LowestPriceEnquiry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ProductsController extends AbstractController
{
    #[Route('/products/{id}/lowest-price', name: 'lowest-price', methods: Request::METHOD_POST)]
    public function lowestPrice(Request $request, SerializerInterface $serializer, int $id)
    {

        if($request->headers->has('force_fail')){
            return new JsonResponse(
                ['error' => 'Promotions Engine failure message'],
                $request->headers->get('force_fail')
            );
        }

        $lowestPriceEnquire = $serializer->deserialize($request->getContent(), LowestPriceEnquiry::class, 'json');

        return new JsonResponse([
            "quantity" => 5,
            "request_location" => "UK",
            "voucher_code"  => "OU812",
            "request_date" => "2022-04-04",
            "product_id" => $id,
            'price' => 100,
            'discounted_price' => 50, 
            'promotion_id' => 3,
            'promotion_name' => 'Black Friday half price sale'
        ], 200);

    }
}